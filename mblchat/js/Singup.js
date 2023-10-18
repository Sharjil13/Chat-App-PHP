let passwordField = document.querySelector("#password");
let tooglebtn = document.querySelector("#icon");

tooglebtn.addEventListener('click' , ()=>{
    if(passwordField.type == "password"){
        passwordField.type = "text";
        tooglebtn.classList.add("active");
    }
    else{
        passwordField.type = "password";
        tooglebtn.classList.remove("active");
    }
})
