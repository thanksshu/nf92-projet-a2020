<?php
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
$query1 = "SELECT * FROM eleves";
$result1 = mysqli_query($connect,$query1);
$row1 = mysqli_fetch_array($result1,MYSQLI_NUM);
echo $row1[0];
echo $row1[1];
echo $row1[2];
echo $row1[3];
echo $row1[4];
echo "<br>";
$query2 = "SELECT ideleve,dateNaiss FROM eleves";
$result2 = mysqli_query($connect,$query2);
$row2 = mysqli_fetch_array($result2,MYSQLI_NUM);
echo $row2[0];
echo $row2[1];
mysqli_close($connect);
?>