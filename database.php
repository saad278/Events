<?php

$servername="localhost";
$username="root";
$password="";
$dbname="events_management";

$conn= new mysqli($servername,$username,$password,$dbname);
$conn->set_charset("utf8");
if($conn->connect_error){
       
    die("Connection faild".$conn->connect_error);
}


?>