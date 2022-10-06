<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
date_default_timezone_set('Europe/Paris'); 
$date = date("Y-m-d"); 
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; // remplacer les XXX avec le semestre et le numero de votre compte 
// exemples nf92p014 ou nf92a078 
$dbpass = 'uoFQgC0q'; // remplacer  votremot depasse par votre mot de passe 
$dbname = 'nf92a058'; // remplacer les XXX comme indiqué ci-desus 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
$nomDT = $_POST['nomDT']; // a condition que 'nom' soitle bon label ! expliquez. 
$supp = $_POST['supprime'];
if ($supp=="1")
{
    $supprime=1;
}
else
{
    $supprime=0;
}
$descriptif = $_POST['descriptif']; 
$query  =  "insert  into  themes  values  (NULL,'$nomDT',  '$supprime',  '$descriptif')"; //supprime ke qudiao yinhao ma?
echo "<br>$query<br>"; 
$result  =  mysqli_query($connect,  $query);  //  $query utilise  comme  parametre  de mysqli_query 
if (!$result) { echo "<br>pas bon".mysqli_error($connect);} 
mysqli_close($connect); 
?>