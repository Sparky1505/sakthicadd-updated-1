<?php
include './connection.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$cname = $_POST['cname'];
$designation = $_POST['designation'];
$subject = $_POST['subject'];
$project = $_POST['project'];
if($firstname == '' || $lastname == '' || $email == '' || $phone == '' || $subject   == '' || $project   == ''){
  echo "Please fill all required field";
} else {
  $query2 = "insert into contactform values(null,'$firstname','$lastname','$email','$phone','$cname','$designation','$subject','$project')";
  if ($con->query($query2) === TRUE) {
    echo "Form submitted successfully";
  } else {
    echo "There was error please referesh the page";
  }
}
?>