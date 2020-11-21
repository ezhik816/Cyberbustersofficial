<?php
require_once 'connect.php';



$named = $_POST['name'];
$emaild = $_POST['email'];
$companyd = $_POST['company'];
$namberd = $_POST['phone_namber'];
$descriptiond = $_POST['description'];

$sql = "INSERT INTO requestmain (fio, person_email, company_name, phone_number, ur_decription)
VALUES ('$named', '$emaild', '$companyd', '$namberd', '$descriptiond')";

if($conn->query($sql) === TRUE){
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

header('Location: ../index.html');
?>
