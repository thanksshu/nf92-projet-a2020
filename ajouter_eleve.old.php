<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
date_default_timezone_set('Europe/Paris');
$date = date("Y-m-d");
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a058'; // remplacer les XXX avec le semestre et le numero de votre compte
// exemples nf92p014 ou nf92a078
$dbpass = 'uoFQgC0q'; // remplacer  votremot depasse par votre mot de passe
$dbname = 'nf92a058'; // remplacer les XXX comme indiqué ci-desus
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');
//connexion
$nom = $_POST['nom']; // a condition que 'nom' soitle bon label ! expliquez.
$prenom = $_POST['prenom'];
$dateDN = $_POST['dateDN'];
//jian ce chongfu
$query1 = "SELECT * FROM eleves";
$result1 = mysqli_query($connect, $query1);
$pd = 0;
while ($row = mysqli_fetch_array($result1, MYSQLI_NUM)) {
    if (($row[1] == $nom) and ($row[2] == $prenom)) {
        $pd = $pd + 1;
    }
}
echo "IL y a {$pd} {$nom} {$prenom}";
echo "<br>";
if ($pd > 0) {
print <<<EOD
    <p>nom de l'etudiant(e) en double,continuez?</p>
    <form action="valider_eleve.php" method="POST">
        <input type='hidden' name='nom' value='$nom'>";
        <input type='hidden' name='prenom' value='$prenom'>
        <input type='hidden' name='dateDN' value='$dateDN'>
        <input type='submit' value='continue'>
    </form>
    <a href='ajout_eleve.html'>retour</a>
    EOD;

} else {
    $query  =  "insert  into  eleves values  (NULL,  '$nom',  '$prenom',  '$dateDN', '$date')";
    echo "<br>$query<br>";
    $result  =  mysqli_query($connect,  $query);
    if (!$result) {
        echo "<br>pas bon" . mysqli_error($connect);
    }
}
mysqli_close($connect);
?>