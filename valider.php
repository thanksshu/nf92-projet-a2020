<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
$dbhost = 'tuxa.sme.utc'; 
$dbuser = 'nf92a058'; 
$dbpass = 'uoFQgC0q'; 
$dbname = 'nf92a058'; 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ('Error connecting to mysql'); 
//connexion
date_default_timezone_set('Europe/Paris');
$idseancechoisi=$_POST['choixseance'];

$query1 = "SELECT * FROM inscription WHERE idseance='$idseancechoisi'";
$result1 = mysqli_query($connect,$query1); 
?>

<form class="container jumbotron align-middle" action='noter.php' method='POST'>
<h1>noter</h1>
   

  <table>
  <?php
    $i=0;
    while ($row1 = mysqli_fetch_array($result1,MYSQLI_NUM))
      {
         $query2 = "SELECT * FROM eleves WHERE ideleve='$row1[1]'";
         $result2 = mysqli_query($connect,$query2); 
         $row2 = mysqli_fetch_array($result2,MYSQLI_NUM);
         echo "<tr>";
         echo "<td>$row2[1] $row2[2]</td>";
         echo "<input type='hidden' name='idelevenote"."$i' value='$row1[1]'>"; 
         if (!($row1[3]==null))
         {
         echo "<td><input type='number' name='note"."$i' value='$row1[3]'"."></td>";
         }
         else
         {
         echo "<td><input type='number' name='note"."$i'"."></td>";
         }
         echo "</tr>";
         $i=$i+1;
      }
    echo "<input type='hidden' name='jishu' value='$i'>";
  ?>
  </table>

<div class="row form-group">
    <button class="btn btn-outline-primary" type="submit">envoyer</button>
</div>

<?php
echo "<input type='hidden' name='idseancechoisi' value='$idseancechoisi'>";
?>

</form>
<?php
mysqli_close($connect);
?>
