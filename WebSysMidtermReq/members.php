<?php

session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['password'])) {

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 3 Members</title>
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
            <h1>Members Description</h1>
        </div>
    </div>

    <div class="memcontainer">
        <div id="krysta">
            <img src="./images/dog2.jpg" alt="ate">
            <h2>Krsyta</h2>
            <hr>
            <p>My name is Krysta M. Paule, born on February 22, 2004, and currently living 
            in Orani, Bataan. At the momen </p>
        </div>
        <div id="prans">
            <img src="./images/cornkill.jpg" alt="prans">
            <h2>prans</h2>
            <hr>
            <p>’m Francheska Rae S. Sison, born on August 24, 2004, and I live in Balanga City, Bataan. Currently, 
            I’m a third-year student in the Bachelor of Science</p>
        </div>
        <div id="leng">
            <img src="./images/dog.jpg" alt="leng">
            <h2>lng</h2>
            <hr>
            <p>My full name is Eloisa Marie Mendoza Sumbad. I currently study in Bataan Peninsula State University's Main Campus. 
            I am also under the Computer </p>
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