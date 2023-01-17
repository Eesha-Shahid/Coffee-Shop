
    const table = document.getElementById("tbl-products")
    const form = document.getElementById("form-product")


    const displayTable = () => {
        table.style.display = 'block'
        form.style.display = 'none'
    }

    const displayForm = () => {
        form.style.display = 'block'
        table.style.display = 'none'
    }

let valid = false

const pdtImageVal = () => {
    const val = document.getElementById("picture")
const picError = document.getElementById("pictureError")
    console.log(val.files.length);
    if(val.files.length === 0 ){
        picError.innerHTML= "No image selected"
        picError.style.display = "block";
        valid = false
    }
    else{
        picError.style.display = "none";
        valid = true
    }
}

const pdtNameVal = () => {
    const val = document.getElementById("pdtName").value
    const usernameRegex = /^[a-zA-Z ]+$/g
    const pdtNameError = document.getElementById("pdtNameError")

    if(val.length === 0) {
        pdtNameError.innerHTML= "product name is required"
        pdtNameError.style.display = "block";
        valid = false
    }
    else if(val.length < 5){
        pdtNameError.innerHTML= "The length should be greater than 5"
        pdtNameError.style.display = "block";
        valid = false
    }
    else if(val.length >= 25){
        pdtNameError.innerHTML= "The length should be less than 25"
        pdtNameError.style.display = "block";
        valid = false
    }
    else if(!usernameRegex.test(val)){
        pdtNameError.innerHTML= "product name should only contain letters"
        pdtNameError.style.display = "block";
        valid = false
    }
    else{
        pdtNameError.style.display = "none";
        valid = true
    }
}

const pdtCatVal = () => {
    const val = document.getElementById("category").value
    const catError = document.getElementById("catError")

    if(val.length === 0 ){
        catError.innerHTML= "Please select a category"
        catError.style.display = "block";
        valid = false
    }
    else{
        catError.style.display = "none";
        valid = true
    }
}

const descVal = () => {
    const val = document.getElementById("pdtDesc").value
    const descError = document.getElementById("descError")
    
    if(val.length === 0){
        descError.innerHTML= "Add Product Description"
        descError.style.display = "block";
        valid = false
    }
    else{
        descError.style.display = "none";
        valid = true
    }
}

const priceVal = () =>{
    const num = "^[0-9]"
    const val = document.getElementById("pdtPrice").value
    const priceError = document.getElementById("priceError")

    if(val.length === 0 ){
        priceError.innerHTML = "Add Product Price"
        priceError.style.display = "block"
        valid = false
    }
    else if(!val.match(num)){
        priceError.innerHTML = "phone Number only contains digits"
        priceError.style.display = "block"
        valid = false
    }
    else if(val < 0){
        priceError.innerHTML = "Product Price should not be less than 0"
        priceError.style.display = "block"
        valid = false
    }
    else{
        priceError.style.display = "none"
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

const formSubmit = document.getElementById("addProduct");
formSubmit.addEventListener('submit', signUp);