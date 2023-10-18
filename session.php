
session_start();
$_SESSION['user_id'] = $userId; // $userId est l'ID de l'utilisateur connecté

if (isset($_SESSION['user_id'])) {
    // L'utilisateur est connecté, il a accès au tableau et aux fonctionnalités réservées.
} else {
    // L'utilisateur n'est pas connecté, affichez une liste d'articles ou redirigez-le vers une page de connexion.
    header('Location: login.php'); // Rediriger vers la page de connexion
    exit();
}
// Déconnexion de l'utilisateur
session_destroy();

// Rediriger vers la page de connexion ou d'accueil
header('Location: login.php'); // Par exemple
exit();


