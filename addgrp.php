<?php 
include "config.php";
session_start();
if (!isset($_SESSION["username"])) {
 echo "<script> window.open('index.php?mes=Access Denied...','_self');</script>"; 
}

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
    width: 100%;
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
          #db{
            width: 25%;
            float: left;
            height: 25%;
            border-style: solid;
            margin-top:10px;
            padding: 0px;
            border-radius: 10px 10px 10px 10px;
            border-color: rgba(116, 185, 255,0.7);
            background-color: rgba(116, 185, 255,0.5);
        font-family: 'Cute Font', cursive;
     font-size: 30px;
     color: white;
           }
          #cont{
            margin: 0px;
            padding: 0px;
            width: 74.1%;
            float: right;
            height: 100%;
            
          }
          a{
            text-decoration: none;
            color: white;
            margin: auto;
          }
          table{width: 100%;}
          tr{width: 100%;
           
          }
          table tr:hover{
            background-color:  rgba(116, 185, 255,0.7);
          }
       table tr td{
       
        border-bottom-style: solid; 
        border-bottom-color: rgba(116, 185, 255,0.7);
       font-family: 'Cute Font', cursive;
     font-size: 30px;
        border-width: 2px;
        color: black;
        
       }table tr td a{
        margin-left: 70px;
       }
      h1{
         font-family: 'Cute Font', cursive;
        font-size: 60px;
        font-style:oblique;
        font-weight: normal;
        margin-left: 20px;
       }
       #title{
            position: absolute;
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
            position: absolute;
            letter-spacing: 1px;
            width:400px;
            font-size: 20px;
            padding: 10px; 
            left: 375px;
            top:100px;
       }
     #description{
            position: absolute;
            height: 134px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
            position: absolute;
            resize: none;
            width:400px;
            font-size: 18px;
            padding: 10px; 
            left: 375px;
            top:180px;
}
      #amount{
            position: absolute;
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
            position: absolute;
            resize: none;
            width:400px;
            font-size: 18px;
            padding: 10px; 
            left: 375px;
            top:90px;
      }
      #add{
             border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: #619F4E;
            font-weight: bold;
            width:200px;
            height:40px;
           left:600px;
            top:160px;
            position: absolute;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;
      }
#Friendadd{border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: #619F4E;
            font-weight: bold;
            width:200px;
            height:40px;
            left:820px;
            top:100px;
            position: absolute;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;}
            #cancel{
              border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: #619F4E;
            font-weight: bold;
            width:200px;
            height:40px;
            left:380px;
            top:160px;
            position: absolute;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;
            }
       </style>
      
     
      
</head>
<body>
	<div id="header"> 
		<p id="head" >Manage Your Expense</p>
	     <button id="butt"><a href="logout.php">Log Out</a></button>
	</div>
	<div id="container">
    <div id="db">Add your friends who are participating in activity to share your expense and your happiness !!</div>
    <div id="cont">
      <h1>Add Your Friends Here !!</h1>
    <form method="post" action="addgrp.php">
      <input type="text" name="Friend" placeholder="Friend's Username" id="amount" >
      <input type="submit" name="Friendadd" id="Friendadd" value="Add Friend">
      <input type="submit" name="add" value="Create" id="add">
      <input type="submit" name="cancel" value="Cancel" id="cancel">
    </form>
    <?php 
    $count=0;
    $sql="SELECT username FROM info";
    $usernamelist=$conn->query($sql);
    if (isset($_POST['Friendadd'])) {
      while($user=$usernamelist->fetch_assoc()){
        if ($_POST['Friend']==$user['username']) {
          $count++;
        } }
        if ($count>0) {
          $count=0;
          $fname=$_POST['Friend'];
          $uname=$_SESSION['username'];
          $sql1="INSERT INTO rough(username,friends) Values('$uname','$fname')";
          if($conn->query($sql1)==true){
            echo"<script>alert('Your Friend Added Successfully');
            </script>";
       }else{
        echo '<script>alert("'.$conn->error.'")</script>';
       } }
        else{
          echo "<script>alert('Invalid Username');</script>";
        }
      
    }
    if (isset($_POST['cancel'])) {
      $sql="DELETE FROM rough";
      if ($conn->query($sql)==true) {
        echo "<script>alert('Creating Group is cancelled !!');
        window.open('home.php','_self');</script>";
      }
    }
    if (isset($_POST['add'])) {
        $sql2="SELECT friends FROM rough";
        $result=$conn->query($sql2);
        if ($result->num_rows>0) {
          $uname=$_SESSION['username'];
            $sql1="INSERT INTO rough(username,friends) Values('$uname','$uname')";
            $conn->query($sql1);
          echo "<script>window.open('addgrpdetails.php','_self');</script>";
      } else{
        echo "<script>alert('Add Some Friends to share your Expense');</script>";
      }
    }

    ?>
    </div>
		</div>

</body>
</html>