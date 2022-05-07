<?php 

require_once 'db_connect.php';
function updateuser($data){
     $conn = db_conn();
     $selectQuery = "UPDATE `registration` SET `password`=:password WHERE `e-mail`=:email;";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
         
          ':email' => $data["email"],
          ':password' => $data['password']
         
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




?>