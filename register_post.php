<?php
session_start();

require_once "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];



$make_hash_password = password_hash($password,PASSWORD_DEFAULT);

// $img = $_FILES['img'];



// Password Validations


$uppercase =preg_match("@[A-Z]@",$password);
$lowercase = preg_match("@[a-z]@",$password);
$number = preg_match("@[0-9]@",$password);
$specialChars = preg_match('@[^\w]@', $password);

$slug =true;



// Password Validation

// Validation Part For input Fild


if (empty($name)){
    $_SESSION["name_err"]="*Name Fild Is Required";
    header("location:register.php");
    $slug== false;

}
if(empty($email)){

    $_SESSION["email_err"]="*Email Fild Is Required";
    header("location:register.php");
    $slug== false;
    
}
if(empty($password)){

    $_SESSION["pass_err"]="*Password Fild is Required";
    header("location:register.php");
    $slug== false;
    
}elseif(!$uppercase || !$lowercase || !$number || !$specialChars){
    $_SESSION["pass_err"]="*UpperCase / LowerCase / Number / SpecialChars Missing";
    header("location:register.php");
    $slug== false;
}elseif(!$uppercase || !$lowercase || !$number || !$specialChars > 8){
    $_SESSION["pass_err"]="*Your Password Must Me <=8";
    header("location:register.php");
}

if($slug == true){

$insert = "INSERT INTO users(`name`, `email`, `password`) VALUES ('$name','$email','$make_hash_password')";

 $query =  mysqli_query($db_conn,$insert);

 if($query== true){
    

    $_SESSION["success"]="Your Register Success Full";
    header("location:index.php");

 }







}





















