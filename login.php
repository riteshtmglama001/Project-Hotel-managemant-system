<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
</head>
<body>
    <form action="" method="post">
    <label>Email address/phonenumber:</label>
        <input type="text" id="email" placeholder="Enter email address"><br><br>
        <label>Password:</label>
        <input type="number" id="pass" placeholder="Enter Password"><br><br>
        <input type="button" value="login" onclick="Valid()"><br><br>
    </form>
    <script type="text/javascript">
        function Valid(){
            let emai = document.getElementById('email').value
        let password = document.getElementById('pass').value
        if(emai==""){
            alert("Enter your E-mail address")
        }
        else  if(password==""){
            alert("Enter your password")
        }
        else if(password!="123456"){
            alert("Incorrect your password!")
        }
        else if(emai!="project@gmail.com"){
            alert("Incorrect your Email address!")
        }
        else{
        alert("Success full ")
        window.location.href="Database.php";
        }
        }
    </script>
    </form>
</body>
</html>