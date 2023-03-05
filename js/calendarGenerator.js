const monthYearTag = document.querySelector(".month-year");
const monthNav = document.querySelectorAll(".month-navigation div");
const daysTag = document.querySelector(".days");
const startDateField = document.querySelector("#start-date");
const endDateField = document.querySelector("#end-date");

let date = new Date();
let currYear = date.getFullYear();
let currMonth = date.getMonth();

let selectedDay;
let selectedDays = [];
let firstDay;
let lastDay;
let selectingLast = false;

const months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

function generateCalendar() {
  let firstDayOfMonth = new Date(currYear, currMonth, 0).getDay();
  let lastDateOfMonth = new Date(currYear, currMonth + 1, 0).getDate();
  let lastDayOfMonth = new Date(currYear, currMonth, lastDateOfMonth - 1).getDay();
  let lastDateOfLastMonth = new Date(currYear, currMonth, 0).getDate();
  let liTag = "";
  let availability = "";
  
  for(let i = firstDayOfMonth; i > 0; i--) {
    liTag += `<li class="inactive">${lastDateOfLastMonth - i + 1}</li>`;
  }
  
  let dataId = 0;
  for(let i = 1; i <= lastDateOfMonth; i++) {
    if(i <= date.getDate() && currMonth === new Date().getMonth() && currYear === new Date().getFullYear()) {
      availability = "inactive";
      dataId = "";
    } else { //here it will be checking if a room of type is available or not in displayed day
      availability = "available";
      dataId++;
    }
    liTag += `<li class="${availability}" data-id="${dataId-1}">${i}</li>`;
  }

  for(let i = lastDayOfMonth; i < 6; i++) {
    liTag += `<li class="inactive">${i - lastDayOfMonth + 1}</li>`;
  }
  
  monthYearTag.innerHTML = `${months[currMonth]} ${currYear}`;
  daysTag.innerHTML = liTag;

  if(currMonth != new Date().getMonth() || currYear != new Date().getFullYear()){
    monthNav[0].classList.remove("inactive");
  } else {
    monthNav[0].classList.add("inactive");
  }

  let availableDays = document.querySelectorAll("li.available");
  availableDays.forEach(day => {
    day.addEventListener("click", function() {
      if(!selectingLast){
        if(firstDay){
          resetSelectedDays();
          firstDay.classList.remove("selected");
        }
        firstDay = day;
        firstDay.classList.add("selected");
        selectingLast = true;
        setStartDate();
        endDate = startDate;
      } else {
        if(lastDay){
          lastDay.classList.remove("selected");
        }
        lastDay = day;
        lastDay.classList.add("selected");
        selectingLast = false;
        fillInbetweenDays();
        setEndDate();
        setStartDate();
      }
      startDateField.setAttribute("value", startDate);
      endDateField.setAttribute("value", endDate);
    });

    function fillInbetweenDays() {
      let startDayId = parseInt(firstDay.getAttribute('data-id'));
      let endDayId = parseInt(lastDay.getAttribute('data-id'));
      if(endDayId < startDayId){
        let temp = endDayId;
        endDayId = startDayId;
        startDayId = temp;
        
        temp = lastDay;
        lastDay = firstDay;
        firstDay = temp;
      }
      if(endDayId > startDayId){
        for(let i = startDayId+1; i < endDayId; i++){
          selectedDays.push(availableDays[i]);
          availableDays[i].classList.add("selected");
        }
      }
    }

    function resetSelectedDays() {
      selectedDays.forEach(day => {
        day.classList.remove("selected");
      });
      lastDay.classList.remove("selected");
      selectedDays = [];
    }

    function setStartDate() {
      startDate = ("0"+firstDay.innerHTML).slice(-2)+"/"+("0"+(currMonth+1)).slice(-2)+"/"+currYear;
    }

    function setEndDate() {
      endDate = ("0"+lastDay.innerHTML).slice(-2)+"/"+("0"+(currMonth+1)).slice(-2)+"/"+currYear;
    }
  });
}

monthNav.forEach(navButton => {
  navButton.addEventListener("click", function() {
      if(navButton.className === "arrow-right"){
        currMonth+=1;
      } else {
        if(currMonth != new Date().getMonth() || currYear != new Date().getFullYear()){
          currMonth-=1;
        }
      }
      if(currMonth < 0 || currMonth > 11) {
        date = new Date(currYear, currMonth);
        currYear = date.getFullYear();
        currMonth = date.getMonth();
      } else {
        date = new Date();
      }
      generateCalendar();
  });
});

generateCalendar();