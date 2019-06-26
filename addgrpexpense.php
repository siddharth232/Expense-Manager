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

           }
          #cont{
            margin: 0px;
            padding: 0px;
            width: 74.1%;
            float: right;
            height: 100%;
            overflow-y: auto;
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
          
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
           
            letter-spacing: 1px;
            width:400px;
            font-size: 20px;
            padding: 10px; 
            left: 375px;
            top:100px;
       }
     #description{
            
            height: 134px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
           
            resize: none;
            width:400px;
            font-size: 18px;
            padding: 10px; 
            left: 375px;
            top:180px;
}
      #amount{
           
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
           
            width:400px;
            font-size: 18px;
            padding: 10px; 
            left: 375px;
            top:360px;
      }
      #add{
             border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: #619F4E;
            font-weight: bold;
            width:200px;
            height:40px;
           left:470px;
            top:460px;
           margin-bottom: 25px;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;
      }
      .share{
            height: 34px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: #BDC7D8;
            overflow: hidden;
          
            letter-spacing: 1px;
            width:400px;
            font-size: 20px;
            padding: 10px; 
              left: 375px;
              top: 415px;
      }
        input{
          margin-top: 10px;

        }
        textarea{
          margin-top: 10px;
        }
       </style>
      
     
      
</head>
<body>
	<div id="header"> 
		<p id="head" >Manage Your Expense</p>
	     <button id="butt"><a href="logout.php">Log Out</a></button>
	</div>
	<div id="container">
    <div id="db"><table><tr><td><?php $gn=$_GET['gn']; echo"<a href='grpdetials.php?gn=$gn'>Group Dashboard</a></td></tr>"?>
                       </table></div>
    <div id="cont">
      <h1>Add Your Expense Here !!</h1>
<?php $gn=$_GET['gn']; echo "<form method='post' action='addgrpexpense.php?gn=$gn'>"; ?>
      <input type="text" name="title" id="title" placeholder="Title..." required><br>
      <textarea name="description" placeholder="Description..." id="description"required ></textarea><br>
      <input type="number" name="amount" placeholder="INR..." id="amount" required><br>
      <?php $uname=$_SESSION['username']; 
          $grpname=$_GET['gn'];
         $sql="SELECT username FROM groups WHERE groupname='$grpname' AND created='$uname'";
         $list=$conn->query($sql);
         while ($array=$list->fetch_assoc()) {
           $content=$array['username'];
           echo '<input type="number" name="'.$content.'sh" placeholder="'.$content.' share(in%)" id="'.$content.'" class="share" required><br>';
         }
       ?>
       <?php
       $uname=$_SESSION['username'];
 $grpname=$_GET['gn'];
   //   echo '<script>alert("'.$grpname.'");</script>';
        $sql="SELECT username FROM groups WHERE groupname='$grpname' AND created='$uname' ";
         $list=$conn->query($sql);

         while ($array=$list->fetch_assoc()) {
           $content=$array['username'];
           echo '<input type="number" name="'.$content.'p" placeholder="Paid by '.$content.' " id="'.$content.'" class="share" required><br>';
         }
         ?>
      <input type="submit" name="add" value="ADD" id="add">
    </form>
    <?php
    if (isset($_POST['add'])) {
       $uname=$_SESSION['username'];
       $groupname=$_GET['gn'];
       $title=$_POST['title'];
       $description=$_POST['description'];
       $expense=$_POST['amount'];
        $sql="SELECT username FROM groups WHERE groupname='$groupname' AND created='$uname'";
         $list=$conn->query($sql);
         while ($array=$list->fetch_assoc()) {
          $name=$array['username'];
          $paid=$_POST[$name.'p'];
          $apaid=$_POST[$name.'sh']*$expense/100;
          $sql1="INSERT INTO groupactivity(groupname,expense,fname,am,pm,title,description)
          VALUES('$groupname','$expense','$name','$apaid','$paid','$title','$description')";
          $conn->query($sql1);
         
          if ($paid>$apaid) {
            $var=$paid-$apaid;
            $sql2="INSERT INTO lent(groupname,activity,username,amount)
            VALUES('$groupname','$title','$name','$var')";
            $conn->query($sql2);
          }else if ($apaid>$paid) {
            $var=$apaid-$paid;
            $sql2="INSERT INTO borrow(groupname,activity,username,amount)
            VALUES('$groupname','$title','$name','$var')";
            $conn->query($sql2);

                      }
     } 
      echo "<script>windows.open('grp.php','_self');</script>";
   }
     ?>
    </div>
		</div>

</body>
</html>