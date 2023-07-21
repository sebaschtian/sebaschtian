import cv2
#import cvlib as cv
#from cvlib.object_detection import draw_bbox
import numpy as np
from PIL import Image
import requests
#import concurrent.futures
from ultralytics import YOLO

iseditoractivated = False
usearrayfromnpyfile = False

Polygonecounter = 0
Polygonepointcounter = 0
Polylist = []

PAt = [False]*10
PA = [None]*10

model = YOLO("yolov8n.pt")

url='http://192.168.252.51/cam-hi.jpg'

def Savepolygons():
     global PA
     np.save("savepolys.npy",PA,False)

def loadpolys():
     global PA    
     PA = np.load("savepolys.npy",False,False)

def Polygonelisteditor(event,x,y,flags, param):
    global Polygonecounter
    global Polygonepointcounter
    global PA
    global Polylist
   
    if event == cv2.EVENT_LBUTTONDOWN:
        Polygonepointcounter += 1
        Polylist.append([x,y])
        
        if Polygonepointcounter >= 4:
            Polygonepointcounter = 0  
            PA[Polygonecounter] = np.array(Polylist,np.int32)
            PA[Polygonecounter] = PA[Polygonecounter].reshape((-1,1,2))
            Polygonecounter += 1
            Polylist = []
            print(PA)
    
    if Polygonecounter == len(PA):
        if cv2.waitKey(5) == ord("s"):
            Savepolygons()    
#------------------------------------------------------------------------------------------
if usearrayfromnpyfile == True:
    loadpolys()            

while True:
        try:
            im = Image.open(requests.get(url, stream=True).raw)
            im = np.array(im)
            
            im = cv2.rotate(im, cv2.ROTATE_180)
            im = cv2.cvtColor(im, cv2.COLOR_BGR2RGB)

            for parkplatz in PA:
                cv2.polylines(im,[parkplatz],True,(0,255,255))

            cv2.imshow('image',im)
            
            if Polygonelisteditor == True:
                cv2.setMouseCallback('image', Polygonelisteditor)
                
           
        except requests.exceptions.RequestException as e:
            print(e)
        
        key=cv2.waitKey(5)
        if key==ord('q'):
            break


