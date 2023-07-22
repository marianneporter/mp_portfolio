const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const closeNavBtn =  document.querySelector('.close-nav-btn');
const mainContainer = document.querySelector('.main-container');
const aside = document.querySelector('.aside');
const overlay = document.querySelector('.overlay');

setAsidePosition();     

/********************************************************************/
/*   Event Listeners for menu functionality                         */ 
/*********************************************************************/
mobileNavIcon.addEventListener('click', () => {  
    aside.style.left = "0";
    overlay.style.opacity = "60%";
    mainContainer.style.position = "fixed";
});

closeNavBtn.addEventListener('click', () => { 
    closeSideMenu();
});

window.addEventListener('resize', () => {  
    overlay.style.opacity = "0";
    setAsidePosition();
});

overlay.addEventListener('click', (e) => {  
    if (e.target.style.opacity !== "0" ) {
        closeSideMenu();
    }    
})

function closeSideMenu() {
    aside.style.left = "-15rem";
    overlay.style.opacity = 0;
    mainContainer.style.position = "static";
}

function setAsidePosition() {

    if (window.innerWidth > 992) {      
        aside.style.left = 0; 
        closeNavBtn.style.width = "0";
        closeNavBtn.style.height = "0";
        overlay.style.opacity = "0";

    } else { 
        aside.style.left = "-15rem"; 
        closeNavBtn.style.width = "3rem";
        closeNavBtn.style.height = "3rem";  
      
    }
}