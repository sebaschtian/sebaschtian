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
            <li><a  href="spiegel.php">RGB Spiegel</a></li>
            <li><a class="active" href="#">RGBees</a></li>
            </ul>

        </nav>

        <section class="Produktdetails">

            <form method="post">
                <div class="textp" method="post" action="phprechner.php">
                    <p>Das Besondere an diesem sch&ouml;nem Produkt ist, dass es kein Spiegel ist, sondern Schallschutzmatten, 
                        die das RGB Licht aus dem Hintergrund leicht durscheinen lassen und bes&auml;mftigen. Dazu kann man 
                        noch entscheiden, was zum Kontrast dienen soll:<br> <br>

                    <label class="Hakenbox">Buchen Holz
                        <input type="radio" name="zahl1" val-ue="100">
                        <span class="checkmark"></span>
                    </label>
                    <label class="Hakenbox">Walnus Holz 
                        <input type="radio" name="zahl1" val-ue="120">
                        <span class="checkmark"></span>
                    </label>
                    <label class="Hakenbox">Eichen Holz 
                        <input type="radio" name="zahl1" val-ue="50">
                        <span class="checkmark"></span>
                    </label>
                    <input type="submit" name='Ausrechnen' value="What would it cost?">
                        <br>
                    <a href="phprechner.php?">Ergebnis anzeigen</a>
                </div>
            </form>

            <div class="product">
                <img src="images/RGB_Spiegel.jpg" alt="Product Image">
            </div>

            <div class="thumbnail">
                <a href="images/RGB_Spiegel.jpg" target="_blank"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image"></a>
                <a href="images/RGB_Spiegel.jpg" target="_blank"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image"></a>
                <a href="images/RGB_Spiegel.jpg" target="_blank"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image"></a>
            </div>

            <div class="texth2">
                <h2>RGBees</h2>
            </div>

        </section>

    
        <article>
            <div class="Uebers_Produkt">
                <table>
                    <tr>
                        <td class="head">Unendliche Kombinationen<br><br>Die RGB Bienenwaben, die in 3 Verschiedenen gr&ouml;ssen
                        wunderbar Leuchten, kann man in unendlich vielen kombinationen an die Wand oder Decke montieren.</td>
                        <td><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:45%"></td>
                    </tr>
                    <tr>
                        <td><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:45%"></td>
                        <td class="head2">Farbenfreude<br><br>Wie auch in den anderen Produkten, sind hier die selben RGBic
                        Led-Streifen verbaut, die unglaubliches Farbengef&uuml;hl geben. Sie sind voll &uuml;ber unsere eigens entwickelte
                        App einstellbar, wodurch man jede einzelne LED selbst&auml;ndig und Individuell einstellen kann. Das alles zusammen
                        ergibt ein rundum sorglospacket, dass Zusammengebaut ziemlich Bunt ist und in jeder Wohnung ein Hingucker ist.</td>
                    </tr>
                    <tr>
                        <td class="head">Vielf&auml;ltig<br><br>Sie kaufen hier nicht nur ein Schallabsorber, der in seiner sch&ouml;nheit
                        kaum zu &uuml;bertreffen scheint, sonder auch ein Hingucker für jederman, auch wenn Sie ein Schallabsorber
                        nicht unbedingt von n&ouml;ten haben. </td>
                        <td><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:45%"></td>
                    </tr>
                </table>
            </div>
        </article>

        <div class="Product">
            <div class="Produkte_head">
                <h2>Andere Produkte die Sie Interessieren k&ouml;nnten</h2>
            </div>
                
            <div class="Andere_Produkte">
                <div class="Other_Productsre">
                    <a href="spiegel.php"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:7%"></a>
                    <p>Soundmirror</p>
                </div>
                
                <div class="Other_Productsli">
                    <a href="soundmirror.php"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:7%"></a>
                    <p>RGB Spiegel</p>
                </div>
            </div>
        </div>
        
        <?php
            include ("generalphp/footer.php")
        ?>

    </body>
</html>