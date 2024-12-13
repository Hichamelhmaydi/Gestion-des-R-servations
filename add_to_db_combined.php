<?php
// add_to_db_combined.php

// الاتصال بقاعدة البيانات (يرجى التأكد من إعدادات الاتصال الصحيحة)
include 'database.php';

// التحقق من البيانات القادمة من الاستمارة
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // معالجة بيانات المستخدم
    $nom = isset($_POST['nom']) ? trim($_POST['nom']) : null;
    $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : null;

    if ($nom && $prenom && $email && $telephone) {
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nom, $prenom, $email, $telephone);
        if ($stmt->execute()) {
            echo "Données utilisateur enregistrées avec succès!";
        } else {
            echo "Erreur: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Veuillez remplir toutes les informations utilisateur.";
    }

    // معالجة بيانات النشاط
    $nom_act = isset($_POST['nom_act']) ? trim($_POST['nom_act']) : null;
    $descr_act = isset($_POST['descr_act']) ? trim($_POST['descr_act']) : null;
    $date_debut = isset($_POST['date_debut']) ? $_POST['date_debut'] : null;
    $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : null;
    $disponibilite = isset($_POST['disponibilite']) ? intval($_POST['disponibilite']) : null;

    if ($nom_act && $descr_act && $date_debut && $date_fin && $disponibilite !== null) {
        $stmt = $conn->prepare("INSERT INTO activites (nom_act, descr_act, date_debut, date_fin, disponibilite) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nom_act, $descr_act, $date_debut, $date_fin, $disponibilite);
        if ($stmt->execute()) {
            echo "Données d'activité enregistrées avec succès!";
        } else {
            echo "Erreur: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Veuillez remplir toutes les informations de l'activité.";
    }
}

$conn->close();
?>
