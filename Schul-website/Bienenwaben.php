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

        <form method="post">
            <div class="textp">
                <p>Das Besondere an diesem sch&ouml;nem Produkt ist, dass es kein Spiegel ist, sondern Schallschutzmatten, 
                    die das RGB Licht aus dem Hintergrund leicht durscheinen lassen und bes&auml;mftigen. Dazu kann man 
                    noch entscheiden, was zum Kontrast dienen soll:<br> <br>

                <label class="Hakenbox">Buchen Holz  <?php echo $price_buche; ?> 
                    <input type="radio" name="radio" value="buche">
                    <span class="checkmark"></span>
                </label>
                <label class="Hakenbox">Walnus Holz  <?php echo $price_walnuss; ?> 
                    <input type="radio" name="radio" value="walnuss">
                    <span class="checkmark"></span>
                </label>
                <label class="Hakenbox">Eichen Holz  <?php echo $price_eiche; ?> 
                    <input type="radio" name="radio" value="eiche">
                    <span class="checkmark"></span>
                </label>
                <input type="submit" value="Calculate Total Price">
            </div>
        </form>

        <?php
            $price_buche = 100;
            $price_walnuss = 130;
            $price_eiche = 50;

            if (isset($_POST['radio'])) {
                $selected_wood = $_POST['radio'];
            
                if ($selected_wood == 'buche') {
                    $total_price = $price_buche;
                } elseif ($selected_wood == 'walnuss') {
                    $total_price = $price_walnuss;
                } elseif ($selected_wood == 'eiche') {
                    $total_price = $price_eiche;
                } else {
                    $total_price = 0;
                }
            } else {
                $total_price = 0;
            }
        ?>
        
        <?php
            if(isset($_POST['radio'])) {
                echo "Total Price: " . $total_price . " €";
            }
        ?>

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

    <div class="Produkte_head">
        <h2>Andere Produkte die Sie Interessieren k&ouml;nnten</h2>
    </div>

    <div class="Andere_Produkte">
        <div class="Other_Products">
            <a href="Spiegel.php"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:10%">soundmirror</a>
        </div>

        <div class="Other_Products">
            <a href="soundmirror.php"><img src="images/RGB_Spiegel.jpg" alt="Picture" class="image" style="width:10%">RGB Spiegel</a>
        </div>
    </div>
    
    <?php
        include ("generalphp/footer.php")
    ?>

</body>
</html>