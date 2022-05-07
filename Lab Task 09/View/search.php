<?php
$mysqli = new mysqli ("localhost", "root", "", "foodie");
if($mysqli ->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT address, food, restaurent FROM orderlist WHERE address = ?";

$stmt = $mysqli ->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($address, $food, $restaurent);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $address . "</td>";
echo "<th>Food</th>";
echo "<td>" . $food . "</td>";
echo "<th>Restaurent</th>";
echo "<td>" . $restaurent . "</td>";
echo"</tr>";
echo "</table>";
?>