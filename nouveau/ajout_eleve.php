<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autoecole</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                    <form method="POST" action="ajouter_eleve.php">
                        <hr>
                        <div class="form-group">
                            <label for="inputNom">Nom</label>
                            <input type="text" class="form-control" id="inputNom" name="nom" required="">
                            <small class="text-muted">Votre nom.</small>
                        </div>
                        <div class="form-group">
                            <label for="inputPrenon">Prenom</label>
                            <input type="text" class="form-control" id="inputPrenon" name="prenom" required="">
                            <small class="text-muted">Votre prenom.</small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="inputGendre">Gendre</label>
                            <div id="inputGendre">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inputMale"
                                        value="male" checked>
                                    <label class="form-check-label" for="inputMale">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sex" id="inputFemale"
                                        value="female">
                                    <label class="form-check-label" for="inputFemale">Female</label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="inputDateDeNaissance">Date de naissance</label>
                            <input type="date" class="form-control" id="inputDateDeNaissance" name="dateDN" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputAdresse">Adresse</label>
                            <input type="text" class="form-control" id="inputAdresse" name="adress" required="">
                        </div>
                        <div class="form-group">
                            <label for="inputTel">Tel</label>
                            <input type="text" class="form-control" id="inputTel" name="tel" placeholder="00 00 00 00 00" required="">
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