<?php require("head.php"); ?>
<div  style="width:500px;">
 <form method="post" action="">
    <fieldset >
      <legend>FORGET PASSWORD</legend>
      <br>
      <label>Enter E-mail: </label>
      <input type="text" id="e-ml" name="mail" onkeyup="checkEmail()" onblur="checkEmail()" > <span style="color: red; ">&nbsp;</span><p style="color: red; "id="emailErr"></p></span>
      <hr>
      <br>

      <input type="submit" name="email-sub">
      
     </fieldset>

 </form>
 <?php if(isset($_SESSION["emailErr"])){echo $_SESSION["emailErr"]; $_SESSION["emailErr"] = ''; }?>

</div>
<script>
  function checkEmail() {
               if (document.getElementById("e-ml").value === "") {
                    document.getElementById("emailErr").innerHTML = "Email can't be blank";
                    document.getElementById("e-ml").style.outlineColor = "red";
               }else{
                    document.getElementById("emailErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
</script>
<?php require("foot.php"); ?>