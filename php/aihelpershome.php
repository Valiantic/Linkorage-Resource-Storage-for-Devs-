<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit A.I Helpers</title>
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
            <li><a class="active" href="../index.php">Home</a></li>
            <!-- <li><a href="logout.php" >Logout</a></li> -->
            
        </ul>
    </nav>


            <!-- INSERT FORM -->

            <!-- ERROR VALIDATION -->
 
    

   <?php


// database connector
include("connections.php");



   // read the user 
   $view_query = mysqli_query($connections, "SELECT * FROM tbl_aihelpersrecord");


   echo "<table class=displaytbl>";
   echo "<tr>
          <td class=linktitle>Link</td>
          <td class=detailtitle>Detail</td>
        </tr>";
          
  
    while($row = mysqli_fetch_assoc($view_query)){
  
  
      // make sure that paramets inside row is same on the database column 
      // CHECK CAPITALIZATION!!!
      $db_link = $row["link"];
      $db_detail = $row["detail"];
      echo "<tr>
               <td class=px-7 py-2 text-left text-secondary><a href='$db_link'>$db_link</a></td>
               <td class=px-4 py-2 text-left text-secondary>$db_detail</td>
            </tr>";
      
    }
  
  echo "</table>";

?>


</body>
</html>