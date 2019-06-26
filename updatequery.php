<?php 
  include 'config.php';
  session_start();
if (!isset($_SESSION["username"])) {
 echo "<script> window.open('index.php?mes=Access Denied...','_self');</script>"; 
}
  $title=$_POST['title'];
  $description=$_POST['description'];
  $amount=$_POST['amount'];
  $id=$_GET['mid'];
  
  $sql="UPDATE transaction SET title='$title', description='$description', amount=$amount WHERE Id=$id";
  if ($conn->query($sql)==true) {
  	echo "<script>alert('Your Details Successfully Updated !!');
  	window.open('home.php','_self');</script>";
  }else{
  	echo '<script>alert("'.$conn->error.'");
  	window.open("home.php","_self");</script>';
  } 
  ?>