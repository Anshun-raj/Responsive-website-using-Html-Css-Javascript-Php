<?php
  $connect=mysqli_connect('localhost','****');
  mysqli_select_db($connect,'****');
  $name=$_POST['nm'];
  $email=$_POST['em'];
  $age=$_POST['age'];
  $textarea=$_POST['tx'];
  $query="INSERT INTO `getData`(`name`,`age`,`email`,`textarea`) VALUES ('$name','$age','$email','$textarea')";
  mysqli_query($connect,$query);
  echo "Data has been sent";
?>