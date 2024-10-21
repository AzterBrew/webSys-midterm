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
            • <b>User Log in.</b> Users that are able to log in are assigned by the admin, wherein their password is provided 
            and the email granted the authorization may be their company emails.</p>
            <br> 
            <p>            
            • <b>Categories and Products Page.</b> A page that will enable users for smoother navigation in terms of the 
            categories and products offered by the business accessing the system, where it is an inventory of items curated by 
            the user, accounting for the details of the item's current stock, and variable. </p>
            <br>
            <p>            
            • <b>Order Creation.</b> Page concerning buyer and seller transaction. It keeps track of reserved items based on what is
            ordered by assigned consumers and both its amount of stock on said items and the corresponding total price. A view of 
            all the made orders are also available in a separate page.</p>
            <br>
            <p>            
            • <b>Assignation of Account.</b> Allows main administrator to grant authorization on other users by assigning their 
            password with their company email.</p>
            <br>
            <p>            
            • <b>Customer Record Creation.</b> Creating records of customer to be used for creating order records in the system.</p>
            <br>
            <p>
            • <b>Dashboard or Overview.</b> Summary of the stored records are shown, which may include the total of records, 
            remaining total stocks, and other more data.    
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
