

function to_sign_in() {
    var si = document.getElementById("sign-in").style.display = "flex";
    var su = document.getElementById("sign-up").style.display = "none";
    var forgor = document.getElementById("forgor-password").style.display="none";
}
function to_sign_up() {
    var su = document.getElementById("sign-up").style.display = "flex";
    var si = document.getElementById("sign-in").style.display = "none";
    var forgor = document.getElementById("forgor-password").style.display="none";
}
function to_forgor()  {
    var su = document.getElementById("sign-up").style.display = "none";
    var si = document.getElementById("sign-in").style.display = "none";
    var forgor = document.getElementById("forgor-password").style.display="flex";
}



