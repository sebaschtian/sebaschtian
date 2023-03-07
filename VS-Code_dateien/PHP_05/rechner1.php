<?php
    include ("head.php");
?>
<body>
    <div id="wrapper">
    <?php
        include ("header.php");
    ?>
    <div id="content">
    <form>
        <fieldset>
            <legend>Ihr persönlicher Taschenrechner</legend>
            <?php
                $pZahl1 = $_POST['tfZahl1'];
                $pZahl2 = $_POST['tfZahl2'];
                $dieDaten = new Taschenrechner();

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

                echo "Zahl1:"
                    .$dieDaten -> set_zahl1()."</h5>";
                echo "Zahl2:"
                    .$dieDaten -> set_zahl2()."</h5>";
                echo "Operator"
                    .$dieDaten -> get_operator()."</h5>";
                echo "Ergebnis"
                    .$ausgabe;


                function berechne($pZahl1,$pZahl2,$pOperator) {

                    $mOperator = $pOperator;
                    $mZahl1 = $pZahl1;
                    $mZahl2 = $pZahl2;
                        
                    switch($mOperator){
                        case 1:
                            $mErgebnis = addieren($mZahl1,$mZahl2);
                            break;
                        case 2:
                            $mErgebnis = subtrahieren($mZahl1,$mZahl2);
                            break;
                        case 3:
                            $mErgebnis = multiplizieren($mZahl1,$mZahl2);
                            break;
                        case 4:
                            $mErgebnis = dividieren($mZahl1,$mZahl2);					
                            break;
                        case 5:
                            $mErgebnis = potenzieren($mZahl1,$mZahl2);
                            break;
                        default:
                            $mErgebnis = 0;
                                    
                    }
                        return $mErgebnis;
                }
                
            ?>
