<?php
require_once('../databases/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motpass = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    // Préparation de la requête SQL pour insérer l'administrateur
    $sql = "INSERT INTO administrateur (nom, email, mot_de_passe, role) VALUES (:nom, :email, :motpass, :role)";
    $stmt = $db->prepare($sql);

    // Exécution de la requête
    try {
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':motpass' => $motpass,
            ':role' => $role // Insérer directement le rôle
        ]);
        echo "Nouveaux identifiants Administrateur enregistré avec succès!";
    } catch (PDOException $e) {
        echo "Erreur lors de l'enregistrement : " . $e->getMessage();
    }
}
