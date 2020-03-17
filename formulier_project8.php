<?php

// Declare variables
$sName = " ";
$sAdres = " ";
$sEmail = " ";

//Fill the variables with the userform input
if(isset($_POST[" "])) {
$sOpdrachtnummer = $_POST['sOpdrachtnummer'];
$s = $_POST['sAdres'];
$sEmail = $_POST['sEmail'];

}

?>


<!doctype html>
<html>
    <head>
        <title>HTML form</title>
    </head>
    <body>
        
        <h1> Periodieke keuring voorblad keuringsrapport </h1>
        <form action="test.php" method='post'>
<pre>
Opdrachtnummer:     <input type='text' name='stext'><br>
TCVT-nummer:        <input type='text' name='stext'><br>
            
<h2>Keuring</h2>
Keuringsdatum:      <input type='text' name='stext'><br>
Uitgevoerd door:    <input type='text' name='stext'>   Deskundige: <input type='text' name='stext'><br>
            
<h2>Materieel</h2>
<pre><h3>hijskraan                                     Onderwagen</h3></pre>
Fabrikaat:      <input type='text' name='stext'>                        Frabrikaat:             <input type='text' name='stext'><br>
Model/Type:     <input type='text' name='stext'>                        Model/Type:             <input type='text' name='stext'><br>
Serienummer:    <input type='text' name='stext'>                        Identieficatienummer:   <input type='text' name='stext'><br>
Bedrijfsnummer: <input type='text' name='stext'>                        Bedrijfsnaam:           <input type='text' name='stext'><br>
Bouwjaar:       <input type='text' name='stext'>                        Bouwjaar:               <input type='text' name='stext'><br>


<h2>Uitvoering kraan</h2>
<h3>Uitgevoerd Onderwagen</h3>

Opstelling:
<input type="checkbox"> <label for="Railstellen"> Railstellen</label>
<input type="checkbox"> <label for="Rijdend"> Rijdend</label>
<input type="checkbox"> <label for="Stationair"> Stationair</label>
<input type="checkbox"> <label for="ingietframe"> ingietframe</label>
<input type="checkbox"> <label for="vrijstaand"> vrijstaand (kruisframe onderwagen zonder railstellen)</label>


Uitvoering toren:
<input type="checkbox"> <label for="haakhoogte(....m)"> haakhoogte</label>

Giek:
<input type="checkbox"> <label for="telescoopgiek"> telescoopgiek</label> <input type='text' name='stext'><br>
<input type="checkbox"> <label for="opbouwgiek"> opbouwgiek</label> <input type='text' name='stext'><br>
<input type="checkbox"> <label for="hulpgiek"> knikgiek</label> <input type='text' name='stext'><br>
<input type="checkbox"> <label for="knikgiek"> knikgiek</label> <input type='text' name='stext'><br>
<input type="checkbox"> <label for="monogiek"> monogiek</label> <input type='text' name='stext'><br>
<input type="checkbox"> <label for="fly-jib"> fly-jib</label> <input type='text' name='stext'><br>

            <input type='submit' value='versturen'>

        </pre>
        </form>
    </body>
</html>
