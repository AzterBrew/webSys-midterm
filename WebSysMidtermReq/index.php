<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <div id="login">
        <form action="login.php" method="post" class="indexform">
            <div class="content">
            <h1>Midterm Requirement GRP03</h1>
            <h2>User Login</h2>
            <?php   //This lets us have different values depending on conditions by '$_GET'ing that result of a condition from a session. 
                    //<p> class toh btw
                if (isset($_GET['error'])) {
                    echo '<p class="error">' . $_GET['error'] . '</p>';
                }
            ?>
            <label>Username:</label>
            <input type="text" name="uname" placeholder="Username">
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password">
            <div class="btn">
                <button type="submit">Login</button>
                <button type="reset">Reset</button>
            </div>

            </div>
        </form>
        <div class="form-img">
            <img src="./WebSysMidtermReq/images/bg-img.png"alt="Background Image">
        </div>
    </div>
</body>
</html>