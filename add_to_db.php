<?php
include 'database.php';
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$telephone=$_POST["telephone"];

$requete ="INSERT INTO membres(nom,prenom,email,telephone) VALUES('$nom','$prenom','$email','$telephone')";
$query=mysqli_query($conn ,$requete);

$requete2 = "INSERT INTO reservations (ID_membres) VALUES (LAST_INSERT_ID())";
$query_i = mysqli_query($conn, $requete2);
?>






