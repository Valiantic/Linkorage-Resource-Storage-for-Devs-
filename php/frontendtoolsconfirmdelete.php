<?php

$link_id = $_REQUEST["id"];


include("connections.php");

$query_delete = mysqli_query($connections, "SELECT * FROM tbl_front_endtools WHERE id = '$link_id' ");

    while($row_delete = mysqli_fetch_assoc($query_delete)){
            $link_id = $row_delete ["id"];

            $db_link = $row_delete ["link"];
            $db_detail = $row_delete ["detail"];
    }

?>

<!-- OWN CSS IN THIS FILE DUE TO PHP RELOAD PROBLEMS -->

<style>

*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}

.typecontainer{
  
    position: sticky;
    top: 0;
    margin-left: 35%;
    width: 550px;
    position: absolute;
    display: flex;
    gap: 20px;
    overflow: hidden;
}

.typecontainer span{
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
  

    font-size: 4.7rem;
    font-weight: 700;
    position: relative;
}

.typecontainer span.myText{
    color: rgb(48, 196, 255);
    
}

.typecontainer span.headText{
    color: rgb(48, 196, 255);
}




body{
    background-color: white;
    width: 100vw;
}

nav{
    background: #252525;
    height: 80px;
    width: 100%;
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
}
label.logo{
    color: rgb(48, 196, 255);
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
    
}

nav ul{
    float: right;
    margin-right: 20px;
}
nav li{
    display: inline-block;
    line-height: 80px;
    margin: 0 5px;
}

nav ul li a {
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
}
.nobtn{
    text-align: center;

}
a .active{
    font-size: 2em;
}

a.active,a:hover{
    background: rgb(48, 196, 255);
    transition: .5s;
    border-radius: 7px;
    padding: 2px;
}
.checkbtn{
  font-size: 30px;
  color: rgb(48, 196, 255);
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
    display: none;
}


/* FORM PHP */


.error {
    color:red;
  }
  .displaytbl {
   
    width: 80%;
    background-color: white;
    margin: 10%;
  }
  .linktitle{
    padding-left: 27px;
    font-size : 2.3em;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: normal;
    text-decoration: underline;
    text-decoration-color: rgb(85, 135, 160);
 
  }
  .detailtitle{
    font-size : 2.3em;
    padding-left: 12px;
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: normal;
    text-decoration: underline;
    text-decoration-color: rgb(85, 135, 160);

  }

  table {
  border-collapse: collapse; /* This will remove the space between the borders */
  border-radius: 20px;
 }

  th, td {
    padding: 10px; /* This will add space between the content of the cell and the border */
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: normal;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2; /* This will add a light gray background color to even rows */
  }
  .inputing {
    margin-left: 2%;
  }


  body{
    background-color: #252525;
    padding: 0;
    margin: 0;
    overflow-x: hidden;
  }

  @media screen and (max-width: 767px) {
    body{
    padding: 0;
    margin: 0;
    }
  .displaytbl {
   
   width: 20%;
   background-color: white;
   margin: 10%;
   margin-left: 3%;
    }
  }
  
        @layer base {
            :root {
                --background: 0 0% 100%;
--foreground: 222.2 84% 4.9%;
--card: 0 0% 100%;
--card-foreground: 222.2 84% 4.9%;
--popover: 0 0% 100%;
--popover-foreground: 222.2 84% 4.9%;
--primary: 222.2 47.4% 11.2%;
--primary-foreground: 210 40% 98%;
--secondary: 210 40% 96.1%;
--secondary-foreground: 222.2 47.4% 11.2%;
--muted: 210 40% 96.1%;
--muted-foreground: 215.4 16.3% 46.9%;
--accent: 210 40% 96.1%;
--accent-foreground: 222.2 47.4% 11.2%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 210 40% 98%;
--border: 214.3 31.8% 91.4%;
--input: 214.3 31.8% 91.4%;
--ring: 222.2 84% 4.9%;
--radius: 0.5rem;
            }
            .dark {
                --background: 222.2 84% 4.9%;
--foreground: 210 40% 98%;
--card: 222.2 84% 4.9%;
--card-foreground: 210 40% 98%;
--popover: 222.2 84% 4.9%;
--popover-foreground: 210 40% 98%;
--primary: 210 40% 98%;
--primary-foreground: 222.2 47.4% 11.2%;
--secondary: 217.2 32.6% 17.5%;
--secondary-foreground: 210 40% 98%;
--muted: 217.2 32.6% 17.5%;
--muted-foreground: 215 20.2% 65.1%;
--accent: 217.2 32.6% 17.5%;
--accent-foreground: 210 40% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 210 40% 98%;
--border: 217.2 32.6% 17.5%;
--input: 217.2 32.6% 17.5%;
--ring: 212.7 26.8% 83.9;
            }
        }


/* FORM PHP */



@media (max-width:952px){
    label.logo{
        font-size: 30px;
        padding-left: 15px;
    }
    nav ul li a{
        font-size: 16px;

    }
}
@media (max-width:858px){
    .checkbtn{
        display: block;
    }
    ul{
        position: fixed;
        width: 100%;
        height: 100vh;
        background-image: url(kape.jpg);
        background-size: cover;
        background-repeat: repeat;
        top: 80px;
        left: -100%;
        text-align: center;
        transition: all .5s;
    }
    nav ul li{
        display: block;
        margin: 40px 0;
        line-height: 30px
    }
    nav ul li a{
        font-size: 20px;
    }
    a:hover,a.active{
        background: none;
        color: rgb(48, 196, 255);
    }
    #check:checked ~ ul {
        left: 0;
    }
}

section{
   background: url(kape.jpg) no-repeat;
   background-size: cover;
   height: calc(100vh - 80px);
}



</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit A.I Helpers</title>
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



  

    <form class="inputing" method="POST" action="frontendtoolsdelete_now.php">
        
    <div class="min-h-screen bg-background flex flex-col items-center justify-center p-4">
    <div class="max-w-md w-full bg-card shadow-lg rounded-lg p-6">
        <h1 class="text-3xl text-primary text-center mb-6 font-bold"><img height="50px" width="70px"src="../images/logo.png">Are you sure you want to delete this Link?</h1>
        <!-- <h4 class="text-1xl text-primary text-center mb-6 font-bold">"Store links and information at ease"</h4>
        <h4 class="text-1xl text-primary text-center mb-6 font-bold">By Steven Madali</h4> -->
        <div class="flex flex-col space-y-4">

            <input type="hidden" name="link_id" value="<?php echo $link_id; ?>">

            <!-- <input type="submit" value="Yes"> &nbsp; <a href='../php/editaihelpers.php'>No</a> -->

            <button id="saveButton" class="bg-primary text-primary-foreground px-4 py-3 rounded-lg hover:bg-primary/80 focus:outline-none focus:ring focus:ring-primary transition duration-300">Yes</button>
            <a class="nobtn" href='../php/editfrontendtools.php'>No</a>
            
            <!-- <button id="sortButton" class="bg-secondary text-secondary-foreground px-4 py-3 rounded-lg hover:bg-secondary/80 focus:outline-none focus:ring focus:ring-secondary transition duration-300">Sort by Description</button> -->
        </div>
     
    </div>
</div>

    </form>
    



</body>
</html>


