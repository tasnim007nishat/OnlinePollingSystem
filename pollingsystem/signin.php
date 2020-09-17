<?php
include "db.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $email = $_POST['username'];
    $password = $_POST['password'];

    $query = $db->prepare("SELECT * FROM users WHERE email=?");
    $query->execute([$username]);
    if($query->rowCount()>0){
        $row=$query->fetch(PDO::FETCH_OBJ);
        $dbPassword=$row->password;
        $username=$row->username;
        $id=$row->id;
        if(password_veriyf($password, $dbPassword)){
            $_SESSION['id']=$id;
            $_SESSION['username']=$username;
            echo json_encode(['status' => 'success']);
        }else{
            echo json_encode(['status' => 'passwordError', 'message' => 'Password is wrong'])
        }
    }else{
        echo json_encode(['status' => 'usernameError', 'message' => 'Username is wrong']);
    }
}
?>