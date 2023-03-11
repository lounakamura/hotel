const calendar = document.querySelector(".calendar-container");
let isCalendarDisplayed = false;

window.addEventListener('click', function(e){   
    if(endDateField.contains(e.target) || startDateField.contains(e.target)) {
        displayCalendar();
    } else if ((!calendar.contains(e.target)) && isCalendarDisplayed === true){
        hideCalendar();
    }
});

function displayCalendar() {
    isCalendarDisplayed = true;
    calendar.classList.remove("not-displayed");
}

function hideCalendar() {
    isCalendarDisplayed = false;
    calendar.classList.add("not-displayed");
}


const subtractBtn = document.querySelector('.subtract-btn');
const guestsValue = document.querySelector('.guests-value');
const addBtn = document.querySelector('.add-btn');

const minGuests = parseInt(guestsValue.getAttribute('data-min'));
const maxGuests = parseInt(guestsValue.getAttribute('data-max'));
const stepGuests = parseInt(guestsValue.getAttribute('data-step'));

subtractBtn.onclick = function () {
    if ( parseInt(guestsValue.innerText) - stepGuests >= minGuests ) {
        guestsValue.innerText = parseInt(guestsValue.innerText) - stepGuests;
    }
}

addBtn.onclick = function () {
    if ( parseInt(guestsValue.innerText) + stepGuests <= maxGuests ) {
        guestsValue.innerText = parseInt(guestsValue.innerText) + stepGuests;
    }
}