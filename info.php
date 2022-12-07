<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
$conn = mysqli_connect("localhost", "root","","feedback");
$query ="insert into feedback(Name,Email,Message)values('$Name', '$Email','$Message')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We appreciate!';
else
die("Something terrible happened. Please try again. ");
?>