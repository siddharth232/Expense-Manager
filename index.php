<?php 
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Your Expense</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="mystylesheet.css">
	<link href="https://fonts.googleapis.com/css?family=Cute+Font&display=swap" rel="stylesheet">
	<style type="text/css"> 

		#head{
	 font-family: 'Cute Font', cursive;
     font-size: 60px;
     left: 20px;
     position: absolute;
     top: 8px;
     color: black;
}
		  #name{
            display: inline-block;
           	top:130px;
           	position: absolute;
           	width:435px;
           	height: 20px;
           	font-size: 18px;
            padding: 10px;           
           }
           #email{
           	top: 185px;
           	width:435px;
           	height: 20px;
           	font-size: 18px;
            padding: 10px;   }
            #header{
        background-color:#FFFFFE;
    height:80px;
    width: 1350px;
    position: relative;
       }
#container{
    background-image: url("Wallpaper.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height:600px;
    position:absolute;
    
    }

.ipt{
            position: absolute;
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            overflow: hidden;
            position: absolute;
           
            height: 20px;
            font-size: 18px;
            padding: 10px; 
          }
#uname{
          right:320px;
            top: 20px;
            width: 200px;
} 
#upass{
        top: 20px;
            width: 200px;
            right: 90px;
}   
  #butt{
            width:70px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            position:absolute;
            font-size:15px;
            border-color: #29487D;
            border-width:1px;
            top:20px;
            right:10px;
            font-weight:bold;
            letter-spacing: -1px;
            cursor: pointer;
           }   
   #intro1{
            font-family: Helvetica;
            font-weight: bold;
            font-size: 37px;
            top: 20px;
            left: 15px;
            position: absolute;
            color:#2d3436;
           }
           #intro2{
            font-family: Helvetica;
            color: #2d3436;
            position: absolute;
            left:15px;
            top:80px;
            font-size: 20px;
           }  
              .form{
            position: absolute;
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
            position: absolute;
           
            width:400px;
            height: 20px;
            font-size: 18px;
            padding: 10px; 
            left:15px;
            

            }     
           #pass{
           		top: 240px;
           	width:435px;
           	height: 20px;
           	font-size: 18px;
            padding: 10px; 
           } 
           #cpass{
           	top:295px;
           	width:435px;
           	height: 20px;
           	font-size: 18px;
            padding: 10px; 
           }
           #ph{
           	top: 350px;
           	width:435px;
           	height: 20px;
           	font-size: 18px;
            padding: 10px; 

           }
           body{
            margin: 0px;
           }
           *{
         margin:0px;
         padding: 0px;
         overflow-x: hidden;
         overflow-y: hidden;
}
 #lastbutt{
            border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: #619F4E;
            font-weight: bold;
            width:200px;
            height:40px;
           left:100px;
            top:425px;
            position: absolute;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;}
       </style>
</head>
<body>
	<div id="header"> 
		<p id="head" >Manage Your Expense</p>
    <form method="post" action="index.php">
	    <input type="text" name="uemail" id="uname" placeholder="Enter Email Address" class="ipt">
	    <input type="password" name="upassword" id="upass" placeholder="Enter Password" class="ipt">
	    <input type="submit" name="login" id="butt" value="Log In">
      
    </form>
	</div>
	<div id="container">
		<p id="intro1">Create an account</p>
	    <p id="intro2">It's free and always will be to manage ur expense</p>
      <form action="index.php" method="post" >
	    <input type="text" name="name" id="name" class="form" placeholder="UserName..." required>
	    <input type="email" name="email" id="email" class="form" placeholder="EmailAddress..." required>
	    <input type="password" name="Password" id="pass" class="form" placeholder="Password..."required>
	    <input type="password" name="Password1" id="cpass" class="form" placeholder="Confirm Password.."required>
	    <input type="number" name="number" id="ph" class="form" placeholder="PhoneNumber" required>
	    <input type="submit" id="lastbutt" value="Sign Up" name="signup">
    </form>
    <?php 
    if (isset($_GET["mes"])) {
       echo '<script>alert ("access denied");</script>';
}
     if(isset($_POST["signup"])){
    $name=$email=$password=$number=$cpassword="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $name = $_POST["name"];
       $email = $_POST["email"];
       $password=$_POST["Password"];
       $number=$_POST["number"];
       $cpassword=$_POST["Password1"];
}  

   if ($name==""||$email==""||$password==""||$number=="") {
     echo "<script>alert('please fill all details')</script>";
    }else{
         if ($password==$cpassword) {
          $sql="SELECT * FROM info WHERE username='$name'";
          $result=$conn->query($sql);
          if ($result->num_rows>0) {
            echo "<script>alert('Username Already Exist !!');</script>";

          }else{
          $sql="INSERT INTO info (username,password,email,phonenumber1)
                VALUES ('$name', '$password','$email','$number')";
                if ($conn->query($sql) === TRUE) {
    echo "<script>alert('You signed up succesfully.log in to continue');</script>";
} else {
    echo "<script>alert('Error:.'$conn->error'.')</script>";
} } }
 else{
          echo "<script>alert('Password must be same.Try again')</script>";
         }
     
 } }
 if(isset($_POST["login"])){
  $email=$_POST["uemail"];
  $password=$_POST["upassword"];
  $sql="select * from info where email='$email'and password='$password' ";
  $result=$conn->query($sql);
  if($result->num_rows>0){
    $value=$result->fetch_assoc();
    $_SESSION["username"]=$value["username"];
    echo "<script>window.open('home.php','_self');</script>";
  }else{
    echo "<script>alert('Invalid User');</script>";
  }
 }
?>

	</div>

</body>
</html>