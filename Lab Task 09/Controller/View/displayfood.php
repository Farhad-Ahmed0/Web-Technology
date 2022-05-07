<!DOCTYPE html>
    <html>
    <head>
     <style>




</style> 

<?php require("head.php"); ?>


      
      
    </head>
    <body>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <h2 style="text-align: center;">Menu</h2>
        
        <br>

    <br>
    <br>

        <?php 
        

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "foodie";
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM food";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp = $row["code"];
    $image=$row["image"];
    
       ?>
        <div style="border: 1px solid white;height: 100px;"><table style="height: 100px;width:330px;"><tr><td><img width="70px" height="80px" src="../uploads/<?php echo $image;?>"></td>
       
        
<?php 
      
       echo' <td style="text-align:center;"><b>Food Name:</b>'.$row["name"].'<br>
        <b>Price:</b> '.$row["price"].'<br>
     <button > <a href="showfood.php?code='.$temp.'">Order Now</a></button>

        </td></tr></table></div>';
         
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>

       
         
  </table>            
</form>

</body>

</html>
<?php require("foot.php"); ?>
