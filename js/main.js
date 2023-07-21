const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const closeNavBtn =  document.querySelector('.close-nav-btn');
const mainContainer = document.querySelector('.main-container');
const aside = document.querySelector('.aside');
const overlay = document.querySelector('.overlay');

/***************************************************************** */
/*     code to run when page loaded                                */
/***************************************************************** */

document.addEventListener("DOMContentLoaded", function() {
    setAsidePosition();
   
});

  

/********************************************************************/
/*   Event Listeners for menu functionality                         */ 
/*********************************************************************/
mobileNavIcon.addEventListener('click', () => {  
    aside.style.left = "0";
    overlay.style.opacity = "80%";
});

closeNavBtn.addEventListener('click', () => {
    console.log('close button clicked');
    aside.style.left = "-15rem";
    overlay.style.opacity = 0;
});


function setAsidePosition() {

    if (window.innerWidth > 768) {      
        aside.style.left = 0;
        closeNavBtn.style.display = 'none';
        overlay.style.opacity = "0";

    } else { 
        aside.style.left = "-15rem";
        closeNavBtn.style.display = 'block';        
    }
}

window.addEventListener('resize', () => {
    console.log('resizing!')
    setAsidePosition();
})