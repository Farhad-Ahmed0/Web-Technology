<!DOCTYPE html>
<html>
<head>

	<title>Change Password</title>
	<style type="text/css">
        .black{
        	color: black;
        }
        .red{
            color: red;
        }
        .green{
            color: green;
        }
    </style>
</head>
<body>
	<?php

    $currErr= $retypeErr = "";
    $currPass = $Newpass = $Retypepass = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
      $currPass = $_POST['currpass'];
      $Newpass = $_POST['newpass'];
      $Retypepass = $_POST['retypepass'];

      if($currPass == $Newpass){
      	$currErr = " New Password should not be same as the Current Password";
      }elseif ($Newpass != $Retypepass) {
      	$retypeErr = "New Password must match with the Retyped Password";
      }else{
      	
      }
    }     
    ?>
    <div class="container" style="width: 700px;">
	<form method="post" action="<?php echo($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <table>
        <tr>
      <td><label>Current Password: </label></td>
      <td>:<input type="text" name="currpass" size="25"><span class="red"></span>
      </td></tr>
      <tr>
      <td><label><span class="green">New Password:</span> </label></td>
      <td>:<input type="text" name="newpass" size="25"><span class="red"><?php echo $currErr ?></span></td></tr>
      <tr>
      <td><label><span class="red">Retype New Password: </span></label></td>
      <td>:<input type="text" name="retypepass"size="25"><span class="red"><?php echo $retypeErr ?></span></td></tr>
    
      </table>
      <br>
        <hr>
      <input type="submit">
      <br>
    </fieldset>
</form>
</body>
</html>