<?php 
$HOSTNAME ='localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'resume_db';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$con){
     die(mysqli_error($con));
}

?>