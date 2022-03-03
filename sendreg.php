<?php
 
 $username = $_POST["username"];
 $Email    = $_POST["Email"];
 $Phone    = $_POST["Phone"];
 $location = $_POST["location"];

 $password = $_POST["password"];




$conn = mysqli_connect("localhost","root","","petpark");
$qury = "insert into Normalcustomer(Cname,Email,Phnumber,Location,password) values ('$username',' $Email',' $Phone ',' $location ','$password')";
$send = mysqli_query($conn,$qury);











?>