const projectCards = document.querySelectorAll('.projects__card');
//console.log(projectCards);

// const test = document.querySelector('.front-toggle');
// console.log('test');
// console.log(test)

// test.addEventListener('click', (e)=> {
//     e.preventDefault();
//     console.log('test click');
// })
// console.log('********************');

projectCards.forEach((c) => {

    const frontToggle = c.querySelector('.front .front-toggle');
    const backToggle  = c.querySelector('.back .back-toggle');

    console.log(frontToggle);
 
    frontToggle.addEventListener('click', (e)=> {
        e.preventDefault();
        console.log('front toggle clicked');

        let front = e.target.parentNode;
        console.log('in listener');
        console.log(front);

        let back = front.nextElementSibling;
        console.log(back);

        front.style.opacity = 0;
        back.style.opacity = 1;

        setTimeout(() => {
            front.style.zIndex = "0";
            back.style.zIndex = "10";
        }, 750)
    })

    backToggle.addEventListener('click', (e)=> {
        e.preventDefault();
        console.log('back toggle clicked');

        let back = e.target.parentNode;
        console.log('in listener');
        console.log(back);

        let front = back.previousElementSibling;
        console.log(front);

        front.style.opacity = 1;
        back.style.opacity = 0;

        setTimeout(() => {
            back.style.zIndex = "0";
            front.style.zIndex = "10";
        }, 500)
    })
})

// projectCards.forEach((c) => {
//     console.log(c);
//     console.log(typeof c);

    
//     c.querySelector('.front-toggle').addEventListener('click', () => { 
       
//         let cardFront = c.parentNode;    
//         let cardBack = cardFront.nextElementSibling; 
    
//         cardFront.style.opacity = "0";
//         cardBack.style.opacity = "1";       
//     })
//     c.querySelector('.back-toggle').addEventListener('click', () => {  
//         let cardBack = c.parentNode;   
//         let cardFront = cardBack.previousElementSibling;      
//         cardFront.style.opacity = "1";
//         cardBack.style.opacity = "0";       
//     })
// })

// const cardFront 
//       = document.querySelector('.projects__card .front');
// const cardBack 
//       = document.querySelector('.projects__card .back'); 
// const cardFrontToggle
//       = document.querySelector('.projects__card .front-toggle');
// const cardBackToggle
//       = document.querySelector('.projects__card .front-toggle');

// cardFrontToggle.addEventListener('click', () => {
//     cardFront.style.opacity = "0";
//     cardBack.style.opacity = "1";
// });

// cardFrontToggle.addEventListener('click', () => {
//     cardFront.style.opacity = "1";
//     cardBack.style.opacity = "0";
// });
