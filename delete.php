<?php session_start(); 
require_once "db.php";



$id = $_GET['id'];

$query = "DELETE FROM `users` WHERE id='$id'";




$delete = mysqli_query($db_conn,$query);

if($delete== true){

    
    $_SESSION["delete"]="Your User Delete Successfull";
    header("location:index.php");



}