<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB Mirror</title>
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
            <li><a class="active" href="#">RGB Mirror</a></li>
            <li><a href="Bienenwaben.php">RGBees</a></li>
            <div class="linken">
                <a href=Spiegel.php><img src="images/Germany.jpg" alt="Picture" class="image"></a>
            </div>
        </ul>
     </nav>
     

     <section class="Produktdetails">
        <div class="textp">
            <p>
                This is a mirror with an integrated RGBic band that can even be used to change 
                colors with a mobile phone if desired. The mirror is easy to assemble and very 
                user-friendly in its design. There are 3 different frames for the mirror: <br> <br>

                <label class="Hakenbox">Holz frame
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="Hakenbox">Lego frame
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="Hakenbox">Naked, no frame
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
        </div>RGB_Spiegel.avif
        <div class="texth2">
            <h2> RGB Mirror</h2>
        </div>

    </section>
  
  
    <article>
        <div class="Uebers_Produkt ">
            <table>
                <tr>
                    <td class="head">lighting<br><br>
                        The rounded lighting can shine brightly in 16.8 million colors. It can also light up in 
                        different colors at the same time, thanks to the special RGBic LED strip.</td>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></td>
                </tr>
                <br>
                <tr>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width: 45%"></td>
                    <td class="head2">User friendly<br><br>He shines even in the shadows. In order to achieve this, 
                        you first have to set up the mirror, this works excellently with our instructions, but it's 
                        also very easy without it. We try to offer a replacement if the construction should fail. 
                        For you, of course, with extremely fast customer support that is available to you around the 
                        clock.</td>
                </tr>
                <tr>
                    <td class="head">Big<br><br>
                        The mirror not only catches the eye with its design, it is also at the forefront with its 
                        comprehensive size. </td>
                    <td><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></td>
                </tr>
            </table>
        </div>
    </article>

    <div class="Produkte_head">
        <h2>Other products you may be interested in</h2>
    </div>
    <div class="Andere_Produkte">
        <ul class="unordered">
            <li> <a href="Bienenwaben.php"><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></a>RGBees</li>
            <li> <a href="soundmirror.php"><img src="images/RGB_Spiegel.avif" alt="Picture" class="image" style="width:45%"></a>soundmirror</li>
        </ul>
    </div>

    <?php 
        include_once("generalphp/footer.php"); 
    ?>


</body>
</html>