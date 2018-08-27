<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>

    <main class="registration">
        <div class="registration-container">
            <form action="signup.php" method="POST" >
                <div class="text-place">
                    <h1> <a href="/mySite/MainProject/index1.php">IDEAL</a></h1>
                    <img src="img/signup.png">
                    <input type="text" placeholder="login" name="login" value="<?php echo @$login;?>" >
                    <input type="password" placeholder="password" name="password">
                    <input type="password" placeholder="repeat your password" name="password2">
                    <input type="text" placeholder="e-mail" name="e-mail" value="<?php echo @$email;?>">
                    <button type='submit' name="bt_registred">Registration</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>