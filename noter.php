<?php
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
date_default_timezone_set('Europe/Paris');

$idseancechoisi=$_POST['idseancechoisi'];
$jishu=$_POST['jishu'];
$n=0;

for ($i=0;$i<$jishu;$i++)
{
  $faute = $_POST["note"."$i"];
  $idelve=$_POST["idelevenote"."$i"];
  $query1 = "UPDATE inscription SET nombre_de_fautes=$faute WHERE ideleve=$idelve AND idseance=$idseancechoisi" ;
  $result1 = mysqli_query($connect,$query1);
  if ($result1)
  {
     $n=$n+1;
  }
}

if ($n=$jishu)
{
   echo "bon";
}
else 
{
   echo "pas bon";
}
?>