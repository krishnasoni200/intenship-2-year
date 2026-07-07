<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'my_managment';

$comm=mysqli_connect($host,$user,$password,$database);
if(!$comm){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";