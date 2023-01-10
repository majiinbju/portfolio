// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
  
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
  
// Fade In
  window.onload = fadeIn;
  function fadeIn() {
  let fade = document.getElementById("body");
  let opacity = 0;
  let intervalID = setInterval(function() {
            if (opacity < 1) {
                      opacity = opacity + 0.1
                      fade.style.opacity = opacity;
                  } else {
                      clearInterval(intervalID);
                  }
              }, 50);
          }
  