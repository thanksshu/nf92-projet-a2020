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
                        <li class="nav-item active">
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
                    <h1 class="text-center">Contrôle theme</h1>
                    <form method="POST" action="ajouter_theme.php">
                        <hr>
                        <div class="form-group">
                            <label for="themenom">Nom de thème</label>
                            <input type="text" class="form-control" id="themenom" name="nomDT" required="">
                            <!-- <small class="text-muted">Email</small> -->
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="inputGendre">Contrôle</label>
                            <div id="inputGendre">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="supprime" id="inputMale" value="1" checked>
                                    <label class="form-check-label" for="inputMale">Surprimer</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="supprime" id="inputFemale" value="0">
                                    <label class="form-check-label" for="inputFemale">Ajouter</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="descriptif">Description</label>
                            <input type="text" class="form-control" id="descriptif" name="descriptif" required="">
                            <!-- <small class="text-muted">Email</small> -->
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