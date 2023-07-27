/************************************************************/
/*  set up initial state of slick for large screens         */
/************************************************************/
if (window.innerWidth > 767) {
    console.log('setting slick for large screens');
    setSlickForLargeScreens();
}

/************************************************************************/
/* set up slick for use on larger screens needs to be used on both      */ 
/*  entry to page and resize                                            */ 
/********************************************************************** */
function setSlickForLargeScreens() {
    console.log('adding slick for large screens');
    $('.coding-slides').slick({
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1       
    })
}

/************************************************************************/
/* remove slick from smaller screens - used on resize                   */ 
/********************************************************************** */
function setNoSlickForSmallScreens() {
    console.log('removing slick for small screens');
    $('.coding-slides').slick('unslick');
}

/**************************************************************************/
/* event listener for resize.  adds/removes slick if necessary            */
/************************************************************************ */
window.addEventListener("resize", () => {   
   let slickElement = document.querySelector('.coding-slides');
   if ( window.innerWidth < 768 && slickElement.classList.contains("slick-slider")) {
        setNoSlickForSmallScreens();
   } else if (window.innerWidth >= 768 && !slickElement.classList.contains("slick-slider")) {
        setSlickForLargeScreens();
   }
});






// $('.responsive').slick('unslick'),
//     responsive: [
//       {
//         breakpoint: 768,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: true
//         }
//       },

//       // You can unslick at a given breakpoint now by adding:
//       // settings: "unslick"
//       // instead of a settings object
//     ]
//   });









// if (window.innerWidth > 767) {
//     $('.coding-slides').slick({
//         dots: true,
//         infinite: true,  
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: true,
//         responsive: [
//           {
//             breakpoint: 768,
//             settings: {
//               slidesToShow: 1,
//               slidesToScroll: 1,
//               infinite: true,
//               dots: true,
//               arrows: false
//             }
//           }  
//         ]
//       });
                  
    
// }

