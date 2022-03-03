<?php

$username = $_POST["username"];
$email    = $_POST["email"];
$Phone    = $_POST["phone"];
$location = $_POST["location"];
$password = $_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("<script>alert('invalid email');</script>");
 }
 else{
    $conn  = mysqli_connect("localhost","root","","petpark");
    $query = "INSERT INTO Normalcustomer(Cname,Email,phnumber,Location,password) values ('$username','$email','$Phone','$location','$password')";
    $send  = mysqli_query($conn,$query);
 }








