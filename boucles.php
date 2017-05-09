<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formuliere</title>
   
   <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body class="container-fluid bg-2">

<div class="icon">
  <img src="Santy_Logo.jpg" 
  class=" rounded" height="100" width="350" > 
  
</div>




<?php
 
 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  //$Nom_Anfant = test_input($_POST["Nom_Anfant"]);
  //$Nom_Institutrice = test_input($_POST["Nom_Institutrice"]);
  //$Excuse = test_input($_POST["raison"]);
  //$Autre = test_input($_POST["Autre"]);

num_1_120();
echo "<br>";
boucle_while();
tableau();
 
 $array = array(
    array('prénom'=>'Adrian', 'nom'=>'zochowski', 'email'=>'Adrian@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Daniela', 'nom'=>'Romao', 'email'=>'daniela@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Habib', 'nom'=>'El Maaza', 'email'=>'Habib@example.org', 'company'=>'example ltd'),
    array('prénom'=>'jimmy', 'nom'=>'riguelle', 'email'=>'jimmy@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Ludovic', 'nom'=>'Patho', 'email'=>'Ludovic@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Safia', 'nom'=>'Safia', 'email'=>'Safia@example.org', 'company'=>'example ltd'),
    array('prénom'=>'creageo', 'nom'=>'creageo', 'email'=>'creageo@example.org', 'company'=>'example ltd'),
    array('prénom'=>'David', 'nom'=>'Vandervaeren', 'email'=>'David@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Eric', 'nom'=>'Eric', 'email'=>'Eric@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Estelle', 'nom'=>'desmeurs', 'email'=>'Estelle@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Khaled', 'nom'=>'Nzisabira', 'email'=>'Khaled@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Danjsn', 'nom'=>'Danjsn', 'email'=>'Danjsn@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Hugo', 'nom'=>'Barcelona', 'email'=>'Hugo@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Jounaid', 'nom'=>'Jounaid', 'email'=>'Jounaid@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Jayce', 'nom'=>'Jayce', 'email'=>'Jayce@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Kreshnik', 'nom'=>'IBERDEMAJ', 'email'=>'Kreshnik@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Salvatore', 'nom'=>'Saia', 'email'=>'Salvatore@example.org', 'company'=>'example ltd'),
    array('prénom'=>'Thomas', 'nom'=>'Demilito', 'email'=>'Thomas@example.org', 'company'=>'example ltd'));

    echo tableau($array); 

    echo "<br>";

    $array_pays = array(
 1=> "Belgique",
 2=> "France",
 3=> "Brésil",
 4=> "Espagne",
 5=> "Ghana",
 6=> "Islande",
 7=> "Italie",
 8=> "Japon",
 9=> "Pérou",
 10=> "Russie");

 echo Select_pays($array_pays);
   
}



function num_1_120(){

echo "affiche les numéros de 1 à 120  evec for";  
  for($i=1;$i<=120;$i++)
{
//if($i%8==0)
        echo $i.',';
         

}
}


function boucle_while() {

echo "affiche les numéros de 1 à 120  evec while";
  $x = 1; 

while($x <= 120) {
 
echo $x.',';

    $x++;
}
}

function tableau($array){

   
    // start table
    $html = '<table>';
    // header row
    $html .= '<tr>';
    foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
    $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;

}


function Select_pays($array){
   
  echo "<select>";
   
  foreach($array as $key => $value) {
    echo "<option value=' $key '> $value </option>";
   }
   echo "</select>";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

 
 




</body>
</html>

