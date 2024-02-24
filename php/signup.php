<?php 
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$year=$_POST['num'];
$Mon=$_POST['mon'];
$Day=$_POST['nu1'];
$Pho=$_POST['Pnum'];
$Email=$_POST['email'];
$Passw=$_POST['Pas'];
if($Fname==""){
    echo"Please enter your first name";
}
elseif($Lname==""){
    echo 'Enter your last name';
}
elseif($year==""|| $Mon==""|| $Day=="") {
    echo "Enter your date of birth properly";
}
else if($Pho==""){
    echo 'Entr your phone number';
}
elseif($Pho<=10){
    echo "Enter phone number properly";
}
else if($Email==""){
    echo 'Please enter your Email address';
}
elseif($Passw==""){
    echo "Enter new password";
}
else{
    echo "Successfully";
}

