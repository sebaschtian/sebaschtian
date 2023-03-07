<?php
    include ("head.php");  // Einbinden der head.php-Datei, die Metadaten enthält
?>
<body>
    <div id="wrapper">  <!-- Umhüllung aller Inhalte -->
    <?php
        include ("header.php");  // Einbinden der header.php-Datei, die den Header enthält
    ?>
    <div id="content">  <!-- Umhüllung des Inhaltsbereichs -->
        <form>  <!-- Beginn eines HTML-Formulars -->
            <fieldset>  <!-- Umhüllung eines zusammengehörigen Formularbereichs -->
                <legend>Bmi berechnen</legend>  <!-- Legende für den Formularbereich -->
                <?php 
                    $pGewicht = $_POST['tfGewicht'];  // Zuweisung des Gewichts aus dem Formular
                    $pGroesse = $_POST['tfGroesse'];  // Zuweisung der Größe aus dem Formular

                    function berechne_bmi($pGewicht, $pGroesse) {  // Definition der Funktion zur Berechnung des BMI
                        $mGewicht = $pGewicht;
                        $mGroesse = $pGroesse;
                        $mBmi = $mGewicht/($mGroesse*$mGroesse);  // Berechnung des BMI
                        return $mBmi;  // Rückgabe des berechneten BMI
                    }
                    $ausgabe = berechne_bmi($pGewicht,$pGroesse);  // Aufruf der Funktion zur Berechnung des BMI

                    echo "Gewicht (in Kg): <h5>".$pGewicht."</h5>";  // Ausgabe des Gewichts
                    echo "Gr&ouml;&szlig;e (in m): <h5>".$pGroesse."</h5>";  // Ausgabe der Größe
                    echo "Ergebnis: ".round($ausgabe,2);  // Ausgabe des berechneten BMI
                ?>
            </fieldset>  <!-- Ende des Formularbereichs -->
        </form>  <!-- Ende des HTML-Formulars -->
    </div>  <!-- Ende des Inhaltsbereichs -->
    
    <?php
        include ("sidebar.php");  // Einbinden der sidebar.php-Datei, die die Seitenleiste enthält
    ?>
    <?php
        include ("footer.php");  // Einbinden der footer.php-Datei, die den Footer enthält
    ?>
    </div>  <!-- Ende der Umhüllung aller Inhalte -->
</body>
</html>