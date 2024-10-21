<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="bg-login"> 
    
    <div class="login1"><h1>Login</h1>
    <div id="login">
        <form action="login.php" method="post" class="indexform">
            <div class="content">
            <h2>User Login</h2>
            <?php   
                if (isset($_GET['error'])) {
                    echo '<p class="error">' . $_GET['error'] . '</p>';
                }
            ?>
            <input type="text" name="uname" placeholder="User Name"> 
            <br>
            <input type="password" name="password" placeholder="User Password">
            <div class="btn">
                <button type="submit">Login</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>
        <div class="form-img">
            <img src="./images/bg-img.png"alt="Background Image">
        </div>
    </div>
            </div>
</body>
</html>