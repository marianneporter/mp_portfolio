const form = document.querySelector('.contact__form');
const popup = document.querySelector('.popup');

const popupClose = document.querySelector('.contact .popup .popup-text .close-btn')
const popupHeading = document.querySelector('.popup .popup-text h1');
const popupMessage = document.querySelector('.popup .popup-text h3');

const nameInput = document.querySelector('.name-input');
const companyNameInput = document.querySelector('.company-name-input');
const emailInput =document.querySelector('.email-input');
const subjectInput = document.querySelector('.subject-input');
const messageInput = document.querySelector('.message-input');

const allInputs = document.getElementsByClassName('form-input');
const allErrors = document.getElementsByClassName('error-message');
const nameErrorMsg = document.querySelector('.name-err-msg');
const companyNameErrorMsg = document.querySelector('.company-name-err-msg');
const subjectErrorMsg = document.querySelector('.subject-err-msg');
const emailErrorMsg = document.querySelector('.email-err-msg');
const messageErrorMsg = document.querySelector('.message-err-msg');

const emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

/**************************************************************************************/
/*  event listeners                                                                   */
/**************************************************************************************/

[...allInputs].forEach((el)=> {
    el.addEventListener( 'input', (e) => {        
        let activeFormControl = e.target.parentNode;
        activeFormControl.querySelector('.error-message').innerText = '';
        activeFormControl.querySelector('.form-input').classList.remove('input-error');       
    }) 
});

popupClose.addEventListener('click', () => {   
    popup.style.zIndex = -1;
    popup.style.display = "none";
    popup.style.classList.remove('success-popup');
    popup.style.classList.remove('error-popup');
})

form.addEventListener('submit', (e) => {  
    e.preventDefault();   
    handleFormSubmit(); 
})

/******************************************************************************************/
/* processing functions                                                                   */
/******************************************************************************************/ 

// 
function handleFormSubmit() {

    jsValidation();
  
    // check for errors found by js 
    let errorCount = [...allErrors].filter(el => el.innerText != '').length;

    // if js errors found return from function
    if (errorCount != 0) {
        return;
    }
    // valid data from js validation continue with AJAX submit
  
    let dataString = $('#contact-form').serialize();

    $.ajax({
        type: "POST",
        url: "form-process.php",
        cache: false,
        data: dataString,
        success:  function(response)
        {           
            let data = JSON.parse(response);

            if (data.statusMessage == "OK") {
                handleSuccessfulServerSubmit();
            } else if (data.statusMessage == "Validation_Errors") {              
                displayServerErrorMessages(data.errors);
            } else {
                // problem with sending email
                handleServerError();
            }
        },
        error:  function(error)
        {             
            handleServerError();
        }
    });     
 
}

function jsValidation() {

    let nameError = textError(nameInput.value, 'Name');
    if (nameError) {
        nameErrorMsg.textContent = nameError;
        nameInput.classList.add('input-error');
    } 

    let subjectError = textError(subjectInput.value, 'Subject');
    if (subjectError) {
        subjectErrorMsg.textContent = subjectError;
        subjectInput.classList.add('input-error');
    } 
    
    let emailError = textError(emailInput.value, 'Email', 6);
    if (emailError) {
        emailErrorMsg.textContent = emailError;
        emailInput.classList.add('input-error');
    } else  {
        if(!emailRegex.test(emailInput.value)) {
            emailErrorMsg.textContent = 'Please enter a valid email';
            emailInput.classList.add('input-error');
        }
    }
    
    let msgError = textError(messageInput.value, 'Message', 10);
    if (msgError) {
        messageErrorMsg.textContent = msgError;
        messageInput.classList.add('input-error');
    } 
}


function handleSuccessfulServerSubmit() {
    popup.classList.add("success-popup");  
    popup.style.display = "flex";
    popup.style.zIndex = 9;
    popupHeading.textContent = "Thank you!";
    popupMessage.textContent = "Your message has been sent successfully";
    resetContactForm();
}

function displayServerErrorMessages(errors) {
  
    if (errors.name) {
        nameErrorMsg.textContent = errors.name;
        nameInput.classList.add('input-error');
    };

    if (errors.companyName) {
        companyNameErrorMsg.textContent = errors.companyName;
        companyNameInput.classList.add('input-error');        
    }

    if (errors.email) {
        emailErrorMsg.textContent = errors.email;
        emailInput.classList.add('input-error');       
    } 

    if (errors.subject) {
        subjectErrorMsg.textContent = errors.subject;
        subjectInput.classList.add('input-error');       
    }

    if (errors.message) {
        messageErrorMsg.textContent = errors.message;
        messageInput.classList.add('input-error');    
    }
}

function handleServerError() {

    popup.classList.add("error-popup"); 
    popup.style.display = "flex";  
    popup.style.zIndex = 9;
    popupHeading.textContent = "There was a problem sending your message";
    popupMessage.textContent 
         = "Please try later or email Marianne at marianneporter17@gmail.com";
    resetContactForm();
}

function resetContactForm() {
    nameInput.value = '';
    companyNameInput.value ='';
    emailInput.value = '';
    subjectInput.value = '';
    messageInput.value = '';    
}
 
function textError(input, inputField, minLength=2 ) {
    if (!input) {
        return `Please enter your ${inputField}`;
    }
    if (input.length < minLength) {
        return `${inputField} must be at least ${minLength} characters in length`;
    }
    return null;
};

