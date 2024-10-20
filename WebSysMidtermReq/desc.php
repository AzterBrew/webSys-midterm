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
            <h1>Project Description</h1>
        </div>
        <div class="content2">
            <br>    
            <h3>PPG : An Online Point of Sale System</h3>
            <br>
            <p>
            A tracking system is a vital part of any business management, no matter the size of the organization; the 
            difficulties encountered when managing inventory are similar regardless of the circumstances. Additionally, 
            there are existing constraints that are difficult to avoid with manual tracking. Hence, it's only correct to 
            incorporate the utilization of technology with business tracking.</p>
            <br>
            <p>
            Given the complexities of the topic being brought at hand, the group has decided to develop a system that offers 
            convenience to managers. By giving importance to the issues encountered by the selected subjects: 
            (1) Difficulties of manually managing both inventory and transactions (2) Slow transaction between 
            buyer and seller (3) Inefficient Tracking of sales and inventory — the developers designed a project outline 
            that features several improvements that may just change the processing of business management as a whole.</p>
            <br>
            <br>
            <p id="content3">
            Some key features include:</p>
            <br>         
            <p>            
            • <b>Categories Page.</b> A page that will enable users for smoother navigation in terms of the categories and products offered by 
            the business accessing the system.</p>
            <br>
            <p>            
            • <b>Products Page.</b> An inventory of items curated by the user, accounting for the details of the item's current stock, and variable.</p>
            <br>
            <p>            
            • <b>Order Creation.</b> Page concerning user and system interaction. It keeps track of reserved items based on what is ordered by 
            consumers and the amount of stock on said items.</p>
            <br>
            <p>            
            • <b>Orders Page.</b> A list accounting for the history of purchased items in the system.</p>
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
