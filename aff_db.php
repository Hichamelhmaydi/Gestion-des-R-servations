<?php
include 'database.php';

$requete ="SELECT * from membres";
$query = mysqli_query ($conn,$requete);
echo"<h1>";echo"Membres";echo"</h1>";
echo"<table border=1; width=800PX;>";
echo "<th>ID</th>";
echo "<th>nom</th>";
echo "<th>prenom</th>";
echo "<th>email</th>";
echo "<th>telephone</th>";
while($row=mysqli_fetch_array($query)){
    echo "<tr>";
       echo "<td>".$row["ID_membres"]."</td>";
       echo "<td>".$row["nom"]."</td>";
       echo "<td>".$row["prenom"]."</td>";
       echo "<td>".$row["email"]."</td>";
       echo "<td>".$row["telephone"]."</td>";
    echo "</tr>";
}
echo"</table>";

$requet ="SELECT * from activite";
$quer = mysqli_query ($conn,$requet);
echo"<h1>";echo"Activité";echo"</h1>";
echo"<table border=1; width=800PX;>";
echo "<th>ID</th>";
echo "<th>Nom d'activite</th>";
echo "<th>description</th>";
echo "<th>date debut</th>";
echo "<th>date fin</th>";
echo "<th>disponibilite</th>";
while($row=mysqli_fetch_array($quer)){
    echo "<tr>";
       echo "<td>".$row["ID_activite"]."</td>";
       echo "<td>".$row["nom_activite"]."</td>";
       echo "<td>".$row["descr"]."</td>";
       echo "<td>".$row["date_debut"]."</td>";
       echo "<td>".$row["date_fin"]."</td>";
       echo "<td>".$row["disponibilite"]."</td>";
    echo "</tr>";
}
echo"</table>";


?>