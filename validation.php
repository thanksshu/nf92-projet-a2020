<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
date_default_timezone_set('Europe/Paris');
$date = date("Y\-m\-d");
$query0 = "SELECT * FROM seance WHERE DateSeance<'$date'";
$result0 = mysqli_query($connect,$query0);
?>

<form class="container jumbotron align-middle" action='valider.php' method='POST'>
<h1>saisie des notes</h1>

<div class="row form-group">
  <label for="choixseance">les seances</label>
  <select id="choixseance" class="form-control" name='choixseance'>
  <?php
    while ($row0 = mysqli_fetch_array($result0,MYSQLI_NUM))
      {
         $query2 = "SELECT * FROM themes WHERE idtheme='$row0[3]'";
         $result2 = mysqli_query($connect,$query2); 
         $row2 = mysqli_fetch_array($result2,MYSQL_NUM);
         echo "<option value={$row0[0]}>{$row0[0]} {$row0[1]} {$row2[1]}</option>";
      }
  ?>
  </select>
</div>

<div class="row form-group">
    <button class="btn btn-outline-primary" type="submit">Prochaine etape</button>
</div>

</form>
<?php
mysqli_close($connect);
?>
