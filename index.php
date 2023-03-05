<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h4>SIGN UP</h4>
                <form action="includes/signup-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdRequest" placeholder="Confirm Password">
                    <input type="text" name="email" placeholder="Email">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>

            <div class="index-login-login">
                <h4>LOGIN</h4>
                <form action="includes/login-inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>