<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
$dbhost = 'tuxa.sme.utc';
$dbuser = 'nf92a058';
$dbpass = 'uoFQgC0q';
$dbname = 'nf92a058';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');
//connexion
$query = "SELECT * FROM eleves";
$result = mysqli_query($connect, $query);
?>

<form class="container jumbotron align-middle" action='inscrire.php' method='POST'>
  <h1>Inscription aux seance</h1>

  <div class="row form-group">
    <p>l'etudiant</p>
    <select class="form-control" name='choixetu'>
      <?php
      while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
        echo "<option value={$row[0]}>{$row[0]} {$row[1]} {$row[2]}</option>";
      }
      ?>
    </select>
  </div>

  <div class="row form-group">
    <p>choisir une seance</p>
    <div class="col form-group">
      <?php
      $query2 = "SELECT * FROM seance";
      $result2 = mysqli_query($connect, $query2);
      ?>
    </div>

    <select class="form-control" name='choixseance'>
      <?php
      while ($row2 = mysqli_fetch_array($result2, MYSQL_NUM)) {
        $query3 = "SELECT * FROM themes WHERE idtheme='$row2[3]'";
        $result3 = mysqli_query($connect, $query3);
        $row3 = mysqli_fetch_array($result3, MYSQL_NUM);
        echo "<option value={$row2[0]}>{$row2[1]}&nbsp&nbsp&nbsp{$row3[1]}&nbsp&nbsp&nbsppositions restantes {$row2[4]}</option>";
      }
      ?>
    </select>
  </div>

  <div class="row form-group">
    <button class="btn btn-outline-primary" type="submit">Inscrire</button>
  </div>

</form>
<?php
mysqli_close($connect);
?>