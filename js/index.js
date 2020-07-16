
var signUpLink = document.querySelector(".sign-up-link");
var signUp = document.querySelector(".sign-up");
var signIn = document.querySelector(".login");

var backToSignIn = document.querySelector(".back-to-sign-in");

signUpLink.addEventListener("click", function(){
    signIn.classList.add("hide");
    signUp.classList.add("show");
});

backToSignIn.addEventListener("click", function() {
    signUp.classList.add("hide");
    signIn.classList.add("show");
});