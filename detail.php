

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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
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
            margin: 0px;
            padding: 0px;
            border-radius: 10px 10px 10px 10px;
            border-color: rgba(116, 185, 255,0.7);
            background-color: rgba(116, 185, 255,0.5);

           }
          #cont{
            margin: 0px;
            padding: 0px;
            width: 74.1%;
            float: right;
            height: 100%;
            border-style: solid;
            border-color: #636e72;
            border-radius: 10px 10px 10px 10px;
            background-color:rgba(178, 190, 195,0.5);
          }
          a{
            text-decoration: none;
            color: white;
            margin: auto;
          }
          table{width: 100%;}
          tr{width: 100%;
           
          }
        .dbc:hover{
            background-color:  rgba(116, 185, 255,0.7);
          }
       .dbc td{
       
        border-bottom-style: solid; 
        border-bottom-color: rgba(116, 185, 255,0.7);
       font-family: 'Cute Font', cursive;
     font-size: 30px;
        border-width: 2px;
        color: black;
        
       }.dbc td a{
        margin-left: 70px;
       }
      .act{
        margin-left:100px;
        border-bottom-style: solid; 
        border-bottom-color:rgba(178, 190, 195,1);
       font-family: 'Cute Font', cursive;
     font-size: 30px;
        border-width: 2px;
        color: black;
          }
          .act a{
              margin-left:100px;
          }
          #a{
            display: none;

          }
          .act:hover {
              background-color:  rgba(116, 185, 255,0.7);
          }
          table tr:hover #a{
            display: inline-block;
          }
          h1{
          	 font-family: 'Cute Font', cursive;
          	 margin-left: 50px;
          	 margin-top: 20px;
          	 font-size: 80px;
          	 font-weight: normal;
          	 color: black;
          }
          h2{
          	 font-family: 'Open Sans Condensed', sans-serif;
          	 margin-left: 50px;
          	 font-size: 40px;
          	 font-weight: normal;
          	 color: white;
          	 margin-top: -5px;
          }
          #delete{
            width:170px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            font-size:25px;
            border-color: #29487D;
            border-width:1px;
            margin-left: 50px;
            margin-top: 10px;
            font-weight:bold;
            letter-spacing: -1px;
            cursor: pointer;
            }
          #update{
            width:170px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            font-size:25px;
            border-color: #29487D;
            border-width:1px;
            margin-left: 50px;
            margin-top: 10px;
            font-weight:bold;
            letter-spacing: -1px;
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
    <div id="db"><table><tr class="dbc"><td><a href="home.php">Dashboard</a></td></tr>
                        <tr class="dbc"><td><a href="add.php">Add Expense</a></td></tr></table></div>
    <div id="cont">
     
      <?php 
      
        if(isset($_GET['id'])){
       $id=$_GET['id'];
       $sql="SELECT * FROM transaction WHERE id=$id";
       $result=$conn->query($sql);
       $row=$result->fetch_assoc();
       $title=$row['title'];
       $description=$row['description'];
       $date=$row['date'];
       $amount=$row['amount'];
       echo " <h1>$title</h1>
      <h2>$description</h2> 
      <h2>date&time : $date</h2>
      <h2>Expense:Rs.$amount</h2>
      <button id='delete'><a href='delete.php?md=$id'>Delete</a></button>
      <button id='update'><a href='update.php?md=$id'>Update</a></button> ";
   }
      
      ?>
    </div>
		</div>

</body>
</html>