
// const flashContent = document.querySelector('.flash-content');
// const listItems = flashContent.querySelectorAll('.flash-content-item');

// // Calculer la largeur totale
// let totalWidth = 0;
// listItems.forEach(item => {
//     totalWidth += item.offsetWidth + 20; //20px de marge pour chaque item
// });


// //Définition d'une vitesse de défilement (en pixels par seconde);
// if (window.innerWidth >= 1024) {
//     speed = 50; // for large screens
// } else if (window.innerWidth >= 768) {
//     speed = 50; // for medium screens
// } else {
//     speed = 80; // for small screens
// }


//calcul de la durée totale en secondes
// const duration = totalWidth / speed;

// let containerWidth = totalWidth - 100


// const keyframes = `
//         @keyframes marquee {
//             0% {
//                 transform: translateX(70%);
//             }
//             100% {
//                 transform: translateX(-${containerWidth}px);
//             }
//         }`;

// const styleSheet = document.styleSheets[0];
// styleSheet.insertRule(keyframes, styleSheet.cssRules.length);


// flashContent.style.animationDuration = `${duration}s`;
// flashContent.style.WebkitAnimationDuration = `${duration}s`; // Pour Safari et Chrome plus anciens
