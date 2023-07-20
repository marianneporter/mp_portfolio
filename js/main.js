typewriterAnimation();

function typewriterAnimation() {
   /*********************************************************************** */
   /*  Handles initial animation of name role and based in details          */
   /*********************************************************************** */  

    const devName = "Marianne Porter";
    const role = "Junior Web Developer";
    const area = "Based in Norwich, Norfolk";
    const timeInterval = 350;

    typewriterEffect(devName,
                    document.querySelector("header .text-container h1"), timeInterval);

    setTimeout(() => {
        typewriterEffect(role,
                    document.querySelector("header .text-container h2"), timeInterval);
    }, (devName.length * timeInterval + timeInterval) );                 

    setTimeout(() => {
        typewriterEffect(area,
                        document.querySelector("header .text-container h3"), timeInterval);      
    }, (devName.length * timeInterval + role.length * timeInterval + timeInterval * 2));   
    
    /************************************************************************/
    /* function "types" the text for one element                            */
    /* takes in parameters: textToType and element, referring to the        */
    /* text that is being typed and a reference to where to type it         */
    /************************************************************************/
    function typewriterEffect(textToType, element, timeInterval) {

        let currentText = "";    
        for (let letterCount = 1; letterCount <= textToType.length; letterCount++) {
            setTimeout( () => {
                currentText = textToType.slice(0, letterCount); 
                element.textContent = currentText;   
            }, timeInterval * letterCount);       
        }
    }


}





