const questions = document.querySelectorAll(".container-question");

questions.forEach(question => {
  const questionArrowBtn = question.querySelector(".arrow-flip");
  const questionContainer = question.querySelector(".question");
  const answerContainer = question.querySelector(".answer");
  
  let questionOpen = false;
  
  questionContainer.onclick = function(){
    if(questionOpen){
        $(questionContainer).removeClass('open');
        $(answerContainer).removeClass('open');
        questionOpen = false;
    } else {
        $(questionContainer).addClass('open');
        $(answerContainer).addClass('open');
        questionOpen = true;
    }
}
});

