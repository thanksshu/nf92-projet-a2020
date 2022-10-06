<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql');
//connexion
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$dateDN = $_POST['dateDN'];
$query  =  "insert  into  eleves  values  (NULL,  '$nom',  '$prenom',  '$dateDN', "."'$date'".")";
echo "<br>$query<br>";
$result  =  mysqli_query($connect,  $query);  //  $query utilise  comme  parametre  de mysqli_query
if (!$result) { echo "<br>pas bon".mysqli_error($connect);}
mysqli_close($connect);
?>
