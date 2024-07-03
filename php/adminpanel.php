
<?php

// session_start();

// if(!isset($_SESSION["username"])) { // Check if username session variable is set
//   header("location:admin.php");   // Redirect to admin.php if not set
                    
// }

// // Code to display admin panel content would be here

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/adminpanel.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f60f4be67d.js" crossorigin="anonymous"></script>

</head>
<body>

    
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Linkorage</label>
        <ul>
            <li><a class="active" href="https://www.facebook.com/">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
            
        </ul>
    </nav>

    <div class="container">

    <div class="aihelpers"><a href="editaihelpers.php">Edit A.I Helpers</a></div>
    <div class="frontendtools"><a href="editfrontendtools.php">Edit Front-End Tools</a></div>
    <div class="boredgames"><a href="editboredgames.php">Edit Bored Games</a></div>

    <div class="designinspirations"><a href="editdesigninspirations.php">Edit Design & Inspirations</a></div>
    <div class="upskillcoding"><a href="editupskillcoding.php">Edit Upskill Coding</a></div>
    <div class="visualizationchart"><a href="editvisualizationchart.php">Edit Visualization Chart</a></div>




    </div>
    
   

    
</body>
</html>