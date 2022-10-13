<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    //connect
    $conn = new mysqli('localhost', 'root', '', 'test')
    if($conn->connect_error){
        die('Connect Failed': '.$conn->connect_error')
    }
    else {
        if($password == $repass) then
        $addInfo = $=conn->prepare("insert into user(username,password,Type)
        end
        
    }
?>
