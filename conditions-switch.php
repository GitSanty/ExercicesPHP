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

 
$Note = 0;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //print_r($_GET);
   
  $Note = test_input($_GET["note"]);

   
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

switch ($Note) {
case 0:
case 1:
case 2:
    echo "Ce travail est nul.";
    break;
case 6:
case 7:
case 8:
case 9:
    echo "Ce travail n'est pas terrible";
    break;
case 10:
    echo "Tout juste!";
    brack;

case 11:
case 12:
case 13:
case 14:
    echo "C'est pas mal";
    break;

case 15:
case 16:
case 17:
case 18:
    echo "Bravo!";
    break;

case 19:
case 20:
    echo "Police! Arrêtez ce tricheur!";
    break;

}


// note de l'étudiant
//if ($Note >= 1 AND $Note <= 3) {echo "Ce travail est nul.";}

//if ($Note >= 6 AND $Note <= 9) {echo "Ce travail n'est pas terrible";}

//if ($Note == 10) {echo "Tout juste!";}

//if ($Note >= 11 AND $Note <= 14) {echo "C'est pas mal";}

//if ($Note >= 15 AND $Note <= 18) {echo "Bravo!";}

//if ($Note >= 19 AND $Note <= 20) {echo "Police! Arrêtez ce tricheur!";}


?>





</body>
   
   </html>
