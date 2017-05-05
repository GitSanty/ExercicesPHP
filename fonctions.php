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
        <label for="text" class="col-sm-4 control-label">Text</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="idText" name="text" type="text" placeholder="Input text" autofocus required>
        </div>
      </div>
      

      <div class="form-group">
        <label for="Num1" class="col-sm-4 control-label">Numéro 1</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="idNum1" name="Num1" type="number" placeholder="Input numéro" autofocus required>
        </div>
      </div>

      <div class="form-group">
        <label for="Num2" class="col-sm-4 control-label">Numéro 2</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="idNum2" name="Num2" type="number" placeholder="Input numéro" autofocus required>
        </div>
      </div>

      <div class="form-group">
        <label for="sms" class="col-sm-4 control-label">Message</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="idSms" name="sms" type="text" placeholder="Input sms" autofocus required>
        </div>
      </div>

      <div class="form-group">
        <label for="attr" class="col-sm-4 control-label">Attribute</label> 
        <div class="col-sm-4">
        <input  class="form-control" id="idAttr" name="attr" type="text" placeholder="Input sms">
        </div>
      </div>
       

      
  </div>   

</fieldset>

<input class="btn btn-primary" type="submit" name="submit" value="Envoyer"> 

	 
       
</table>

</form>

 
<?php

 
$Text = "";
 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //print_r($_GET);
  $Text = test_input($_GET["text"]);
  $Text = Convert_To_May($_GET["text"]);
  somme($_GET["Num1"], $_GET["Num2"]);
  Capture_First_May($_GET["text"]);
  Replace_String($_GET["text"]);
  Replace_Inverse($_GET["text"]);
  Messages($_GET["sms"], $_GET["attr"]);
  getRandomWord(5);
  getRandomWord(15);
  Lettres_Minuscules();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


 function Convert_To_May($Text) {
 	echo "<br>";

 	echo ucfirst($Text);
 	echo "<br>";
 	echo date("Y");
 	echo "<br>";
 	echo date('l jS \of F Y h:i:s A');
 }


function somme($num1, $num2) {

echo "<br>";
//if (is_int($num1) || is_int($num2)) {echo $num1 + $num2;}

//if (is_int($num1)) {echo "fdqgsdfgsfdg"}
//else{ echo "Erreur, argument non numérique"};
$somme = $num1 + $num2;

if (is_numeric($num1) AND is_numeric($num2))  
{  
echo "somme " . $somme;  
}  
else  
{  
echo "Erreur, argument non numérique";  
}  

}
 
 function Capture_First_May($chaine) {
 
$cont = 0;

$Array = preg_split('/[!,-.;?:()[ ]/', $chaine, -1, PREG_SPLIT_NO_EMPTY);

echo "<br>";
foreach ($Array as $Word)
{
	echo ucfirst($Word[0]);
}

}



function Replace_String($chaine_str){
	echo "<br>";
	echo str_replace("ae", "æ", $chaine_str);

}


function Replace_Inverse($chaine_inv){

echo "<br>";

echo str_replace("æ", "ae", $chaine_inv);
}



function Messages($sms,$attribute){
echo "<br>";
$part1 = htmlentities("<div class=");
$part2 = htmlentities(">");
$part3 = htmlentities("</div>");


if (empty($attribute)){

	$attribute="info";

}

 echo $part1.'"'.$attribute.'"'.$part2.$sms.$part3;
    
echo "<br>";

}


function getRandomWord($len) {
	
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    //return substr(implode($word), 0, $len);

    echo $array = substr(implode($word), 0, $len);
    echo "<br>";

}


function Lettres_Minuscules(){

$str = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!!!";
echo $str;
echo "<br>";
$str = strtolower($str);

echo $str; 
}

?>



</body>
</html>

