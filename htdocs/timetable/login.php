<?php
session_start();
require_once("./conn.php");

if(isset($_POST['user']) && isset($_POST['pass'])){
    $uname = $_POST['user'];
    $pass = $_POST['pass'];
    if(!empty($uname) && !empty($pass)){
        $sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pass'";
        $result = $conn->query($sql);
        if($result){
            if($result->num_rows>0){
                setcookie("login","yes", 60);
                echo "ok";
            }else{
                echo "No match found";
            }
        }
    }else{
        echo "all fields are required";
    }
}


?>