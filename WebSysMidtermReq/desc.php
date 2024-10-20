<?php

session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Description</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
            <h1>Project Description</h1>
        </div>
        <div class="content2">
            <p>
            General description includes what problem the application will address, how the application will
            address the problem, the proposed users of the application, and general features of the application. 
            Use CSS and images to enhance the appearance of the different web pages.
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
