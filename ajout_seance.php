<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php 
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; // remplacer les XXX avec le semestre et le numero de votre compte 
// exemples nf92p014 ou nf92a078 
$dbpass = 'uoFQgC0q'; // remplacer  votre mot de passe par votre mot de passe 
$dbname = 'nf92a058'; // remplacer les XXX comme indiqué ci-desus 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
$query = "SELECT * FROM themes";
$result = mysqli_query($connect,$query); 
?>

<form class="container jumbotron align-middle" action='ajouter_seance.php' method='POST'>

<h1>ajouter une seance</h1>

<div>
<select class="form-control" name='choixtheme' size='4'>
<?php
while ($row = mysqli_fetch_array($result,MYSQL_NUM))
{
    echo "<option value='$row[1]'>{$row[1]}</option>";
}
?>
</select>
</div>

<div class="row form-group">
            <label for="datedeseance">Date de seance</label>
            <input id="datedeseance" class="form-control" placeholder="" required="" type="date" name="DateSeance">
</div>

<div class="row form-group">
        <label for="EffMax">EffMax</label>
        <input id="EffMax" class="form-control" placeholder="EffMax" required="" type="text" name="EffMax">
</div>

<div class="row form-group">
    <button class="btn btn-outline-primary" type="submit">Submit</button>
</div>

</form>

<?php
mysqli_close($connect);
?>



