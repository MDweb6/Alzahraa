
let HemburgerMenu = document.getElementById("HemburgerMenu");
let CloseMenu = document.getElementById("CloseMenu");
let NavForMobile = document.querySelector(".NavForMobile");

HemburgerMenu.addEventListener('click', function(){
  NavForMobile.style.display = "block";
})
CloseMenu.addEventListener('click', function(){
  NavForMobile.style.display = "none";
})


fetch('https://api.aladhan.com/v1/timingsByCity?city=Boras&country=Sweden&method=8')
  .then(response => response.json())
  .then(data => {
    const timings = data.data.timings;
    document.querySelector('.prayer-time.fajr').textContent = timings.Fajr;
    document.querySelector('.prayer-time.dhuhr').textContent = timings.Dhuhr;
    document.querySelector('.prayer-time.asr').textContent = timings.Asr;
    document.querySelector('.prayer-time.maghrib').textContent = timings.Maghrib;
    document.querySelector('.prayer-time.isha').textContent = timings.Isha;
  })
  .catch(err => console.error('Error fetching prayer times:', err));



      function showLoader() {
      document.getElementById('loaderModal').classList.add('active');
    }

    function hideLoader() {
      document.getElementById('loaderModal').classList.remove('active');
    }

    window.addEventListener('load', () => {
      showLoader();
      setTimeout(hideLoader, 600);
    });



let sida1 = document.querySelector(".sida1");
if (sida1) {
  sida1.addEventListener("click", function() {
    window.location.href = "index.html";  // Navigera till index.html i samma fönster
  });
}

let sida2 = document.querySelector(".sida2");
if (sida2) {
  sida2.addEventListener("click", function() {
    window.location.href = "sida2.html";  // Navigera till sida2.html i samma fönster
  });
}



let LogoIndex = document.getElementById("LogoIndex");
if (sida1) {
  LogoIndex.addEventListener("click", function() {
    window.location.href = "index.html";  // Navigera till index.html i samma fönster
  });
}





















