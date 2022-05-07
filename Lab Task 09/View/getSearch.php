<?php

$data ="k";
 if(isset($_GET['q'])){
    $data = $_GET['q'];

 }
 $db = new mysqli ('localhost','root','','foodie');
 if ($db->connect_error){
      exit('Data not Found');

 }
 $x = "SELECT * from orderlist where address like '$data%'limit 1";
 $y = $db->query($x);

 if($y){
    $z =$y->fetch_assoc();
    echo "<table>";
echo "<tr>";
echo "<th>Address</th>";
echo "<td>" . $z['address'] . "</td>";
echo "<th>Food</th>";
echo "<td>" . $z['food'] . "</td>";
echo "</tr>";

echo "</table>"; 


 }

?>