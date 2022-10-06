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
                        <li class="nav-item active">
                            <a class="nav-link" href="ajout_eleve.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="theme-ajouter.php">Ajouter un thème</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seance-ajouter.php">Ajouter une séance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="seance-inscription.php">Inscription aux seances</a>
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
                    <h1 class="text-center">Inscription</h1>

                    <?php
                    date_default_timezone_set('Europe/Paris');
                    $date = date("Y-m-d");
                    $dbhost = 'tuxa.sme.utc';
                    $dbuser = 'nf92a058';
                    $dbpass = 'uoFQgC0q';
                    $dbname = 'nf92a058';
                    $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');
                    //connexion
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $dateDN = $_POST['dateDN'];
                    $query  =  "Insert  into  eleves values  (NULL,  '$nom',  '$prenom',  '$dateDN', '$date')";
                    echo '<div class="alert alert-success" role="alert">';
                    echo $query;
                    echo '</div>';
                    $result  =  mysqli_query($connect,  $query);
                    if (!$result) {
                        echo '<div class="alert alert-success" role="alert">';
                        echo 'ERROR' . mysqli_error($connect);
                        echo '</div>';
                    }
                    mysqli_close($connect);
                    ?>

                </div>
            </div>
            <div class="col"></div>
        </div>
    </main>
</body>

</html>