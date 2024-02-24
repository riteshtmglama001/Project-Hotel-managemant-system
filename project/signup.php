<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<center>
        <form action="../connection/dataentry.php" method="post" class="signup">
            <h1>Fill The Form</h1><br>

            <level>First Name</level><br>
            <input type="text" placeholder="Enter your first name" name="firstname"><br>
            <level>Last Name</level><br>
            <input type="text" placeholder="Enter your last name" name="lastname"><br>
            <level>Gender:</level><br>
            <input type="text" placeholder="Enter your Gender" name="gender"><br>
            <level>Phone</level><br>
            <input type="number" placeholder="Enter your phone number" name="phone"><br>
            <level>Address</level><br>
            <input type="text" placeholder="Enter your address" name="address"><br>
            <level>Username</level><br>
            <input type="email" placeholder="Enter your username" name="username"><br>
            <level>Create Password</level><br>
            <input type="password" placeholder="Create a strong password" required><br>
            <level>Confirm Password</level><br>
            <input type="password" placeholder="Confirm your password" name="password"><br>

            <a href=""><button type="submit" id="btn1">Sign Up</button></a>

        </form>
    </center> 
</body>
</html>