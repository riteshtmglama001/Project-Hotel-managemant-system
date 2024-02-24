<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="student";
// $conn = new mysqli($servername,$username,$password);
// if ($conn->connect_error){
//     die("Connection error".$conn->connect_error);
// }
$conn=mysqli_connect($servername,$username,$password,$dbnaem);
if(!$conn){
    die('COuld not connected Mysqli server:'.mysqli_connect_error());
}