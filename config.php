<?php
// Inclure la classe de connexion
require 'MaConnexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $age = $_POST['age'];

    // Instancier la classe de connexion
    $maConnexion = new MaConnexion("carnet", "", "root", "localhost");
    // $maConnexion = new MaConnexion("sc3nuxz4136_lafosse-damien.carnet", "OM-RUN_DPS_DWWM_AFC_Avril23", "sc3nuxz4136", "localhost");

    // Créer l'utilisateur
    $userId = $maConnexion->createUser($prenom, $nom, $email, $mdp, $age);

    // Vérifier si l'inscription a réussi
    if ($userId !== false) {
        // Rediriger vers la page de confirmation (par exemple, accueil.php)
        header('Location: header.php');
        exit();
    } else {
        echo "L'inscription a échoué. Veuillez réessayer.";
    }
}
?>
