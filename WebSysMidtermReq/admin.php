<?php

session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="home">
    <header>
        <nav>
            <a href="admin.php">Admin Page</a>
            <a href="desc.php">Project Description</a>
            <a href="members.php">Members</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <div class="title">
            <h1>Admin Page</h1>
        </div>
        <div class="content2">
            <br>    
            <h3>PPG : An Online Point of Sale System</h3>
            <br>
            <p>
            The online point of sales system is a system developed by a group of developers to discuss the importance of tracking 
            and inventory management in varied realms of businesses.</p>
            <br>
            <p>
            By enhancing the efficiency of operations, the system will aim to provide an improved approach to managing sales, 
            stock levels, and other operational processes within the business management.
            </p>
        </div>
    </div>
</body>
</html>

<?php
} else {
    header("Location: index.php");
    exit();
}
?>
