
<div id="content">
    <form name="bmirechnerformular" method="post" action="bmi1.php">

        <fieldset>
            <legend>BMI ausrechnen</legend>

            <label for="tfGewicht">
                Gewicht (in Kg):
            </label> <br>
            <input type="number" step="0.1"  name="tfGewicht" id="tfGewicht" placeholder="#,##"
                required="required" autofocus="autofocus" /> <br> <br>

            <label for="tfGroesse">
                Gr&ouml;&szlig;e (in m):
            </label> <br>
            <input type="number" step="0.01" name="tfGewicht" id="tfGewicht" placeholder="##,##"
                required="required" autofocus="autofocus" /> <br> <br>

            <input type="submit" value="Ausrechnen" name='bmiAusrechnen'/>

            <?php echo"<input type='button' value='Zur&uuml;ck' 
                onClick='history.back()' />" ?> 

        </fieldset>
    </form>

</div>	
