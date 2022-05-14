const pswrdToggler = document.querySelector(".form .field input[type='password']")
toggleBtn = document.querySelector(".form .field i ");

toggleBtn.onclick = () =>{
    if(pswrdToggler.type=="password"){
        pswrdToggler.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        pswrdToggler.type = "password";
        toggleBtn.classList.remove("active");
    }
}