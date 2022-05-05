<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
</head>
<body>
    <center>
        <h1>Login Form</h1>
        <form method="post" action="check.php">
            
            <p>
                <label>Email</label>
                <input type="email" name="uemail">
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="upass">
            </p>
            
            <p>
                <input type="submit" name="loginSubmit" value="Login"><br>
                <a href="register.php">New Resistration</a>
            </p>
        </form>
    </center>
    
</body>
</html>