
// Color1: 'rgb(205, 255, 223)'
// Color2: 'rgb(255, 246, 209)'
// Color3: 'rgb(206, 191, 255)'
// Color4: 'rgb(255, 209, 191)'
// Color5: 'rgb(192, 253, 255)'
// Color6: 'rgb(255, 188, 193)'


const arrayData = [
    {
        id: 1,
        imageUrl: "./images/profiles/aihelpers.jpg",
        Heading: "A.I Helpers",
        bgColor: "rgb(48, 196, 255)",
        para: "Links for Various Artificial Intelligence Website to assist your Workloads!"
    },
    {
        id: 2,
        imageUrl: "./images/profiles/fronendtools.jpg",
        Heading: "Front-End Tools",
        bgColor: "rgb(48, 196, 255)",
        para: "Components, Animations, Scrolls, Navbars and many more Devtools!"
    },
    {
        id: 3,
        imageUrl: "./images/profiles/boredgames.jpg",
        Heading: "Bored Games",
        bgColor: "rgb(48, 196, 255)",
        para: "Nothing to do? Or something to buy time? play games now!"
    },
    {
        id: 4,
        imageUrl: "./images/profiles/designing.jpg",
        Heading: "Designs & Inspirations",
        bgColor: "rgb(48, 196, 255)",
        para: "Different Website Inspirations and Needs!"
    },
    {
        id: 5,
        imageUrl: "./images/profiles/learning.jpg",
        Heading: "Upskill Coding",
        bgColor: "rgb(48, 196, 255)",
        para: "Resource link to enhance Problem solving and Learning through Coding!"
    },
    {
        id: 6,
        imageUrl: "./images/profiles/visualization.jpg",
        Heading: "Visualization Chart",
        bgColor: "rgb(48, 196, 255)",
        para: "Tools for Data structures visualization as well as Database diagrams!"
    }
    
]


const cardContainer = document.querySelector('.container')

const functionCards = () => {
    arrayData.map((data) => {
        // console.log(data)
        // const linkUrl = `./html/tristan.html?id=${data.id}`;
        let profileUrl = `./profile.html?id=${data.id}`; // Default profile URL

        // Check if the current data object has a specific target id (replace 2 with your desired target id)
        if (data.id === 1) {
            profileUrl = `./html/tristan.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
          }
        if (data.id === 2) {
          profileUrl = `./html/steve.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 3) {
            profileUrl = `./html/railey.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 4) {
            profileUrl = `./html/meinard.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 5) {
            profileUrl = `./html/jommel.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
        }
        if (data.id === 6) {
            profileUrl = `./html/rhenz.html?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
        }

        cardContainer.innerHTML += `
        <div class="card" style="background-color: ${data.bgColor}">
            <div class="image">
                <img src="${data.imageUrl}" alt="">
            </div>
            <h2>${data.Heading}</h2>
            <p>${data.para}</p>

            <a href="${profileUrl}"><button>My Daily Life</button></a>
           
        </div>`
    })
}

functionCards()