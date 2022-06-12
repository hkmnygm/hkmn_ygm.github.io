<?php

$fname=$_POST["fname"]; 
$nationality=$_POST["nationality"];
$Gender=$_POST["Gender"];
$status=$_POST["status"];
/*
$hobby1=$_POST["hobby1"];
$hobby2=$_POST["hobby2"];
$hobby3=$_POST["hobby3"];
$hobby4=$_POST["hobby4"];
$hobby5=$_POST["hobby5"];*/

$conn = new mysqli('localhost', 'root','','WDYTaboutMe');
if ($conn->connect_error) 
{
echo "$conn->connect error";
die ("Connection Failed :". $conn->connect_error); 
} 
else 
{ 
$stmt = $conn->prepare ("insert into response(fname, nationality, Gender, status) values (?, ?, ?, ?)"); 
$stmt->bind_param("ssss", $fname, $nationality, $Gender, $status); 
$execval = $stmt->execute(); 
echo "Feedback reported successfully...";
$stmt->close(); 
$conn->close();
}
?>