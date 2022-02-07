<!DOCTYPE html>
<head>
    <style type="text/css">
		.red{
			color: red;
		}
	</style>
</head>
<body>

    <?php
        
        $name = $email = $dateOfBirth = $gender = $degree1 = $degree2 = $degree3 = $degree4 = $bloodGroup = "";
        $nameErr = $emailErr = $dateOfBirthErr = $genderErr = $degreeErr = $bloodGroupErr = "";
        $Counter = 0;
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = ($_POST["name"]);
                if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                } else {
                    if (str_word_count($name) < 2){
                        $nameErr = " At least 2 word";
                    }
                }
            }
        

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email =($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["dateOfBirth"])) {
                $dateOfBirthErr = "Date of birth is required";
            } else {
                $dateOfBirth =($_POST["dateOfBirth"]);
            }

            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender =($_POST["gender"]);
            }

            if (empty($_POST["degree1"])) {
            } else {
                $degree1 = "SSC";
                $Counter = $Counter + 1;
            }
        
            if (empty($_POST["degree2"])) {
            } else {
                $degree2 = "HSC";
                $Counter = $Counter + 1;
            }
        
            if (empty($_POST["degree3"])) {
            } else {
                $degree3 = "BSc";
                $Counter = $Counter + 1;
            }
        
            if (empty($_POST["degree4"])) {
            } else {
                $degree4 = "MSc";
                $Counter = $Counter + 1;
            }
        
            if ($Counter < 2) {
                $degreeErr = "Select at least 2 boxes.";

            }

            if (empty($_POST["bloodGroup"])) {
                $bloodGroupErr = "Blood group is required";
            } else {
                $bloodGroup =($_POST["bloodGroup"]);
            }
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    NAME: <input type="text" name="name" value="<?php echo $name;?>"><span class="red">*<?php echo $nameErr ?></span> <br>
    
    EMAIL: <input type="text" name="email" value="<?php echo $email;?>"><span class="red">*<?php echo $emailErr ?></span> <br>
    
    DATE OF BIRTH: <input type="Date" name="dateOfBirth" min="1953-01-01" max = "1998-12-31"value="<?php echo $dateOfBirth;?>">
    <span class="red">*<?php echo $dateOfBirthErr ?></span> <br>
    
    GENDER: <input type="radio" name="gender" 
            <?php 
                if (isset($gender) && $gender=="Male") {
                    echo "checked";
                }
            ?> 
            value="Male">Male 
    <input type="radio" name="gender" 
            <?php 
                if (isset($gender) && $gender=="Female") {
                    echo "checked";
                }
            ?> 
            value="Female">Female 
    <input type="radio" name="gender" 
            <?php 
                if (isset($gender) && $gender=="Other") {
                    echo "checked";
                }
            ?> 
            value="Other">Other 
    <span class="red">* <?php echo $genderErr;?></span> <br>
    
    DEGREE: <input type="checkbox" name="degree1" 
            <?php 
                if (isset($degree1) && $degree1 == "SSC") {
                    echo "checked";
                }
            ?> 
            value="ssc">SSC 
    <input type="checkbox" name="degree2" 
            <?php 
                if (isset($degree2) && $degree2 == "HSC") {
                    echo "checked";
                }
            ?> 
            value="hsc">HSC 
    <input type="checkbox" name="degree3" 
            <?php 
                if (isset($degree3) && $degree3=="BSc") {
                    echo "checked";
                }
            ?> 
            value="bsc">BSc 
    <input type="checkbox" name="degree4" 
            <?php 
                if (isset($degree4) && $degree4=="MSc") {
                    echo "checked";
                }
            ?> 
            value="msc">MSc 
    <span class="red">* <?php echo $degreeErr;?></span> <br>
    
    BLOOD GROUP: <select name="bloodGroup">

    	 <option value="" disabled selected></option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="A+") {
                    echo 'selected="selected"';
                }
            ?> 
            value="A+">A+</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="A-") {
                    echo 'selected="selected"';
                }
            ?> 
            value="A-">A-</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="B+") {
                    echo 'selected="selected"';
                }
            ?> 
            value="B+">B+</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="B-") {
                    echo 'selected="selected"';
                }
            ?> 
            value="B-">B-</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="O+") {
                    echo 'selected="selected"';
                }
            ?> 
            value="O+">O+</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="O-") {
                    echo 'selected="selected"';
                }
            ?> 
            value="O-">O-</option> 
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="AB+") {
                    echo 'selected="selected"';
                }
            ?> 
            value="AB+">AB+</option>
        <option 
            <?php 
                if (isset($bloodGroup) && $bloodGroup=="AB-") {
                    echo 'selected="selected"';
                }
            ?> 
            value="AB-">AB-</option>
      </select>
    <span class="red">* <?php echo $bloodGroupErr;?></span> <br>
    <input type="submit" name=""><br>
    </form>
</body>
</html>