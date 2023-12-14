const projectCards = document.querySelectorAll('.projects__card');

projectCards.forEach((c) => {

    const frontToggle = c.querySelector('.front .front-toggle');
    const backToggle  = c.querySelector('.back .back-toggle');
 
    frontToggle.addEventListener('click', (e)=> {
        e.preventDefault(); 

        let front = e.target.parentNode; 

        let back = front.nextElementSibling; 

        front.style.opacity = 0;
        back.style.opacity = 1;

        setTimeout(() => {
            front.style.zIndex = "0";
            back.style.zIndex = "10";
        }, 750)
    })

    backToggle.addEventListener('click', (e)=> {
        e.preventDefault();

        let back = e.target.parentNode;

        let front = back.previousElementSibling;  

        front.style.opacity = 1;
        back.style.opacity = 0;

        setTimeout(() => {
            back.style.zIndex = "0";
            front.style.zIndex = "10";
        }, 500)
    })
})