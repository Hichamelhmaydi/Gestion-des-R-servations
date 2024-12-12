<?php
include 'database.php';

$requete ="SELECT * from membres";
$query = mysqli_query ($conn,$requete);
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
?>