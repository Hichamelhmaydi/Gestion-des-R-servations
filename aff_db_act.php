<?php
include 'database.php';

$requete ="SELECT * from activite";
$query = mysqli_query ($conn,$requete);
echo"<table border=1; width=800PX;>";
echo "<th>ID</th>";
echo "<th>nom d'activité</th>";
echo "<th>la description d'activité</th>";
echo "<th>date début</th>";
echo "<th>date fin</th>";
while($row=mysqli_fetch_array($query)){
    echo "<tr>";
       echo "<td>".$row["ID_activite"]."</td>";
       echo "<td>".$row["nom_activite"]."</td>";
       echo "<td>".$row["descr"]."</td>";
       echo "<td>".$row["date_debut"]."</td>";
       echo "<td>".$row["date_fin"]."</td>";
    echo "</tr>";
}
echo"</table>";
?>