<?php

$link_id = $_REQUEST["id"]; // achor tag of update 


include("connections.php"); // add database access 

$get_record = mysqli_query($connections, "SELECT * FROM tbl_boredgames WHERE id='$link_id'"); // get id of a certain account



while($row_edit = mysqli_fetch_assoc($get_record)) {  // fetch data 


    $db_link = $row_edit["link"];  
    $db_detail = $row_edit["detail"];
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bored Games</title>
    <link rel="stylesheet" href="../css/editaihelpers.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f60f4be67d.js" crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
	<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>

    <script type="text/javascript">
			window.tailwind.config = {
				darkMode: ['class'],
				theme: {
					extend: {
						colors: {
							border: 'hsl(var(--border))',
							input: 'hsl(var(--input))',
							ring: 'hsl(var(--ring))',
							background: '#252525',
							foreground: 'hsl(var(--foreground))',
							primary: {
								DEFAULT: 'hsl(var(--primary))',
								foreground: 'hsl(var(--primary-foreground))'
							},
							secondary: {
								DEFAULT: 'hsl(var(--secondary))',
								foreground: 'hsl(var(--secondary-foreground))'
							},
							destructive: {
								DEFAULT: 'hsl(var(--destructive))',
								foreground: 'hsl(var(--destructive-foreground))'
							},
							muted: {
								DEFAULT: 'hsl(var(--muted))',
								foreground: 'hsl(var(--muted-foreground))'
							},
							accent: {
								DEFAULT: 'hsl(var(--accent))',
								foreground: 'hsl(var(--accent-foreground))'
							},
							popover: {
								DEFAULT: 'hsl(var(--popover))',
								foreground: 'hsl(var(--popover-foreground))'
							},
							card: {
								DEFAULT: 'hsl(var(--card))',
								foreground: 'hsl(var(--card-foreground))'
							},
						},
					}
				}
			}
		</script>
    

</head>
<body>


    

            <!-- NAVBAR -->

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Linkorage</label>
        <ul>
            <li><a class="active" href="adminpanel.php">Home</a></li>
            <li><a href="logout.php" >Logout</a></li>
            
        </ul>
    </nav>


            <!-- INSERT FORM -->

            <!-- ERROR VALIDATION -->
  <?php


$link = $detail = "";
$linkErr = $detailErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {

  // Blank field detector
  if(empty ($_POST["link"])){
    $linkErr = "Please input an Updated Link!";
  } else {
    $link = $_POST["link"];
  }

  if(empty ($_POST["detail"])){
    $detailErr = "Please input an Updated Detail!";
  } else {
    $detail = $_POST["detail"];
  }

}

?>

    <form class="inputing" method="POST" action="updated_boredgames.php">
        
    <div class="min-h-screen bg-background flex flex-col items-center justify-center p-4">
    <div class="max-w-md w-full bg-card shadow-lg rounded-lg p-6">
        <h1 class="text-3xl text-primary text-center mb-6 font-bold"><img height="50px" width="70px"src="../images/logo.png">Linkorage</h1>
        <!-- <h4 class="text-1xl text-primary text-center mb-6 font-bold">"Store links and information at ease"</h4>
        <h4 class="text-1xl text-primary text-center mb-6 font-bold">By Steven Madali</h4> -->
        <div class="flex flex-col space-y-4">

            <input type="hidden" name="link_id" value="<?php echo $link_id; ?>">
            <input id="linkInput" type="text" name="new_link" value="<?php echo $db_link; ?>" placeholder="Enter Updated Link" class="w-full px-4 py-3 border border-input rounded-lg focus:outline-none focus:ring focus:ring-primary transition duration-300" /> 
            <span class="error"><?php echo $linkErr; ?></span> 

            <input id="descriptionInput" type="text" name="new_detail" value="<?php echo $db_detail; ?>" placeholder="Tell me about this Link" class="w-full px-4 py-3 border border-input rounded-lg focus:outline-none focus:ring focus:ring-primary transition duration-300" /> 
            <span class="error"><?php echo $detailErr; ?></span> 

            <button id="saveButton" class="bg-primary text-primary-foreground px-4 py-3 rounded-lg hover:bg-primary/80 focus:outline-none focus:ring focus:ring-primary transition duration-300">Update Link</button>
            <!-- <button id="sortButton" class="bg-secondary text-secondary-foreground px-4 py-3 rounded-lg hover:bg-secondary/80 focus:outline-none focus:ring focus:ring-secondary transition duration-300">Sort by Description</button> -->
        </div>
     
    </div>
</div>

    </form>
    



</body>
</html>

