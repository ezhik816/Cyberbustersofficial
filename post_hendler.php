<?php

$named = $_POST['name'];
$emaild = $_POST['email'];
$companyd = $_POST['company'];
$namberd = $_POST['phone_namber'];
$descriptiond = $_POST['description'];




$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
  die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO requestmain (fio, person_email, company_name, phone_number, ur_decription)
VALUES ('$named', '$emaild', '$companyd', '$namberd', '$descriptiond')";



if($conn->query($sql) === TRUE){
//  echo "Dannie otpravleniy";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>
