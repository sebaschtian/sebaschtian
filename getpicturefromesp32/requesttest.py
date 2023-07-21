import cv2
#import cvlib as cv
#from cvlib.object_detection import draw_bbox
import numpy as np
from PIL import Image
import requests
#import concurrent.futures
from ultralytics import YOLO
 
url1 = 'http://www.informatik-wangen.de/rein.php'
myobj = {'id': '6', 'freieparklplaetze': '1'}

x = requests.post(url1, json = myobj)
print(x.text)

pa = [None]*8
pa[0] = np.array([[ 31, 494],[127, 341],[237, 359],[156, 522]],np.int32).reshape((-1,1,2))
pa[1] = np.array([[194, 532],[236, 433],[488, 447],[496, 552]],np.int32).reshape((-1,1,2))
pa[2] = np.array([[557, 550],[543, 437],[734, 402],[784, 504]],np.int32).reshape((-1,1,2))
pa[3] = np.array([[203, 264],[236, 201],[297, 205],[276, 263]],np.int32).reshape((-1,1,2))
pa[4] = np.array([[289, 259],[317, 187],[382, 188],[379, 265]],np.int32).reshape((-1,1,2))
pa[5] = np.array([[388, 262],[394, 188],[454, 188],[464, 249]],np.int32).reshape((-1,1,2))
pa[6] = np.array([[480, 253],[471, 186],[529, 195],[551, 246]],np.int32).reshape((-1,1,2))
pa[7] = np.array([[568, 252],[547, 197],[610, 190],[631, 247]],np.int32).reshape((-1,1,2))

#pa[0]= pa[0].reshape((-1,1,2))
pabesetzt = [False]*len(pa)
pabesetzlist = [[],[],[],[],[],[],[],[]]
pabesetztLong = [False]*len(pa)
pacolor = [(0,255,0)]*len(pa)

pabesetztLongtwo = [False]*len(pa)
#PA001 = np.array([[28,494],[99,360],[217,372],[135,533]],np.int32)
#PA001 = PA001.reshape((-1,1,2))
#paa001 = False

model = YOLO("yolov8n.pt")

url='http://192.168.252.51/cam-hi.jpg'

def drawCircle(event, x, y, flags, param):
    if event == cv2.EVENT_LBUTTONDOWN:
        print('({}, {})'.format(x, y))

while True:
        try:
            im = Image.open(requests.get(url, stream=True).raw)
            im = np.array(im)
            
            im = cv2.rotate(im, cv2.ROTATE_180)
            im = cv2.cvtColor(im, cv2.COLOR_BGR2RGB)

            res = model.predict(im, classes=[2,3,5,7])
            #res_plotted = res[0].plot()
            res_plotted = im
            boxes = res[0].boxes
            
            pabesetzt = [False]*len(pa)
            pacolor = [(0,255,0)]*len(pa)

            

            for box in boxes:
                
                x1 = box.xyxy[0][0]
                y1 = box.xyxy[0][1]
                x2 = box.xyxy[0][2]
                y2 = box.xyxy[0][3]
                xm = int((x1+x2)//2)
                ym = int((y1+y2)//2)

                for i in range (len(pa)):
                    
                    iscaronparkingslot = cv2.pointPolygonTest(pa[i],(xm,ym),False)
                    if(iscaronparkingslot == 1):
                        pabesetzt[i] = True

                    if pabesetztLong[i] == False:
                        pacolor[i] = (0,0,255) 
                
                cv2.circle(res_plotted, (xm,ym), 5, (255,0,0), 3)

            for i in range (len(pa)):
                cv2.polylines(res_plotted,[pa[i]],True,pacolor[i],2)
            
            cv2.imshow('image',res_plotted)
            cv2.setMouseCallback('image', drawCircle)
            
            for i in range (len(pa)):

                
                if(pabesetzt[i]==True):
                    pabesetzlist[i].append(1)
                else:
                    pabesetzlist[i].append(0)
                
                
                if(len(pabesetzlist[i])>30):
                    pabesetzlist[i].pop(0)

                if(sum(pabesetzlist[i])>25):
                    if(pabesetztLong[i]!=True):
                        pabesetztLong[i]=True
                elif(sum(pabesetzlist[i])<5):
                    if(pabesetztLong[i]!=False):
                        pabesetztLong[i]=False  
            
            for i in range (len(pa)):    
                if pabesetztLong[i] != pabesetztLongtwo[i]:
                    pabesetztLongtwo[i] = pabesetztLong[i]
                    requests.post(url1, json = {'id':str(i),'freieparklplaetze':str(int(pabesetztLong[i]))})

            #print("-----------------")
            #print(pabesetzlist)    
            print(pabesetztLong)
            
                #iscaronparkingslot = cv2.pointPolygonTest(pa[i],(xm,ym),False)
                #pabesetzt[i] = iscaronparkingslot
                #print(pabesetzt[i])
            
                
        
        except requests.exceptions.RequestException as e:
             print(e)
        
        key=cv2.waitKey(50)
        if key==ord('q'):
            break


