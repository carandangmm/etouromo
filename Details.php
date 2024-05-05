<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo htmlspecialchars($_GET['name'] ?? 'E-TOUR\'O MO!'); ?></title>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link href='https://fonts.googleapis.com/css2?family=Sansita&display=swap' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="Styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .BackContainer h1{
            position: relative;
            right: 10px;
        }
    </style>

</head>
<body>
    <div class="HomePage">
        <header class="header">
            <nav class="navbar">
                <div class="logo-container">
                    <a href="index.php"><img src="images/LOGO (white) TRANSPARENT.png" alt="logo"></a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="index.php#about">ABOUT</a></li>
                    <li><a href="Places.php">PLACES</a></li>
                    <li><a href="index.php#contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="BackContainer">
        <a href="Places.php">
            <img src="images/Back.png" alt="Back">
            <h1>Back</h1>
        </a>
    </div>
    
    <div class="info-container">
        <center>
        <img src="<?php echo htmlspecialchars($_GET['image'] ?? 'default.jpg'); ?>" alt="<?php echo htmlspecialchars($_GET['name'] ?? 'Default Image'); ?>">
        <h1><?php echo htmlspecialchars($_GET['name'] ?? 'Default Place Name'); ?></h1>
        <p>
            <?php 
            // Output the description if available
            echo htmlspecialchars($_GET['description'] ?? 'Details about this place will be shown here. This place is best known for its unique geological formations and stunning views.'); 

            // Add a space or break if both description and details are available
            if (!empty($_GET['description']) && !empty($_GET['details'])) {
                echo "<br><br>"; // Adds two line breaks between description and details
            }


            echo htmlspecialchars($_GET['details'] ?? ''); 
            ?>
        </p>

        </center>
    </div>
    <script src="script.js"></script>
</body>
</html>
