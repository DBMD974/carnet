<?php
// Inclure la classe de connexion
require 'MaConnexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];


    // Instancier la classe de connexion
    $maConnexion = new MaConnexion("carnet", "", "root", "localhost");
    // $maConnexion = new MaConnexion("sc3nuxz4136_lafosse-damien.carnet", "OM-RUN_DPS_DWWM_AFC_Avril23", "sc3nuxz4136", "localhost");

    // Créer l'utilisateur
    $userId = $maConnexion->getUserByEmail($email, $mdp);

    // Vérifier si l'inscription a réussi
    if ($userId !== false) {
        // Rediriger vers la page de confirmation (par exemple, accueil.php)
        header('Location: index.php');
        exit();
    } else {
        echo "L'inscription a échoué. Veuillez réessayer.";
    }
}
?>
