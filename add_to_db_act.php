<?php
include 'database.php';
$nom_act=$_POST["nom_act"];
$desc_act=$_POST["desc_act"];
$date_debut=$_POST["date_debut"];
$date_fin=$_POST["date_fin"];

$requete ="INSERT INTO activite(nom_activite,descr,date_debut,date_fin) VALUES('$nom_act','$desc_act','$date_debut','$date_fin')";
$query= mysqli_query($conn ,$requete);

$requete2 = "INSERT INTO reservations (ID_activite) VALUES (LAST_INSERT_ID())";
$query_i = mysqli_query($conn, $requete2);
?>