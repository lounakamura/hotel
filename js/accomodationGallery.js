const galleries = document.querySelectorAll('.gallery');

galleries.forEach(gallery => {
  const arrowPrev = gallery.querySelector('.arrow-left');
  const arrowNext = gallery.querySelector('.arrow-right');
  
  const photos = Array.from(gallery.querySelectorAll('.gallery-photo'));
  let displayedPhotoIndex = 0;
  
  arrowPrev.onclick = function(){
    if(displayedPhotoIndex>0){
      displayedPhotoIndex--;
    } else {
      displayedPhotoIndex = photos.length-1;
    }
    photos[displayedPhotoIndex].scrollIntoView({
      behavior: 'smooth',
      block: 'nearest', 
      inline: 'start'
    });
  }
  
  arrowNext.onclick = function(){
    if(displayedPhotoIndex<photos.length-1){
      displayedPhotoIndex++;
    } else {
      displayedPhotoIndex = 0;
    }
    photos[displayedPhotoIndex].scrollIntoView({
      behavior: 'smooth',
      block: 'nearest', 
      inline: 'start'
    });
  }
});