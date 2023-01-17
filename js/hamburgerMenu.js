const hamburgerBtn = document.querySelector(".hamburger-icon");
const hamburgerMenu = document.querySelector(".hamburger-menu-bg");

let menuVisible = false;

hamburgerBtn.onclick = function(){
    if(menuVisible){
        $(hamburgerBtn).removeClass('open');
        $(hamburgerMenu).addClass("slide-right");
        $(hamburgerMenu).removeClass("slide-left");
        menuVisible = false;
    } else {
        $(hamburgerBtn).addClass('open');
        $(hamburgerMenu).addClass("slide-left");
        $(hamburgerMenu).removeClass("slide-right");
        menuVisible = true;
    }
}