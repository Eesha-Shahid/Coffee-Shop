let valid = false
const usernameVal = () => {
    const val = document.getElementById("username").value
    const usernameRegex = /^[a-zA-Z ]+$/g

    const userError = document.getElementById("usernameError")
    if(val.length === 0) {
        userError.innerHTML= "The name field is empty!"
        userError.style.display = "block";
        valid = false
    }
    else if(val.length < 5){
        userError.innerHTML= "The length should be greater than 5"
        userError.style.display = "block";
        valid = false
    }
    else if(val.length >= 25){
        userError.innerHTML= "The length should be less than 25"
        userError.style.display = "block";
        valid = false
    }
    else if(!usernameRegex.test(val)){
        userError.innerHTML= "name should contain only letters"
        userError.style.display = "block";
        valid = false
    }
    else{
        userError.style.display = "none";
        valid = true
    }
}

const emailVal = () => {
    const emailValidation = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    const val = document.getElementById("email").value
    const emailError = document.getElementById("emailError")

    if(val.length === 0 ){
        emailError.innerHTML = "Email field is empty"
        emailError.style.display = "block";
        valid = false
    }
    else if(!emailValidation.test(val)){
        emailError.innerHTML = "Email is invalid"
        emailError.style.display = "block";
        valid = false
    }
    else{
        emailError.style.display = "none";
        valid = true

    }
}

const numberVal = () => {
    const num = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im
    const val = document.getElementById("number").value
    const numberError = document.getElementById("numberError")

    if(val.length === 0 ){
        numberError.innerHTML = "Number field is empty"
        numberError.style.display = "block"
        valid = false
    }
    else if(val.length !== 11){
        numberError.innerHTML = "The number should have 11 numbers"
        numberError.style.display = "block"
        valid = false
    }
    else if(!val.match(num)){
        numberError.innerHTML = "phone Number only contains digits"
        numberError.style.display = "block"
        valid = false
    }
    else{
        numberError.style.display = "none"
        valid = true
    }
}


const passwordVal = () => {
    const lowerCaseLetters = /[a-z]/g;
    const upperCaseLetters = /[A-Z]/g;
    const numbers = /[0-9]/g;


    const val = document.getElementById("password").value
    const passError = document.getElementById("passwordError")
    if(val.length === 0 ){
        passError.innerHTML= "The password field is empty!"
        passError.style.display = "block";
        valid = false
    }
    else if(val.length <  8 ){
        passError.innerHTML= "The password should be greater than 8"
        passError.style.display = "block";
        valid = false
    }
    else if(val.length >  24 ){
        passError.innerHTML= "The password should be less than 25"
        passError.style.display = "block";
        valid = false
    }
    else if(!upperCaseLetters.test(val)){
        passError.innerHTML= "password must contain capital letter"
        passError.style.display = "block";
        valid = false
    }
    else if(!lowerCaseLetters.test(val)){
        passError.innerHTML= "password must contain a lower letter"
        passError.style.display = "block";
        valid = false
    }
    else if(!numbers.test(val)){
        passError.innerHTML= "password must contain a number"
        passError.style.display = "block";
        valid = false
    }
    else{
        passError.style.display = "none";
        valid = true
    }
}

const confirmPassVal = () => {
    const val = document.getElementById("confirmPassword").value
    const pass = document.getElementById("password").value
    const confirmPassError = document.getElementById("confirmPassError")
    if(val !== pass){
        confirmPassError.innerHTML= "password does not match"
        confirmPassError.style.display = "block";
        valid = false
    }
    else{
        confirmPassError.style.display = "none";
        valid = true
    }
}

const signUp = (e) => {
    e.preventDefault()
    if(valid){
        alert("account created!");
    }
    else{
        alert("please fill the correct data");
    }
}

const form = document.getElementById("form");
form.addEventListener('submit', signUp);