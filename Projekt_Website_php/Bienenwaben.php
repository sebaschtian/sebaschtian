<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB Bees</title>
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
           <li><a href="index.php">Home</a></li>
           <li><a href="index.php#Ueber_uns">About us</a></li>
           <li><a href="soundmirror.php">Sound Mirror</a></li>
           <li><a  href="Spiegel.php">RGB Spiegel</a></li>
           <li><a class="active" href="#">RGBees</a></li>
        </ul>
    </nav>


    <section class="Produktdetails">
    <div class="textp">
        <p>Das besondere an diesem schönen Produkt ist,dass es kein Spiegel ist, sondern Schallschutzmatten, 
            die das RGB Licht aus dem Hintergrund leicht durscheinen lassen und besämftigen. Dazu kann man 
            noch entscheiden, was zum Koontrast dienen soll:<br> <br>

            <label class="Hakenbox">Buchen Holz
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="Hakenbox">Walnus Holz
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
            <label class="Hakenbox">Schwarze Schallschutzmatten
                <input type="radio" name="radio">
                <span class="checkmark"></span>
            </label>
        </p>
    </div>
    <div class="product">
        <img src="images/RGB_Spiegel.avif" alt="Product Image">
    </div>
    <div class="thumbnail">
        <a href="images/RGB_Spiegel.avif"><img src="images/RGB_Spiegel.avif" alt="Picture" class="image"></a>
        <a href="images/RGB_Spiegel.avif"><img src="images/RGB_Spiegel.avif" alt="Picture" class="image"></a>
        <a href="images/RGB_Spiegel.avif"><img src="images/RGB_Spiegel.avif" alt="Picture" class="image"></a>
    </div>
    <div class="texth2">
        <h2> RGBees</h2>
    </div>
</section>

  
    <article>
        <div class="Uebers_Produkt">
            <table>
                <tr>
                    <td class="head">Unendliche Kombinationen<br><br>Die RGB Bienenwaben, die in 3 Verschiedenen gr&ouml;ssen
                     wunderbar Leuchten, kann man in unendlich vielen kombinationen an die Wand oder Decke bringen.</td>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></td>
                </tr>
                <tr>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></td>
                    <td class="head2">Farbenfreude<br><br></td>
                </tr>
                <tr>
                    <td class="head"><br><br></td>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></td>
                </tr>
            </table>
        </div>
    </article>

    <div class="Produkte_head">
        <h2>Andere Produkte die Sie Interessieren k&ouml;nnten</h2>
    </div>
    <div class="Andere_Produkte">
        <ul class="unordered">
            <li> <a href="soundmirror.php"><img src="RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></a>soundmirror</li>
            <li> <a href="Spiegel.php"><img src="RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></a>RGB Spiegel</li>
        </ul>
    </div>
    
    <?php
        include ("generalphp/footer.php")
    ?>

</body>
</html>