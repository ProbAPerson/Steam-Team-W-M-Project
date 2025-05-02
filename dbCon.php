<?php

//server, username, mysql pw, db
$mysqli = new mysqli('localhost', 'iste240t21', 'Acquisitiveness8!turgid', 'iste240t21');

if(mysqli_connect_errno()){
    echo 'Connection failed: ' . mysqli_connect_error();
    exit();
}else{
    // echo 'Connection good' 
}

?>