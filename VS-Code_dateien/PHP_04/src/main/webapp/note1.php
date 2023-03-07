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
                <legend>Notenrechner</legend>  <!-- Legende für den Formularbereich -->
                <?php 
                    $pMathe = $_POST['tfMathe'];  
                    $pDeutsch = $_POST['tfDeutsch'];  
                    $pEnglisch = $_POST['tfEnglisch']; 
                    $pBwl = $_POST['tfBwl']; 

                    function berechne_durchschnitt($pMathe, $pDeutsch, $pEnglisch, $pBwl) {  // Definition der Funktion zur Berechnung des Durchschnitt
                        $mMathe = $pMathe;
                        $mDeutsch = $pDeutsch;
                        $mEnglisch = $pEnglisch;
                        $mBwl = $pBwl;

                        $mDurchschnitt = ($mMathe+$mDeutsch+$mEnglisch+$mBwl)/4;  // Berechnung des Durchschnitt
                        return $mDurchschnitt;  // Rückgabe des berechneten Durchschnitt
                    }
                    $ausgabe = berechne_durchschnitt($pMathe,$pDeutsch,$pEnglisch,$pBwl);  // Aufruf der Funktion zur Berechnung des Durchschnitt

                    echo "Note in Mathe: <h5>".$pMathe."</h5>";  // Ausgabe von Mathenote
                    echo "Note in Deutsch: <h5>".$pDeutsch."</h5>";  // Ausgabe von Deutschnote
                    echo "Note in Englisch: <h5>".$pEnglisch."</h5>";  // Ausgabe von Englischnote
                    echo "Note in Bwl: <h5>".$pBwl."</h5>";  // Ausgabe von Bwlnote
                    echo "Ergebnis: ".round($ausgabe,2);  // Ausgabe des berechneten Durchschnitts
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