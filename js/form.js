const form = document.querySelector('.contact__form');
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

const emailRegex = /^([a-z\d\.-]+)@([a-z\d]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;

[...allInputs].forEach((el)=> {
    el.addEventListener( 'input', (e) => {
        
        let activeFormControl = e.target.parentNode;
        activeFormControl.querySelector('.error-message').innerText = '';
   //     console.log(activeFormControl);

   //     console.log(activeFormControl.querySelector('input'));

        // if (activeFormControl.querySelector('input').value == '') {
        //     activeFormControl.querySelector('.error-message').innerText = '';
        // }
    })
 
})

form.addEventListener('submit', (e) => {

     console.log('form submitted');
     e.preventDefault();

     console.log(firstNameInput);

    let firstNameError = textError(firstNameInput.value, 'First Name');
    if (firstNameError) {
        firstNameErrorMsg.textContent = firstNameError;
    } 

    let lastNameError = textError(lastNameInput.value, 'Last Name');
    if (lastNameError) {
        lastNameErrorMsg.textContent = lastNameError;
    } 

    let subjectError = textError(subjectInput.value, 'Subject');
    if (subjectError) {
        subjectErrorMsg.textContent = subjectError;
    } 
    
    let emailError = textError(emailInput.value, 'Email', 6);
    if (emailError) {
        emailErrorMsg.textContent = emailError;
    } else  {
        console.log(emailRegex.test(emailInput.value))
    }
    
    let msgError = textError(messageInput.value, 'Message', 10);
    if (msgError) {
        messageErrorMsg.textContent = msgError;
    } 
        
    let errorCount = [...allErrors].filter(el => el.innerText != '').length;

   
    console.log(allErrors);
    console.log(errorCount);
})
 
function textError(input, inputField, minLength=2 ) {
    if (!input) {
        return `Please enter your ${inputField}`;
    }
    if (input.length < minLength) {
        return `${inputField} must be at least ${minLength} characters in length`;
    }
    return null;
}




