let valid = false
const usernameVal = () => {
    const val = document.getElementById("username").value
    const usernameRegex = /^[a-zA-Z]+$/g

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

const addressVal = () => {
    const val = document.getElementById("address").value
    const addressError = document.getElementById("addressError")
    if(val.length === 0){
        addressError.innerHTML = "Address is empty"
        addressError.style.display = "block"
        valid = false
    }
    else{
        addressError.style.display = "none"
        valid = true
    }
}

const order = () =>{ 
    if(valid){
        alert("order placed")
    }
    else{
        alert("Incorrect data")
    }
}
