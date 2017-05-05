<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formuliere</title>
   
   <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body class="container-fluid bg-2">


<?php>
<div class="icon">
  <img src="Santy_Logo.jpg" 
  class=" rounded" height="100" width="350" > 
</div>
 <?>


<?php
// Exercice 1
echo date('l jS \of F Y h:i:s A');
echo "<br>";
echo "<br>";
$Today = date(H);

if ($Today >= 5 AND $Today <= 9)
{
	echo "Bonjour!!";
}


if ($Today > 9 AND $Today <= 12)
{
	echo "Bonne journée!!";
}

if ($Today > 12 AND $Today <= 16)
{
	echo "Bon après-midi!";
}

if ($Today > 16 AND $Today <= 21)
{
	echo "Bonne soirée!";
}

if ($Today > 21 AND $Today < 5)
{
	echo "Bonne nuit!";
}

echo "<br>";
echo "<br>";

?>
 

<form class="form-horizontal" method="get"> 
 <table>
 <fieldset id="inputs">


  <div class="col-xs-8 col-sm-6">

			
      <div class="form-group">
        <label for="age" class="col-sm-4 control-label">Quel est votre âge ?</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="age" name="age" type="number" placeholder="Quel est votre âge" autofocus required>
        </div>
      </div>
      
      <div class="form-group">
        <label for="femme" class="col-sm-6 control-label">Femme</label> 
        <div class="col-sm-1">
        <input  class="form-control" name="genre" type="radio" value="femme" id="femme" autofocus required>
        </div>
      </div>

      <div class="form-group">
        <label for="homme" class="col-sm-6 control-label">Homme</label> 
        <div class="col-sm-1">
        <input  class="form-control" name="genre" type="radio" value="homme" id="homme" autofocus required>
        </div>
      </div>

  		<div class="form-group">
  		<label for="type" class="col-sm-6 control-label">Parles-tu anglais?</label> 
  		</div>

  		<div class="form-group">
        <label for="anglais" class="col-sm-6 control-label">Oui</label> 
        <div class="col-sm-1">
        <input  class="form-control" name="anglais" type="radio" value="oui" id="langue" autofocus required>
        </div>
      	</div>
  	

  		<div class="form-group">
        	<label for="anglais" class="col-sm-6 control-label">Non</label> 
        	<div class="col-sm-1">
        		<input  class="form-control" name="anglais" type="radio" value="non" id="langue" autofocus required>
        	</div>
      	</div>
  	           
  
      	<div class="form-group">
        <label for="note" class="col-sm-4 control-label">Quel est votre note ?</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="IDNote" name="note" type="number" placeholder="Quel est votre note" autofocus required>
        </div>
      </div>

  </div>   

</fieldset>

<input class="btn btn-primary" type="submit" name="submit" value="Envoyer" value="Envoyer" > 
       
</table>

</form>

 
<?php

$Age = 0;
$Genre = "";
$Anglais = "";
$Note = 0;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //print_r($_GET);
  $Age = test_input($_GET["age"]);
  $Genre = test_input($_GET["genre"]);
  $Anglais = test_input($_GET["anglais"]);
  $Note = test_input($_GET["note"]);

   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($Age <= 12 AND $Genre == "homme")
{
	if($Anglais == "non") {	echo "Salut petit!";}else {echo "Hello boy!";}

} elseif ($Age <= 12 AND $Genre == "femme") {
	if($Anglais == "non") {	echo "Salut petite!";}else {echo "Hello Girl!";}
} 


if ($Age > 12 AND $Age <= 18 AND $Genre == "homme")
{
	if($Anglais == "non") {	echo "Salut l'adolescent!";}else {echo "Hello Teenage boy!";}

}elseif ($Age > 12  AND $Age <= 18 AND $Genre == "femme") {
	if($Anglais == "non") {	echo "Salut l'adolescente!";}else {echo "Hello Teenage girl!";}
}


if ($Age > 18 AND $Age <= 115 AND $Genre == "homme")
{
	if($Anglais == "non") { echo "Salut l'adulte!";}else {echo "Hello Sir!";}
}elseif ($Age > 18 AND $Age <= 115 AND $Genre == "femme") {
	if($Anglais == "non") {echo "Salut l'adulte!";}else {echo "Hello Lady!";}
	
} 


if ($Age > 115 AND $Genre == "homme")
{
	if($Anglais == "non") {echo "Wow! Toujours vivant?";}else {echo "Wow! Still alive, old man?";}
}elseif($Age > 115 AND $Genre == "femme") {
	if($Anglais == "non") {echo "Wow! Toujours vivante?";}else {echo "Wow! Still alive, old lady?";}

}

echo "<br>";

echo "<br>";

// note de l'étudiant
if ($Note >= 1 AND $Note <= 3) {echo "Ce travail est nul.";}

if ($Note >= 6 AND $Note <= 9) {echo "Ce travail n'est pas terrible";}

if ($Note == 10) {echo "Tout juste!";}

if ($Note >= 11 AND $Note <= 14) {echo "C'est pas mal";}

if ($Note >= 15 AND $Note <= 18) {echo "Bravo!";}

if ($Note >= 19 AND $Note <= 20) {echo "Police! Arrêtez ce tricheur!";}


echo "<br>";

// 7. Écrire une expression conditionnelle...
if ($Age > 20 AND $Age < 41 AND $Genre == "femme") { echo "Bonjour, bienvenue parmi nous!";}
else {echo "Désolé, vous ne remplissez pas les critères de sélection";} 
echo "<br>";
if ($Age > 20 AND $Age < 41 AND $Genre == "homme") {echo "Désolé, vous ne remplissez pas les critères de sélection";}
if ($Age > 20 AND $Age < 41 AND $Genre == "femme") {echo "Bonjour, bienvenue parmi nous!";}

$Bonjour = "";
 $Bonjour = ($Genre == "femme") ? "Bonjour madame" : "Bonjour monsieur";

echo "<br>"; 
echo $Bonjour;

?>



</body>
</html>

