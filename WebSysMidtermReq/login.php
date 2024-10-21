<?php

session_start();

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function verify($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

$uname = verify($_POST['uname']);
$pass = verify($_POST['password']);
$setname = "admin";
$setpass = "pass";

if (empty($uname)) {
    header("Location: index.php?error=User Name is required");
    exit();
} else if(empty($pass)) {
    header("Location: index.php?error=Password is required");
    exit();
}

if ($uname === $setname && $pass === $setpass) {
    echo 'Logged in!';
    $_SESSION['user_name'] = $uname;
    $_SESSION['password'] = $pass;

    header("Location: admin.php");    
} else {
    header("Location: wronglog.php");
    exit();
}
