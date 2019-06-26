<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE expense";
$conn->query($sql);
$sql="CREATE TABLE borrow (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
groupname VARCHAR(30),
activity VARCHAR(50),
amount INT(13),
time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="CREATE TABLE groupactivity (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname VARCHAR(30),
groupname VARCHAR(30),
activity VARCHAR(50),
expense INT(13),
am INT(13),
pm INT(13),
created VARCHAR(30),
title VARCHAR(30),
description VARCHAR(200),
time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="CREATE TABLE groups(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
groupname VARCHAR(30),
description VARCHAR(150),
created VARCHAR(30),
time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="CREATE TABLE info (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
password VARCHAR(30),
email VARCHAR(50),
phonenumber1 INT(20),

)";
$conn->query($sql);
$sql="CREATE TABLE lent (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
groupname VARCHAR(30),
activity VARCHAR(50),
amount INT(13),
time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="CREATE TABLE message (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
message VARCHAR(250),

time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
$sql="CREATE TABLE rough (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
friends VARCHAR(30),
)";
$conn->query($sql);
$sql="CREATE TABLE transaction (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30),
title VARCHAR(30),
description VARCHAR(250),
amount INT(13),
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);
?>