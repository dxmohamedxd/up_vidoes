<?php
$host="localhost";
$user="root";
$password="";
$dbname= "toturial";
$connect = mysqli_connect($host,$user,$password,$dbname);
if(!$connect){
    die("no connect" .mysqli_connect_error());
}
?>