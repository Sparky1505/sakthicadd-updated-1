<?php
include './connection.php';
?>
<?php
$email = $_POST['email'];
if($email == ''){
  echo "Please fill the field";
}else {
$query = mysqli_query($con, "select * from subscription where email='$email'");
$result = mysqli_num_rows($query);
if ($result == 1) {
  echo "You Aldready Subscribed";
  return;
} else {
  $query2 = "insert into subscription values(null,'$email')";
  if ($con->query($query2) === TRUE) {
    echo "Thank you for subscription";
  } else {
    echo "There was error please referesh the page";
  }
}
}
?>