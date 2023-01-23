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

const currentLocation =  window.location.pathname.split('/').pop();
const hamburgerOptions = Array.from(document.querySelectorAll(".hamburger-menu-option"));

window.onload = function() {
    if(currentLocation === ''){
        $(hamburgerOptions[0]).addClass('chosen');
    } else {
        hamburgerOptions.forEach(hamburgerOption => {
            if($(hamburgerOption).attr('href') === currentLocation){
                $(hamburgerOption).addClass('chosen');
            }
        });
    }
}