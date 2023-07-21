const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const closeNavBtn =  document.querySelector('.close-nav-btn')
const aside = document.querySelector('.aside');

/***************************************************************** */
/*     code to run when page loaded                                */
/***************************************************************** */

document.addEventListener("DOMContentLoaded", function() {
    setAsidePosition();
    console.log('document loaded set aside position and close btn');
});

  

/********************************************************************/
/*   Event Listeners for menu functionality                         */ 
/*********************************************************************/
mobileNavIcon.addEventListener('click', () => {
    console.log('mobile nav clicked');
    aside.classList.remove('aside-hidden');
    aside.classList.add('aside-active');

});

closeNavBtn.addEventListener('click', () => {
    console.log('close button clicked');
    aside.classList.remove('.aside-active');
    aside.classList.add('aside-hidden');
});


function setAsidePosition() {

    if (window.innerWidth > 768) {
        aside.classList.remove('aside-hidden');
        aside.classList.add('aside-active');
        closeNavBtn.classList.remove('display');
        closeNavBtn.classList.add('no-display');  

    } else {
        aside.classList.remove('aside-active');
        aside.classList.add('aside-hidden');
        closeNavBtn.classList.remove('no-display');
        closeNavBtn.classList.add('display');
        console.log('window > 768 adding diosplay tp class list');
    }
}

window.addEventListener('resize', () => {
    console.log('resizing!')
    setAsidePosition();
})



