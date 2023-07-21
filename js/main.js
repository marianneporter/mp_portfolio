const mobileNavIcon = document.querySelector('.mobile-nav-icon');
const aside = document.querySelector('.aside');


/********************************************************************/
/*   Event Listeners for menu functionality                         */ 
/*********************************************************************/
mobileNavIcon.addEventListener('click', () => {
    console.log('mobile nav clicked');
  //  aside.classList.add('sm-aside-active');

})


function setAsidePosition() {

    if (window.innerWidth > 768) {
        aside.classList.remove('aside-hidden');
        aside.classList.add('aside-active')
    } else {
        aside.classList.remove('aside-active');
        aside.classList.add('aside-hidden');
    }
}

window.addEventListener('resize', () => {
    console.log('resizing!')
    setAsidePosition();
})



