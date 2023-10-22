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
    $role = $_POST['role'];
    $date_inscription = $_POST['date_inscription'];

    try {
        // Instancier la classe de connexion
        $maConnexion = new MaConnexion("carnet", "", "root", "localhost");

        // Hasher le mot de passe
        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

        // Créer l'utilisateur
        $userId = $maConnexion->createUser($prenom, $nom, $email, $mdpHash, $age, $role, $date_inscription);

        if ($userId !== false) {
            echo "Inscription réussie !";

            // Rediriger l'utilisateur en fonction de son rôle
            if ($role === 'abonné') {
                // Rediriger vers la page des abonnés
                header('Location: abonne.php');
            } elseif ($role === 'administrateur') {
                // Rediriger vers la page des administrateurs
                header('Location: administrateur.php');
            } else {
                // Rediriger vers une page par défaut pour les visiteurs
                header('Location: index.php');
            }

        } else {
            echo "L'inscription a échoué.";
        }
    } catch (PDOException $e) {
        echo "Erreur PDO : " . $e->getMessage();
    }
}
?>
