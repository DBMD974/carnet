<?php

require 'MaConnexion.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $role = $_POST['role']; // Ajout du champ rôle



    $maConnexion = new MaConnexion("carnet", "", "root", "localhost");

    // Vérifiez si l'utilisateur existe dans la base de données
    $user = $maConnexion->getUserByEmail($email);
 // $maConnexion = new MaConnexion("sc3nuxz4136_lafosse-damien.carnet", "OM-RUN_DPS_DWWM_AFC_Avril23", "sc3nuxz4136", "localhost");

    if ($user) {
        // Vérifiez si le mot de passe correspond
        if (password_verify($mdp, $user['mot_de_passe'])) {
            // Vérifiez si le rôle correspond (optionnel)
            if ($user['role'] === $role) {
                // Authentification réussie, vous pouvez maintenant rediriger vers la page appropriée
                if ($role === 'admin') {
                    header('Location: admin.php');
                } else {
                    header('Location: user.php');
                }
                exit();
            } else {
                echo "Le rôle spécifié ne correspond pas.";
            }
        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Utilisateur non trouvé.";
    }
}
?>
