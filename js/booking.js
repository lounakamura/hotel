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