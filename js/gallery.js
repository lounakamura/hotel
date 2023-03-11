const gallery = document.querySelector('.image-gallery');
const photos = Array.from(gallery.querySelectorAll('img'));

const displayedImgContainer = document.querySelector('.displayed-image');
const displayedImg = displayedImgContainer.querySelector('img');
const closeButton = displayedImgContainer.querySelector('.cross-icon');
const previousButton = displayedImgContainer.querySelector('.arrow-left');
const nextButton = displayedImgContainer.querySelector('.arrow-right');

let currentPhotoIndex = 0;
galleryVisible = false;

photos.forEach(picture => {
  picture.onmousedown = function() {
    if(event.button === 0) {
      curentPhotoIndex = photos.indexOf(this);
      $(displayedImg).attr('src', '');
      photoforDisplay = ($(picture).attr('src')).replace('_min','');
      $(displayedImg).attr('src', photoforDisplay); 
      $(displayedImgContainer).removeClass('hidden');
      galleryVisible = true;
      $('body').css('overflow-y', 'hidden');
    }
  }
});

closeButton.onmousedown = function() {
  if(event.button === 0){
    $(displayedImgContainer).addClass('hidden');
    galleryVisible = false;
    $('body').css('overflow-y', 'visible');
  }
}

previousButton.onmousedown = function(event) {
  if(event.button === 0){
    galleryPrevious();
  }
}

nextButton.onmousedown = function(event) {
  if(event.button === 0){
    galleryNext();
  }
}
      
document.onkeydown = function(event) {
  if(galleryVisible === true) {
    if(event.keyCode == 37) {
      galleryPrevious();
    }
    else if(event.keyCode == 39) {
      galleryNext();
    }
  }
}

function galleryPrevious() {
  if(currentPhotoIndex>0){
    currentPhotoIndex -= 1;
    $(displayedImg).attr('src', '');
    photoforDisplay = ($(photos[currentPhotoIndex]).attr('src')).replace('_min','');
    $(displayedImg).attr('src', photoforDisplay);
  }
}

function galleryNext() {
  if(currentPhotoIndex<photos.length-1){
    currentPhotoIndex += 1;
    $(displayedImg).attr('src', '');
    photoforDisplay = ($(photos[currentPhotoIndex]).attr('src')).replace('_min','');
    $(displayedImg).attr('src', photoforDisplay); 
  }
}