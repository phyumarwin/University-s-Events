<?php

$host="localhost";
$user="root";
$password="";
$db="uni_events";

$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]==POST)
{
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from where username='".$name."' 
    AND email='".email."' 
    AND password='".$password."' ";
}
?>