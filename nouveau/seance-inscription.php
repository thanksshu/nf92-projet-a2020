<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoecole</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="background.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-primary navbar-expand shadow mb-4">
            <div class="container">
                <span class="navbar-brand h1">Autoecole</span>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajout_eleve.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="theme-ajouter.php">Ajouter un thème</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seance-ajouter.php">Ajouter une séance</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="seance-inscription.php">Inscription aux
                                seances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="note-saisir.php">Saisir une note</a>
                        </li>
                    </ul>
                    <!-- <span class="navbar-text">description</span> -->
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col"></div>
            <div class="card col shadow">
                <div class="card-body">
                    <h1 class="text-center">Theme</h1>

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

                    <form method="POST" action="seance-inscription.php">
                        <div class="form-group">
                            <label class="">L'etudiant</label>
                            <select class="form-control" name='choixetu'>
                                <?php
                                while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
                                    echo "<option value={$row[0]}>{$row[0]} {$row[1]} {$row[2]}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label class="">Choisir une seance</label>
                            <?php
                            $query2 = "SELECT * FROM seance";
                            $result2 = mysqli_query($connect, $query2);
                            ?>
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
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </main>
</body>

</html>