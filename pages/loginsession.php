<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '".$email."' AND  lpassword = '".$password."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row["usertype"] == 'user'){
        echo 'user';
    }
    elseif($row['usertype'] == 'admin'){
        header('Location: ../index.php');
    }
    elseif($row['usertype'] == 'Doctor'){
        echo 'doctor';
    }
    else{
        echo 'email or password incorrect';
    }
}

?>
