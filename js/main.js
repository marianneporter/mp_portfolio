const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const closeNavBtn =  document.querySelector('.close-nav-btn');
const mainContainer = document.querySelector('.main-container');
const aside = document.querySelector('.aside');
const overlay = document.querySelector('.overlay');

//setAsidePosition();  
aside.style.left = window.innerWidth > 992 ? "0" : "-15rem";   

/********************************************************************/
/*   Event Listeners for menu functionality                         */ 
/*********************************************************************/
mobileNavIcon.addEventListener('click', () => {  
    openSideMenu();   
});

closeNavBtn.addEventListener('click', () => { 
    closeSideMenu();
});

overlay.addEventListener('click', (e) => {  
    // if (e.target.style.opacity !== "0" ) {
    //     closeSideMenu();
    // }   
    closeSideMenu(); 
});

window.addEventListener('resize', () => {  
    // overlay.style.opacity = "0";
    // overlay.style.zIndex = '-1';
    aside.style.left = window.innerWidth > 992 ? "0" : "-15rem";
    deactivateOverlay();
});

function openSideMenu() {
    aside.style.left = "0";
    overlay.style.zIndex = "1";
    overlay.style.opacity = "60%";
 //   mainContainer.style.marginRight = window.innerWidth - document.body.clientWidth;
    mainContainer.style.position = "fixed";
 
  

}

function closeSideMenu() {
    aside.style.left = "-15rem";
    deactivateOverlay();
    // overlay.style.opacity = 0;
    // overlay.style.zIndex = '-1';
  //  mainContainer.style.marginRight = window.innerWidth - document.body.clientWidth;
    mainContainer.style.position = "static";
}

function deactivateOverlay() {
 
    overlay.style.opacity = 0;
    setTimeout(() => {       
        overlay.style.zIndex = '-1';
    }, 2000);
    

  //  if (window.innerWidth > 992) {      
  //     aside.style.left = 0; 
        // closeNavBtn.style.width = "0";
        // closeNavBtn.style.height = "0";
 //   } else { 
  //      aside.style.left = "-15rem"; 
        // closeNavBtn.style.width = "3rem";
        // closeNavBtn.style.height = "3rem";        
 //   }
}

function activateOverlay() {

}

