<!--Umhülung noch einfügen
    link noch ändern (css)
    fehler entfernen (Variablen) -->
<form>
    <fieldset>
    <?php
        $pZahl1 = $_POST['buche'];
        $pZahl2 = $_POST['walnuss'];
        $pZahl3 = $_POST['eiche'];
        $pstandard = 100
        $dieDaten = new rechner();

        function pruefe(){
            if(isset($_POST[rbOperator])){
                $pOperator = $_POST['rbOperator'];
            }else{
                $pOperator = 0;
            }return $pOption;
        }
        $dieDaten -> set_operator($pOperator);
        $dieDaten -> set_zahl1($pZahl1);
        $dieDaten -> set_zahl2($pZahl2);
        $dieDaten -> set_zahl3($pZahl3);
        echo "Ergebnis"
            .$ausgabe;
        function berechne($pZahl1,$pZahl2,$pOperator) {
            $mOperator = $pOperator;
            $mZahl1 = $pZahl1;
            $mZahl2 = $pZahl2;
            $mZahl3 = $pZahl3;
                
            switch($mOperator){
                case 1:
                    $mErgebnis = addieren($mZahl1,$pstandard);
                    break;
                case 2:
                    $mErgebnis = addieren($mZahl2,$pstandard);
                    break;
                case 3:
                    $mErgebnis = addieren($mZahl3,$pstandard);
                    break;

                default:
                    $mErgebnis = $pstandard;
                            
            }
                return $mErgebnis;
        }
    ?>
    </fieldset>
</form>