<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div class="login">
        <form action="../php/login.php" method="post" class="loginform">
            <br><level>Login In</level><br><br><br>
            <span>Username</span><br><br>
            <input type="text" name="username" placeholder="Enter your username" required id="username"><br>
           <br> <span>Password</span><br><br>
            <input type="password" name="password" placeholder="Enter your password" required id="password"><br><br>
            <button style="border-radius: 10px; padding: 6px; margin-top: -5px; font-weight: bold; color: grey;" onclick="passw()">show password</button><br>

           <br> <button type="submit" id="login-btn">Log In</button>
           <br><br><a href="">forget password?</a>
        </form>
    </div>

</body>
</html>