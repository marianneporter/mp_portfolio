// prevent all animations if window is in the process of resizing or initialisation
// not complete
let resizeTimer;
document.body.classList.add("resize-transition-stopper");
document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.remove("resize-transition-stopper"); 
});


window.addEventListener("resize", () => {   
    document.body.classList.add("resize-transition-stopper");
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
    document.body.classList.remove("resize-transition-stopper"); 
  }, 400);
});

