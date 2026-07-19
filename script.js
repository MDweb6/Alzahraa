let HemburgerMenu = document.getElementById("HemburgerMenu");
let CloseMenu = document.getElementById("CloseMenu");
let NavForMobile = document.querySelector(".NavForMobile");

HemburgerMenu.addEventListener('click', function(){
  NavForMobile.style.display = "block";
  setTimeout(() => {
    NavForMobile.classList.add("open");
  }, 10);
});

CloseMenu.addEventListener('click', function(){
  NavForMobile.classList.remove("open");
  NavForMobile.addEventListener('transitionend', function handler(){
    NavForMobile.style.display = "none";
    NavForMobile.removeEventListener('transitionend', handler);
  });
});

let Langu = document.querySelector(".Langu");
let LanguSide = document.querySelector(".LanguSide");

Langu.addEventListener('click', function() {
  // Kolla om border-radius redan är satt
  if (Langu.style.borderRadius === "0px 15px 15px 0px") {
    // Om ja, återställ till standard
    Langu.style.borderRadius = ""; // tar bort inline-stilen
    LanguSide.style.display = "none";
  } else {
    Langu.style.borderRadius = "0px 15px 15px 0px";
    LanguSide.style.display = "flex";
  }
});










let VisaDua = document.querySelectorAll(".VisaDua");

VisaDua.forEach(function(element) {
  element.addEventListener("click", function() {
    // Om du vill navigera till ny sida:
    window.location.href = "Dua.php";
  });
});



let sida1 = document.querySelectorAll(".sida1");
sida1.forEach(function(element) {
  element.addEventListener("click", function() {
    window.location.href = "index.php";
  });
});

let sida2 = document.querySelectorAll(".sida2");

sida2.forEach(function(element) {
  element.addEventListener("click", function(e) {
    e.preventDefault(); // Hindra direkt klick
    sessionStorage.setItem("scrollTo", "OvSec"); // Spara vilket element vi vill scrolla till
    window.location.href = "index.php"; // Skicka till startsidan
  });
});


let sida3 = document.querySelectorAll(".sida3");

sida3.forEach(function(element) {
  element.addEventListener("click", function(e) {
    e.preventDefault(); // Hindra direkt klick
    sessionStorage.setItem("scrollTo", "slutet"); // Spara vilket element vi vill scrolla till
    window.location.href = "index.php"; // Skicka till startsidan
  });
});


let LogoIndex = document.getElementById("LogoIndex");
if (LogoIndex) {
  LogoIndex.addEventListener("click", function() {
    window.location.href = "index.php";  // Navigera till index.php i samma fönster
  });
}






    // Hämta elementen
    const arabic = document.querySelector('.Lang1');
    const swedish = document.querySelector('.Lang2');

    // Lägg till klick-händelser
    arabic.addEventListener('click', () => {
        window.location.href = 'ar/ar.php'; // Skickar till ar.php
    });

    swedish.addEventListener('click', () => {
        window.location.href = 'index.php'; // Skickar till sv.php
        console.log("Funkar");
    });














