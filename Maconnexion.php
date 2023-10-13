<?php

class MaConnexion
{
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote)
    {
        $this->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }




    public function createUser($firstName, $lastName, $email, $password, $age) {
        try {
            $query = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, age) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connexionPDO->prepare($query);
            $stmt->execute([$lastName, $firstName, $email, $password, $age]);
            return $this->connexionPDO->lastInsertId();
        } catch (PDOException $e) {
            return false;
        }
    }




    public function getUserByEmail($email) {
        try {
            $query = "SELECT * FROM utilisateurs WHERE email = ?";
            $stmt = $this->connexionPDO->prepare($query);
            $stmt->execute([$email]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }
    



    public function updateUser($id, $firstName, $lastName, $email, $password, $age) {
        try {
            $query = "UPDATE utilisateurs SET nom = ?, prenom = ?, email = ?, mot_de_passe = ?, age = ? WHERE id = ?";
            $stmt = $this->connexionPDO->prepare($query);
            $stmt->execute([$lastName, $firstName, $email, $password, $age, $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    


    public function deleteUser($id) {
        try {
            $query = "DELETE FROM utilisateurs WHERE id = ?";
            $stmt = $this->connexionPDO->prepare($query);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    
    




// LA PARTI DE CRUD POUR LA GLYCEMIE

public function createGlycemiaRecord($userId, $value, $measurementTime) {
    try {
        $query = "INSERT INTO glycemia (user_id, value, measurement_time) VALUES (?, ?, ?)";
        $stmt = $this->connexionPDO->prepare($query);
        $stmt->execute([$userId, $value, $measurementTime]);
        return $this->connexionPDO->lastInsertId();
    } catch (PDOException $e) {
        return false;
    }
}




public function getGlycemiaRecordsForUser($userId) {
    try {
        $query = "SELECT * FROM glycemia WHERE user_id = ?";
        $stmt = $this->connexionPDO->prepare($query);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        return null;
    }
}




public function updateGlycemiaRecord($recordId, $value, $measurementTime) {
    try {
        $query = "UPDATE glycemia SET value = ?, measurement_time = ? WHERE id = ?";
        $stmt = $this->connexionPDO->prepare($query);
        $stmt->execute([$value, $measurementTime, $recordId]);
        return true;
    } catch (PDOException $e) {
        return false;
    }
}




public function deleteGlycemiaRecord($recordId) {
    try {
        $query = "DELETE FROM glycemia WHERE id = ?";
        $stmt = $this->connexionPDO->prepare($query);
        $stmt->execute([$recordId]);
        return true;
    } catch (PDOException $e) {
        return false;
    }
}


public function close()
{
    // Fermeture de la connexion à la base de données
    $this->connexionPDO = null;
}

}

// Exemple d'utilisation de la classe MaConnexion pour créer une instance
$maConnexion = new MaConnexion("carnet", "", "root", "localhost");
    //  $test = new MaConnexion("sc3nuxz4136_lafosse-damien.carnet","OM-RUN_DPS_DWWM_AFC_Avril23","sc3nuxz4136","localhost");

// Vous pouvez maintenant utiliser $maConnexion pour effectuer des opérations CRUD sur les utilisateurs et la glycémie.

?>
