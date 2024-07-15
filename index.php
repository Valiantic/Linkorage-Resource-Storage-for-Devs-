<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linkorage</title>

    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    
    
      <!-- NOTE FOR FUTURE REFERENCE! TRY TO PUT THE RECORD ON SAME PHP FILE THEN SEPARATE TABLE DATABASE -->

    <!-- typing animation -->
    <div class="typecontainer">
        <span class="text myText">Linkorage</span>
    </div>
    <div class="subtitle">
        <span class="subtitle">"Resource Storage for Devs by Steven Madali"</span>
    </div>


    <div class="container">
        
    </div>

    <!-- <script src="./js/script.js"></script> -->

    <script>
        const arrayData = [
    {
        id: 1,
        imageUrl: "./images/profiles/aihelpers.jpg",
        Heading: "A.I Helpers",
        bgColor: "white",
        para: "Links for Various Artificial Intelligence Website to assist your Workloads!"
    },
    {
        id: 2,
        imageUrl: "./images/profiles/fronendtools.jpg",
        Heading: "Front-End Tools",
        bgColor: "white",
        para: "Components, Animations, Scrolls, Navbars and many more Devtools!"
    },
    {
        id: 3,
        imageUrl: "./images/profiles/boredgames.jpg",
        Heading: "Bored Games",
        bgColor: "white",
        para: "Nothing to do? Or something to buy time? play games now!"
    },
    {
        id: 4,
        imageUrl: "./images/profiles/designing.jpg",
        Heading: "Designs & Inspirations",
        bgColor: "white",
        para: "Different Website Inspirations and Needs!"
    },
    {
        id: 5,
        imageUrl: "./images/profiles/learning.jpg",
        Heading: "Upskill Coding",
        bgColor: "white",
        para: "Resource link to enhance Problem solving and Learning through Coding!"
    },
    {
        id: 6,
        imageUrl: "./images/profiles/visualization.jpg",
        Heading: "Visualization Chart",
        bgColor: "white",
        para: "Tools for Data structures visualization as well as Database diagrams!"
    }
    
]


const cardContainer = document.querySelector('.container')

const functionCards = () => {
    arrayData.map((data) => {
        // console.log(data)
        // const linkUrl = `./html/tristan.html?id=${data.id}`;
        let profileUrl = `../profile.php?id=${data.id}`; // Default profile URL

        // Check if the current data object has a specific target id (replace 2 with your desired target id)
        if (data.id === 1) {
            profileUrl = `../Linkorage/php/aihelpershome.php`; // Replace with your actual URL structure for the other HTML page
          }
        if (data.id === 2) {
          profileUrl = `../Linkorage/php/frontendtoolshome.php`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 3) {
            profileUrl = `../Linkorage/php/boredgameshome.php`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 4) {
            profileUrl = `../Linkorage/php/design&inspirationshome.php`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 5) {
            profileUrl = `../Linkorage/php/upskillcodinghome.php`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 6) {
            profileUrl = `../Linkorage/php/visualizationcharthome.php`; // Replace with your actual URL structure for the other HTML page
        }

        cardContainer.innerHTML += `
        <div class="card" style="background-color: ${data.bgColor}">
            <div class="image">
                <img src="${data.imageUrl}" alt="">
            </div>
            <h2>${data.Heading}</h2>
            <p>${data.para}</p>

            <a href="${profileUrl}"><button>Check Links!</button></a>
           
        </div>`
    })
}

functionCards()



    </script>
    
</body>
</html>



