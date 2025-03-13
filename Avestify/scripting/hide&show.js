let password = document.getElementById("Password");
let passwordHide = document.getElementById("hide");
let passwordShow = document.getElementById("show");


function showHide(){

    if(password.type === "password"){
        password.setAttribute('type','text');
        passwordHide.style.display = "none";
    }else{
        password.setAttribute('type','password');
        passwordHide.style.display = "flex";
    }
}