<?php
include 'connection.php';


mysqli_select_db($conn, "grouphdb");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO grouph (firstname, lastname, phone, gender, address, username, password)
    VALUES ('$firstname', '$lastname', '$phone', '$gender', '$address', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../project/login.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
