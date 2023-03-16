const subtractBtn = document.querySelector('.subtract-btn');
const guestsValue = document.querySelector('.guests-value');
const addBtn = document.querySelector('.add-btn');

const minGuests = parseInt(guestsValue.getAttribute('data-min'));
let maxGuests = parseInt(guestsValue.getAttribute('data-max'));
const stepGuests = parseInt(guestsValue.getAttribute('data-step'));

const roomTypeSelect = document.querySelector("#room-type");
const noOfGuestsField = document.querySelector('.no-of-guests');

roomTypeSelect.onchange = function () {
    checkRoomType();
    maxGuests = roomTypes[roomType-1]['guests'];
    guestsValue.setAttribute('data-max', maxGuests);
}

subtractBtn.onclick = function () {
    if ( parseInt(guestsValue.innerText) - stepGuests >= minGuests ) {
        guestsValue.innerText = parseInt(guestsValue.innerText) - stepGuests;
        noOfGuestsField.value = parseInt(guestsValue.innerText);
    }
}

addBtn.onclick = function () {
    if ( parseInt(guestsValue.innerText) + stepGuests <= maxGuests ) {
        guestsValue.innerText = parseInt(guestsValue.innerText) + stepGuests;
        noOfGuestsField.value = parseInt(guestsValue.innerText);
    }
}