<?php

$connect = mysqli_connect('localhost','root','root','quotes_database');
if(mysqli_connect_error()){
    die("Connection error: " . mysqli_connect_error());
}

?>