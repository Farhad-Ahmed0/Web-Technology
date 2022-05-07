<!DOCTYPE html>
    <html>
    <head>
     <style>




</style> 

<?php require("head.php"); ?>


      
      
    </head>
    <body>
   
        
       <form action=""> 
  <select name="search" onchange="showorder(this.value)">
    <option value="">Select Location:</option>
    <option >Banasree</option>
    <option >Kawla</option>
    <option >Dhanmondi</option>
    <option >Uttara</option>
  </select>
</form>
<br>
<div id="txtHint">Order Info.</div>

<script>
function showorder(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "search.php?q="+str);
  xhttp.send();
}
</script>
<br>
<div id="txtHint"></div>

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

$sql = "SELECT * FROM orderlist";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $temp = $row["id"];
    
    
       ?>
        <div style="border: 1px solid white;height: 150px;"><table style="height: 150px;width:330px;"><tr></td>
       
        
<?php 
      
       echo' <td style="text-align:left;">
       <b>Name:</b>'.$row["name"].'<br>
        <b>Address:</b> '.$row["address"].'<br>
        <b>Food Name:</b> '.$row["food"].'<br>
        <b>Restaurent:</b> '.$row["restaurent"].'<br>
        <b>Quantity:</b> '.$row["quantity"].'<br>
     <button > <a href="showfood.php?code='.$temp.'">Delivery Now</a></button>
     <br>

        </td></tr></table></div>';
         
   
  }
} else {
  echo "0 results";
}
$conn->close();
?>

       
         
  </table>            
</form>
<script type="text/javascript">

    function showSearch(str) {
 
  if (str.length == 0) {
    content.innerHTML='empty..'
}
else{
    var XML = new XMLHttpRequest();
    XML.onreadystatechange = function(){
        if (XML.readyState == 4 && XML.status==200){
            content.innerHTML = XML.responseText;
        }
    };
    XML.open("GET", "getSearch.php?q="+str, true);
    XML.send();
}
  
}



</script>
</body>

</html>
<?php require("foot.php"); ?>
