const form = document.querySelector('.contact__form');
const popup = document.querySelector('.popup');

const popupClose = document.querySelector('.contact .popup .popup-text .close-btn')
const popupHeading = document.querySelector('.popup .popup-text h1');
const popupMessage = document.querySelector('.popup .popup-text h3');

const firstNameInput = document.querySelector('.first-name-input');
const lastNameInput = document.querySelector('.last-name-input');
const emailInput =document.querySelector('.email-input');
const subjectInput = document.querySelector('.subject-input');
const messageInput = document.querySelector('.message-input');

const allInputs = document.getElementsByClassName('form-input');
const allErrors = document.getElementsByClassName('error-message');
const firstNameErrorMsg = document.querySelector('.first-name-err-msg');
const lastNameErrorMsg = document.querySelector('.last-name-err-msg');
const subjectErrorMsg = document.querySelector('.subject-err-msg');
const emailErrorMsg = document.querySelector('.email-err-msg');
const messageErrorMsg = document.querySelector('.message-err-msg');

const emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

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

    // let firstNameError = textError(firstNameInput.value, 'First Name');
    // if (firstNameError) {
    //     firstNameErrorMsg.textContent = firstNameError;
    //     firstNameInput.classList.add('input-error');
    // } 

    // let lastNameError = textError(lastNameInput.value, 'Last Name', 2);
    // if (lastNameError) {
    //     lastNameErrorMsg.textContent = lastNameError;
    //     lastNameInput.classList.add('input-error');
    // } 

    // let subjectError = textError(subjectInput.value, 'Subject');
    // if (subjectError) {
    //     subjectErrorMsg.textContent = subjectError;
    //     subjectInput.classList.add('input-error');
    // } 
    
    // let emailError = textError(emailInput.value, 'Email', 6);
    // if (emailError) {
    //     emailErrorMsg.textContent = emailError;
    //     emailInput.classList.add('input-error');
    // } else  {
    //     if(!emailRegex.test(emailInput.value)) {
    //         emailErrorMsg.textContent = 'Please enter a valid email';
    //         emailInput.classList.add('input-error');
    //     }
    // }
    
    // let msgError = textError(messageInput.value, 'Message', 10);
    // if (msgError) {
    //     messageErrorMsg.textContent = msgError;
    //     messageInput.classList.add('input-error');
    // } 
        
    let errorCount = [...allErrors].filter(el => el.innerText != '').length;

    if (errorCount == 0) {   
        let dataString = $('#contact-form').serialize();

        $.ajax({
            type: "POST",
            url: "form-process.php",
            data: dataString,
            success:  function(response)
            {  

                 let data = JSON.parse(response);
              
                if (data.statusMessage == "OK") {
                    handleSuccessfulSubmit();
                } else if (data.statusMessage == "Validation_Errors") {              
                    displayErrorMessages(data.errors);
                } else {
                    handleServerError();
                }
            },
            error:  function(error)
            {    
                handleServerError();
            }
        });     
    }
})


function handleSuccessfulSubmit() {
    popup.classList.add("success-popup");  
    popup.style.display = "flex";
    popup.style.zIndex = 9;
    popupHeading.textContent = "Thank you!";
    popupMessage.textContent = "Your message has been received successfully";
    resetContactForm();
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
    firstNameInput.value = '';
    lastNameInput.value ='';
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

function displayErrorMessages(errors) {
  
    if (errors.firstName) {
        firstNameErrorMsg.textContent = errors.firstName;
        firstNameInput.classList.add('input-error');
    };

    if (errors.lastName) {
        lastNameErrorMsg.textContent = errors.lastName;
        lastNameInput.classList.add('input-error');        
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