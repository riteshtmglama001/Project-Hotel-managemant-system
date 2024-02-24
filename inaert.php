<?php
include ("Database.php");
$Email=$_POST['email'];
$Passw=$_POST['pas'];
$sql="INSERT INTO users(Email,passwo) VALUES('$Email','$Passw')";
if(mysqli_query($conn,$sql)){
    echo"New record has been added successfully";
}
else{
    echo "Error:".$sql.":-".mysqli_error($conn);
}
mysqli_close($conn);
