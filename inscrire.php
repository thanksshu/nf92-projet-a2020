<?php 
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
$idetu = $_POST['choixetu'];
$idseance = $_POST['choixseance'];

$query0 = "SELECT * FROM inscription WHERE ideleve=$idetu AND idseance=$idseance";
$result0 = mysqli_query($connect,$query0);
$row0 = mysqli_fetch_array($result0,MYSQLI_NUM);
if ($row0[0]==null)
{
    $query = "INSERT INTO inscription (idinscri,ideleve,idseance) values (NULL,$idetu,$idseance)";
    $result  =  mysqli_query($connect,$query);
    if (!$result) 
    {
        echo "<br>pas bon".mysqli_error($connect);
        echo "<br>";
        echo "<a href='inscription.php'>retour</a>";
    }
    else 
    {
        echo "vouz avez bien enregistre";
        echo "<br>";
        echo "<a href='inscription.php'>retour</a>";
    }
    $query2 = "SELECT position_restante FROM seance WHERE idseance=$idseance";
    $result2 = mysqli_query($connect,$query2);
    $row2 = mysqli_fetch_array($result2,MYSQLI_NUM);
    $newnumber = $row2[0]-1;
    $query3 = "UPDATE seance SET position_restante=$newnumber WHERE idseance=$idseance";
    $result3 = mysqli_query($connect,$query3);
}
else 
{
    echo "Attention,vouz avez deja inscrit cette seance,faire un autre choix s'il vous plait";
    echo "<br>";
    echo "<a href='inscription.php'>retour</a>";
}

?>