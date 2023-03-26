        <?php

            

            $price_standard == 100;
            $price_buche == 100;
            $price_walnuss == 130;
            $price_eiche == 50;

            if (isset($_POST['radio'])) {
                $selected_wood = $_POST['radio'];
            
                if ($selected_wood == 'buche') {
                    $total_price = $price_buche + $price_standard;
                } elseif ($selected_wood == 'walnuss') {
                    $total_price = $price_walnuss + $price_standard;
                } elseif ($selected_wood == 'eiche') {
                    $total_price = $price_eiche + $price_standard;
                } else {
                    $total_price = $price_standard;
                }
            } 
        ?>
                    <?php
                if(isset($_POST['radio'])) {
                    echo "Ihr Preis: " . $total_price . " €";
                }
            ?>