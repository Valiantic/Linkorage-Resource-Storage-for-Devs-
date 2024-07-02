 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>




<?php



include("connections.php");

// CHECKS IF THE ACCOUNT IS REGISTERED TO THE DATABASE

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM tbl_linkadmin WHERE username='" . $username . "' AND password='" . $password . "' ";

    $result = mysqli_query($data, $sql);

    // $row=mysqli_fetch_array($result);

    // if($row["usertype"]=="user")
    // {
    //     header("location:user.php");
    // }
    // elseif ($row["usertype"]=="admin") {
    //     header("location:adminpanel.php");
    // }
    // else {
    //     echo "incorrect credentials";
    // }
    // Check if any results were found
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if ($row["usertype"] == "user") {
            $_SESSION["username"]=$username;
            header("location:user.php");

        } else if ($row["usertype"] == "admin") {
            $_SESSION["admin"]=$admin;
            header("location:adminpanel.php");

        } else {
            echo "Invalid user type"; // Handle unexpected usertype values
        }
    } else {
        // echo "Incorrect Credentials"; // Display error message if no matching records
    }

    mysqli_free_result($result); // Free the result set memory

}



?>



<div class="typecontainer">
        <span class="text myText">Welcome back Steven!</span>
    </div>

     
    <div class="form-container">
        <p class="container-title">Sign-in</p>

        <form class="inputing" action="" method="POST">
            <div class="inputname">
                <label class="usern">Username</label>
                <input type="text" name="username" placeholder="" required>
            </div>
            <div class="inputpass">
                <label class="passer">Password</label>
                <input type="password" name="password" placeholder="" required>
            </div>
        
                
                    <button class="signin"><a href="#">Sign in</a></button>
                
           
            </div>
           
            
        </form>
    </div>
    




</body>
</html>