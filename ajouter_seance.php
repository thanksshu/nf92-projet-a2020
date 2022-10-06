<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; // remplacer les XXX avec le semestre et le numero de votre compte 
// exemples nf92p014 ou nf92a078 
$dbpass = 'uoFQgC0q'; // remplacer  votre mot de passe par votre mot de passe 
$dbname = 'nf92a058'; // remplacer les XXX comme indiqué ci-desus 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
$choixtheme=$_POST['choixtheme'];
$date=$_POST['DateSeance'];
$EffMax=$_POST['EffMax'];
$query1 = "SELECT * FROM themes where nom='$choixtheme'";
$result1 = mysqli_query($connect,$query1); 
$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
$idthemein=$row['idtheme'];

echo "<br>";

if (!$result1)
{
    echo "donnee indisponible";
}
//jian cha chong fu 
echo $choixtheme;
echo "<br>";
echo $idthemein;
echo "<br>";

$query3 = "SELECT * FROM seance where DateSeance='$date' AND idtheme='$idthemein'";
$result3 = mysqli_query($connect,$query3);
$row3 = mysqli_fetch_array($result3,MYSQLI_NUM);
if (!($row3[0]==null))
{
    echo "IL y a deja une seance avec le meme theme dans un meme jour!";
    echo "<a href='ajout_seance.php'>retour a l'ajout de seance</a>";
}

else
{
    $query2 = "insert into seance (idseance,DateSeance,EffMax,idtheme,position_restante) values (NULL,'$date',$EffMax,$idthemein,$EffMax)";
    $result2 = mysqli_query($connect,$query2);
    if(!$result2)
    {
       echo "502";
    }
    else
    {
       echo "bon"; 
    } 
}
mysqli_close($connect);
?>




