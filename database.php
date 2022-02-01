<?php
 $server = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'volba';
 $conn=mysqli_connect($server,$username,$password,$database);
 if(!$conn){
     die("conexion2 tipo fallida");
?>