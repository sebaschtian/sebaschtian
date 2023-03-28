<!--fehler entfernen (ergebnis) -->
<form>
    <fieldset>

        <?php
            $multiplikator = 100;
            $zahl1 = $_POST['zahl1'];
            $ergebnis = '';

            if(isset($_POST['submit'])){
                $ergebnis = $zahl1 + $multiplikator;   
            }
        ?>
        <?php
            if(isset($_GET['ergebnis'])){
                $ergebnis = $_GET['ergebnis'];
               echo "Das Ergebnis ist: ".$ergebnis;
            }
         ?>
        
    </fieldset>
</form>