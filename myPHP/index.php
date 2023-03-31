<!DOCTYPE html>
<html lang="de" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>See You Smile</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="Styles/format.css">
   </head>
   <body>

    <nav>
         <div class="logo">
            Light Queen
         </div>
         <input type="checkbox" id="click">

         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>

         <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="index.php#Ueber_uns">About us</a></li>
            <li><a href="soundmirror.php">Sound Mirror</a></li>
            <li><a href="spiegel.php">RGB Spiegel</a></li>
            <li><a href="bienenwaben.php">RGBees</a></li>
         </ul>

    </nav>
     
    
    <section>
        <div class="box">

            <h2>My Products</h2>
            
            <div class="RGBSpiegel">
                <a href="spiegel.php"><img src="images/Spiegel1.png" alt="Picture" class="image" style="width:90%"></a>
                <div class="middle">
                    <div class="hidden">RGB Spiegel</div>
                </div>
            </div>

            <div class="RGBSpiegel">
                <a href="soundmirror.php"><img src="images/Sound1.png" alt="Picture" class="image" style="width:90%"></a>
                <div class="middle">
                    <div class="hidden">Soundmirror</div>
                </div>
            </div>

            <div class="RGBSpiegel">
                <a href="bienenwaben.php"><img src="images/Bees1.png" alt="Picture" class="image" style="width:90%"></a>
                <div class="middle">
                    <div class="hidden">RGBees</div>
                </div>
            </div>

        </div>
    </section>


    <article class="nr1" id="Ueber_uns">
        <div class="box">
            <h2>About us</h2>
            <p>HI! I'm Sebastian, <br> welcome to my brand new Website. <br> <br> 
            Hier kannst du mein Schulprojekt begutachten und die Entwicklung Schritt für Schritt 
            Anschauen.</p>
        </div>
    </article>

    <?php 
        include("generalphp/footer.php"); 
    ?>

   </body>
</html>