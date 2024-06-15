
// setInterval(() => {
var screen = window.innerHeight;
document.getElementById("display").style.height = screen + "px";
// }, 10);
var element = document.body;
function myFunction() {
   element.classList.toggle("dark-mode");
   document.getElementById("sunny").style.display = "block";
   document.getElementById("moon").style.display = "none";
}
function myFunction1() {
   element.classList.toggle("dark-mode");
   document.getElementById("sunny").style.display = "none";
   document.getElementById("moon").style.display = "block";
}

function navbar() {
   document.getElementById("navbar").style.width = "60%";
}
function navbaroff() {
   document.getElementById("navbar").style.width = "0%";
}
function check() {
   checkBox = document.getElementById('check-skill');
   // Check if the element is selected/checked
   if (checkBox.checked) {
      // Respond to the result
      document.getElementById("skill-show").style.display = "none"
      document.getElementById("tools-show").style.display = "block"
      setTimeout(() => {
         document.getElementById("tools-show").style.opacity = "100%"
         document.getElementById("skill-show").style.opacity = "0%"
      }, 10);
   }
   else {
      document.getElementById("tools-show").style.display = "none"
      document.getElementById("skill-show").style.display = "block"
      setTimeout(() => {
         document.getElementById("skill-show").style.opacity = "100%"
         document.getElementById("tools-show").style.opacity = "0%"
      }, 10);
   }
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.documentElement.scrollTop > 50) {
    document.getElementById("top").classList.add("bg");
  } else {
   document.getElementById("top").classList.remove("bg");
  }
}