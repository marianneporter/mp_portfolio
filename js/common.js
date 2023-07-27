/**************************************************************/
/* stop all transitions when page first loaded and on page    */
/* resize to maintain consistent layout                       */
/**************************************************************/    

let transitionStopTimer;

window.addEventListener("DOMContentLoaded", () => {       
    document.body.classList.add("transition-stopper");
    clearTimeout(transitionStopTimer);
    transitionStopTimer = setTimeout(() => {
    document.body.classList.remove("transition-stopper"); 
  }, 400);
});

window.addEventListener("resize", () => {   
    document.body.classList.add("transition-stopper");
    clearTimeout(transitionStopTimer);
    transitionStopTimer = setTimeout(() => {
    document.body.classList.remove("transition-stopper"); 
  }, 400);
});

