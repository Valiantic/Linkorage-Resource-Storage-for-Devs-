
// Color1: 'rgb(205, 255, 223)'
// Color2: 'rgb(255, 246, 209)'
// Color3: 'rgb(206, 191, 255)'
// Color4: 'rgb(255, 209, 191)'
// Color5: 'rgb(192, 253, 255)'
// Color6: 'rgb(255, 188, 193)'

// SCRIPT FOR INDEX ARE COMMENT OUT 
// AND MOVE TO INDEX.PHP DUE TO RELOAD PROBLEMS ON PHP SERVER ITSELF!!!

// const arrayData = [
//     {
//         id: 1,
//         imageUrl: "./images/profiles/aihelpers.jpg",
//         Heading: "A.I Helpers",
//         bgColor: "white",
//         para: "Links for Various Artificial Intelligence Website to assist your Workloads!"
//     },
//     {
//         id: 2,
//         imageUrl: "./images/profiles/fronendtools.jpg",
//         Heading: "Front-End Tools",
//         bgColor: "white",
//         para: "Components, Animations, Scrolls, Navbars and many more Devtools!"
//     },
//     {
//         id: 3,
//         imageUrl: "./images/profiles/boredgames.jpg",
//         Heading: "Bored Games",
//         bgColor: "white",
//         para: "Nothing to do? Or something to buy time? play games now!"
//     },
//     {
//         id: 4,
//         imageUrl: "./images/profiles/designing.jpg",
//         Heading: "Designs & Inspirations",
//         bgColor: "white",
//         para: "Different Website Inspirations and Needs!"
//     },
//     {
//         id: 5,
//         imageUrl: "./images/profiles/learning.jpg",
//         Heading: "Upskill Coding",
//         bgColor: "white",
//         para: "Resource link to enhance Problem solving and Learning through Coding!"
//     },
//     {
//         id: 6,
//         imageUrl: "./images/profiles/visualization.jpg",
//         Heading: "Visualization Chart",
//         bgColor: "white",
//         para: "Tools for Data structures visualization as well as Database diagrams!"
//     }
    
// ]


// const cardContainer = document.querySelector('.container')

// const functionCards = () => {
//     arrayData.map((data) => {
//         // console.log(data)
//         // const linkUrl = `./html/tristan.html?id=${data.id}`;
//         let profileUrl = `../profile.php?id=${data.id}`; // Default profile URL

//         // Check if the current data object has a specific target id (replace 2 with your desired target id)
//         if (data.id === 1) {
//             profileUrl = `../php/aihelpershome.php?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//           }
//         if (data.id === 2) {
//           profileUrl = `./php/?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//         }
//         if (data.id === 3) {
//             profileUrl = `./php/?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//         }
//         if (data.id === 4) {
//             profileUrl = `./php/?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//         }
//         if (data.id === 5) {
//             profileUrl = `./php/?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//         }
//         if (data.id === 6) {
//             profileUrl = `./php/?id=${data.id}`; // Replace with your actual URL structure for the other HTML page
//         }

//         cardContainer.innerHTML += `
//         <div class="card" style="background-color: ${data.bgColor}">
//             <div class="image">
//                 <img src="${data.imageUrl}" alt="">
//             </div>
//             <h2>${data.Heading}</h2>
//             <p>${data.para}</p>

//             <a href="${profileUrl}"><button>My Daily Life</button></a>
           
//         </div>`
//     })
// }

// functionCards()