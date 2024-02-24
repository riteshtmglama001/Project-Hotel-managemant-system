<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-image: linear-gradient(to right,rgb(61, 5, 5),rgb(13, 13, 105));
  }


  .signup h1{
    color: orangered;
    padding: 15px;
  }
  
  .signup{
    background-image: url(../images/vertical.avif);
    width: 500px;
    height: 740px;
    margin-top: 80px;
    border-radius: 20px 40px 20px 60px;
    animation: borde 3s infinite;
  }
  
  @keyframes borde {
    0%{
      border:solid red;
    }
    50%
    {
      border: solid blue;
    }
    100%{
      border:solid green;
    }
  }
  
  .signup input{
    width: 80%;
    padding: 10px;
    border: none;
    border-radius: 10px;
    margin-top: 10px;
    animation: borderr 3s infinite;
    font-size: 15px;
  }
  
  @keyframes borderr{
    0%{
      border-bottom:solid rgb(8, 211, 93);
    }
    50%
    {
      border-bottom: solid rgb(235, 183, 14);
    }
    100%{
      border-bottom:solid rgb(253, 5, 5);
    }
  }
  
  .signup level{
    color: rgb(231, 222, 245);
    font-family: "Audiowide", sans-serif;
    padding: 15px;
  }
  
  #btn1{
    background-color: rgb(206, 60, 3);
    color: wheat;
    border: none;
    padding: 10px;
    margin-top: 28px;
    border-radius: 10px;
    color: rgb(194, 187, 184);
    font-family: sans-serif;
    font-weight: bold;
    transition: 0.10s;
  }
  
  #btn1:hover{
    background-color: orange;
    color: blue;
    font-size: 17px;
  }
    </style>
</head>
<body>
<center>
        <form action="dataentry.php" method="post" class="signup">
            <h1>Add new data</h1><br>

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