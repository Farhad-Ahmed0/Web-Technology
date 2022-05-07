<script type="text/javascript">
  function validation()
  {
    var uname= document.getElementById("uname");
    var pass= document.getElementById("pass");

    //alert("hello");

    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }

   if(pass.value.trim()=="" )
    {
       document.getElementById("passErr").innerHTML= "*Password is required";
       return false;
    }
    else{
      document.getElementById("passErr").innerHTML= "";
    }


      return true;

  }

  function checkUsername()
  {
    var uname= document.getElementById("uname");
    if(uname.value.trim()=="" )
    {
       document.getElementById("unameErr").innerHTML= "*Username is required";
       return false;
    }
    else{
      document.getElementById("unameErr").innerHTML= "";
    }
  }

  function checkPassword()
  {
    if(pass.value.trim()=="" )
     {
        document.getElementById("passErr").innerHTML= "*Password is required";
        return false;
     }
     else{
       document.getElementById("passErr").innerHTML= "";
     }
  }
</script>