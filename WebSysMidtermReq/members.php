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
            <h1>Members Description</h1>
        </div>
    </div>

    <div class="memcontainer">
        <div id="krysta">
            <img src="./images/M1-Paule.jpg" alt="ate">
            <h2>Krysta M. Paule</h2>
            <hr>
            <p>My name is Krysta M. Paule, born on February 22, 2004, and currently living in Orani, Bataan. At the moment, I am a third-year student enrolled in the Bachelor of Science in Computer Science program, majoring in Software Development at Bataan Peninsula State University - Main Campus. I have a fascination with technology and its advancement, and I love to challenge myself by expanding my knowledge in my chosen field. I aim to contribute to innovative software projects and advance my skills as a student and developer. I am also eager to learn with like-minded individuals and work on projects that push the boundaries of what's possible in technology.</p>
        </div>
        <div id="prans">
            <img src="./images/M2-Sison.jpg" alt="prans">
            <h2>Francheska Rae S. Sison</h2>
            <hr>
            <p>I’m Francheska Rae S. Sison, born on August 24, 2004, and I live in Balanga City, Bataan. Currently, I’m a third-year student in the Bachelor of Science in Computer Science program, focusing on Software Development at Bataan Peninsula State University - Main Campus. I have a deep passion for coding and love exploring new technologies. In my free time, I enjoy working on personal projects and collaborating with my classmates on assignments. I’m eager to enhance my skills and contribute to innovative solutions in the tech industry.</p>
        </div>
        <div id="leng">
            <img src="./images/M3-Sumbad.jpg" alt="leng">
            <h2>Eloisa Marie M. Sumbad</h2>
            <hr>
            <p>My full name is Eloisa Marie Mendoza Sumbad. I'm currently studying under the Computer Science Program, Major in Software Development and a third year student. I take care of four cats that in which one of them is their mother named Shanghai, and the other three are her children named Gray, Fishcake, and Ice. I also enjoy animations and drawing, especially ones from TV Shows or games. One of my goals this year in terms of hobby is to start learning how to make games, and then learn more about data analytics when talking about something aligning with my current field.</p>
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