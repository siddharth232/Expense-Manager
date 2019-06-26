<?php 

  include 'config.php';
  session_start();
   
if (!isset($_SESSION["username"])) {
 echo "<script> window.open('index.php?mes=Access Denied...','_self');</script>"; 
}
  $id=$_GET['md'];
  $sql="DELETE FROM transaction WHERE Id=$id";
  if($conn->query($sql)){
  	echo "<script>alert('Deleted Successfully');
  	window.open('home.php','_self');</script>";
  }
  ?>