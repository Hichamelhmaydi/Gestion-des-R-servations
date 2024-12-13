<?php
include 'database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$nom_act = $_POST["nom_act"];
$desc_act = $_POST["descr_act"];
$date_debut = $_POST["date_debut"];
$date_fin = $_POST["date_fin"];
$disponibilite = $_POST["disponibilite"];

$requete = "INSERT INTO membres(nom, prenom, email, telephone) VALUES('$nom', '$prenom', '$email', '$telephone')";
$query = mysqli_query($conn, $requete);

$id_membre = mysqli_insert_id($conn);

$requete3 = "INSERT INTO activite (nom_activite, descr, date_debut, date_fin, disponibilite) VALUES('$nom_act', '$desc_act', '$date_debut', '$date_fin', '$disponibilite')";
$query3 = mysqli_query($conn, $requete3);

$id_activite = mysqli_insert_id($conn);

$date_reservation = date("Y-m-d"); 
$requete2 = "INSERT INTO reservations(ID_membres, ID_activite, date_reservation) VALUES ('$id_membre', '$id_activite', '$date_reservation')";
$query2 = mysqli_query($conn, $requete2);

?>








