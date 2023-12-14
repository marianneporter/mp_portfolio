const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const closeNavBtn =  document.querySelector('#close-nav-btn');
const mainContainer = document.querySelector('.main-container');
const aside = document.querySelector('.aside');
const overlay = document.querySelector('.overlay');
const nav = document.querySelector('.aside nav');

/*************************************************************** */
/*  set initial aside menu position.                             */
/*************************************************************** */
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
    closeSideMenu(); 
});

nav.addEventListener('click', () => {
    if (window.innerWidth <= 991) {
        closeSideMenu();
    }    
})

window.addEventListener('resize', () => {   
    aside.style.left = window.innerWidth > 992 ? "0" : "-15rem";
    deactivateOverlay();
});

/****************************************************************************/
/*  functions called by the event handlers to open and close menu and       */
/*  handle the overlay which covers the rest of the screen when mobile menu */
/*  is in action                                                            */
/************************************************************************** */

function openSideMenu() {
    aside.style.left = "0";
    activateOverlay();  
    preventMainContentScrolling();
 //   mainContainer.style.position = "fixed";
}

function closeSideMenu() {
    aside.style.left = "-15rem";
    deactivateOverlay();  
    allowMainContentScrolling(); 
  //  mainContainer.style.position = "static";
}

function deactivateOverlay() { 
    overlay.style.opacity = 0;
    setTimeout(() => {       
        overlay.style.zIndex = '-1';
    }, 500);
}

function activateOverlay() {
    overlay.style.zIndex = "1";
    overlay.style.opacity = "60%";
}


function preventMainContentScrolling() {
    console.log('stop scroll');
    mainContainer.addEventListener('wheel', 
                                    preventScrolling,
                                    { passive: false });
}

function allowMainContentScrolling() {
    console.log('restart scroll');
    mainContainer.removeEventListener('wheel', preventScrolling);
}

 function preventScrolling(e) {
        console.log(e);
        e.preventDefault();
//     // prevent scrolling of main content for small screens if side nav is active
//     let element = e.target;
//     let asideParent = false;

//     do {
//         console.log(element.classList);
//         if (element.classList.contains('aside')) {
//             asideParent = true;
//         } else {
//             element = element.parentElement;
//         }
//     } while (element && !asideParent);
   

//     if (!asideParent) {
//       e.preventDefault();
//     }
}
