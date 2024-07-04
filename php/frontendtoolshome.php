<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkorage</title>
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
    margin-left: 28%;
    width: 590px;
    position: absolute;
    display: flex;
    gap: 20px;
    overflow: hidden;
}

.typecontainer span{
    font-family: "Poppins", sans-serif;
    font-weight: 600;
    font-style: normal;
  

    font-size: 5.7rem;
    font-weight: 700;
    position: relative;
}

.typecontainer span.myText{
    color: rgb(48, 196, 255);
    
}

.typecontainer span.headText{
    color: rgb(48, 196, 255);
}

.typecontainer span.frontendtoolstext {
    color: rgb(48, 196, 255);
    font-size: 4.5rem;
    
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
    margin-left: 18%;
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

@media  screen and (max-width: 767px) {
    body{
        padding: 0;
        margin: 0;
    }
    .typecontainer{
  
        position: sticky;
        top: 10%;
        margin-left: 25%;
        width: 750px;
        position: absolute;
        display: flex;
        gap: 13px;
        overflow: hidden;
    }

    .typecontainer span{
        font-family: "Poppins", sans-serif;
        font-weight: 600;
        font-style: normal;
      
    
        font-size: 1.2rem;
        font-weight: 700;
        position: relative;
    }

    
    .typecontainer span.headText{
        color: rgb(48, 196, 255);
    }
    
   td {
    width: 1vw;
    height: 1vw;
   }
   table {
    width: 1vw;
    height: 1vw;
   }
   th, td {
    padding: 1px; /* This will add space between the content of the cell and the border */
    font-family: "Poppins", sans-serif;
    font-weight: 500;
    font-style: normal;
  }
  th {
    width: 1vw;
  }
  .displaytbl {
   
    width: 1%;
    height: 1%;
    background-color: white;
    margin-left: 3%;
  }
  .px-7 {
    font-size: 1em;
    padding: 0;
  }
  .px-4 {
    font-size: 1em;
  }


}







</style>

    

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

    <div class="typecontainer">
        <span class="frontendtoolstext">Front-End Tools</span>
    </div>


            <!-- INSERT FORM -->

            <!-- ERROR VALIDATION -->
 
    

   <?php


// database connector
include("connections.php");



   // read the user 
   $view_query = mysqli_query($connections, "SELECT * FROM tbl_front_endtools");


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