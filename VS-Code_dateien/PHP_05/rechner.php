
<div id="content">
    <form name="bmirechnerformular" method="post" action="rechner1.php">

        <fieldset>
            <legend>Taschenrechner</legend>

            <label for="tfZahl1">
                Zahl 1:
            </label> <br>
            <input type="number" step="0.1"  name="tfZahl1" id="tfZahl1" placeholder="#,##"
                required="required" autofocus="autofocus" /> <br> <br>

            <label for="tfZahl2">
                Zahl 2:
            </label> <br>
            <input type="number" step="0.1"  name="tfZahl2" id="tfZahl2" placeholder="#,##"
                required="required" /> <br> <br>

        </fieldset>
        <br>
        <fieldset>
            <legend>Optionen</legend>
            <div id="left">
                <input type="radio" name="rbOperator" val-ue="1"/>+ (addieren)<br/><br/>
                <input type="radio" name="rbOperator" val-ue="2"/>- (subtrahieren)<br/><br/>
                <input type="radio" name="rbOperator" val-ue="5"/>^ (potenzieren)<br/><br/>
            </div>
            <div id="right">
                <input type="radio" name="rbOperator" val-ue="6"/>* (Multiplikation)<br/><br/>
                <input type="radio" name="rbOperator" val-ue="7"/>/ (Division)<br/><br/>
                <input type="submit" value="ausrechnen" name='Ausrechnen'>
            </div>
            
        </fieldset>

    </form>

</div>	
