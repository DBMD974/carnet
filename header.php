<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>MON CARNET D'AUTOSURVEILLANCE</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="navbar">
    <header>
        <nav>
            <a class="navbar-brand" href="#">
                <img src="logo\logonoir.png" alt="Logo" width="100" height="50">
            </a>
            <div class="mx-auto">
                <span class="navbar-text">MON CARNET D'AUTOSURVEILLANCE</span>
            </div>
            <div class="nav-right">
                <?php
                // Vérifiez si une session est active
                session_start();
                if (isset($_SESSION['role']) && isset($_SESSION['nom'])) {
                    echo '<h1 id="salut">Salut ' . $_SESSION['nom'] . ' ༼･ิɷ･ิ༽</h1>';
                }
                ?>

                <button type="button" class="custom-btn-up updatebut" data-bs-toggle="modal" data-bs-target="#connexion" <?php
                                                                                                                            if (isset($_SESSION['role'])) {
                                                                                                                                echo 'hidden';
                                                                                                                            }
                                                                                                                            ?>><span>CONNEXION</span></button>

                <button type="button" class="custom-btn-del deletebut" data-bs-toggle="modal" data-bs-target="#inscription" <?php
                                                                                                                            if (isset($_SESSION['role'])) {
                                                                                                                                echo 'hidden';
                                                                                                                            }
                                                                                                                            ?>><span>INSCRIPTION</span></button>

                <?php
                if (isset($_SESSION['role'])) {
                    echo '<a id="deconul" href="deco.php"><button type="button" class="custom-btn-deco decobut"><span>DECONNEXION</span></button></a>';
                }
                ?>

                <?php
                if (isset($_SESSION['role']) && $_SESSION['role'] == 2) {
                    $monUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                    if ($monUrl != "http://localhost/djohndago/dashboard.php") {
                        echo '<a id="dashnul" href="dashboard.php"><button type="button" class="custom-btn-dash dashbut"><span>DASHBOARD</span></button></a>';
                    }
                }
                ?>
            </div>

            <!-- Modal Connexion -->
            <div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CONNEXION</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulaire de connexion ici -->
                            <form action="config-login.php" method="post">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required><br>

                                <label for="mdp">Mot de passe :</label>
                                <input type="password" id="mdp" name="mdp" required><br>

                                <label for="role">Rôle :</label>
                                <select id="role" name="role" required>
                                    <option value="utilisateurs">Utilisateur</option>
                                    <option value="admin">Admin</option>
                                </select><br>

                                <input type="submit" value="Connexion">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal INSCRIPTION -->
            <div class="modal fade" id="inscription" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Mettre à jour un article</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulaire d'inscription ici -->
                            <!-- le formulaire -->
                            <form action="config.php" method="post">
                                <label for="nom">Nom :</label>
                                <input type="text" id="nom" name="nom" required><br>

                                <label for="prenom">Prénom :</label>
                                <input type="text" id="prenom" name="prenom" required><br>

                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required><br>

                                <label for="mdp">Mot de passe :</label>
                                <input type="password" id="mdp" name="mdp" required><br>

                                <label for="age">Âge :</label>
                                <input type="number" id="age" name="age" required><br>

                                <label for="role">Rôle :</label>
                                <select id="role" name="role" required>
                                    <option value="utilisateur">Utilisateur</option>
                                    <option value="admin">Admin</option>
                                </select><br>

                                <label for="date_inscription">Date d'inscription :</label>
                                <input type="date" id="date_inscription" name="date_inscription" required><br>

                                <input type="submit" class="btn btn-primary" value="Inscription">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Le reste de votre contenu de blog ici -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>















<!-- premier element de ma page -->
<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="logo\logonoir.png" alt="Logo" width="100" height="50">
            </a>

            <div class="mx-auto">
                <span class="navbar-text">MON CARNET D'AUTOSURVEILLANCE</span>
            </div>

            <div class="d-flex">
   <a href="inscription.php"> <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#inscriptionModal">Inscription</button></a>
    <a href="conexion.php"><button class="btn btn-primary">Connexion</button></a>
</div>

        </div>
    </nav> -->