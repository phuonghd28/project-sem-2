//////////////////////////////////////////////////HEADER/////////////////////////////////////////////////////////
// Khi người dùng quận trang thì gọi đến hàm myFunction
window.onscroll = function () {
    myFunction()
};
// Get the header
var header = document.getElementById("myHeader");
// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

////////////////////////////////////////////////////// FORM DANG NHAP///////////////////////////////////////////

var LoginForm = document.getElementById("log-form");
var RegForm = document.getElementById("reg-form");
var Indicator = document.getElementById("indicator");
var FormAccount = document.getElementById("form-account");

function register() {
    RegForm.style.transform = "translateX(-500px)";
    LoginForm.style.transform = "translateX(-500px)";
    Indicator.style.transform = "translateX(236px)";
    FormAccount.style.height = "590px";
    RegForm.style.opacity = "0";
    RegForm.style.opacity = "1";
}

function login() {
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(83px)";
    FormAccount.style.height = "365px"
    LoginForm.style.opacity = "0";
    LoginForm.style.opacity = "1";
}
