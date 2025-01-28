function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
  
  function reveal_late() {
    var reveal_lates = document.querySelectorAll(".reveal_late");
  
    for (var i = 0; i < reveal_lates.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveal_lates[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveal_lates[i].classList.add("active");
      } else {
        reveal_lates[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal_late);