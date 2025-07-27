
let HemburgerMenu = document.getElementById("HemburgerMenu");
let NavForMobile = document.querySelector(".NavForMobile");

HemburgerMenu.addEventListener('click', function(){
  NavForMobile.style.display = "block";
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

    // Exempel: visa loader i 2 sekunder när sidan laddas
    window.addEventListener('load', () => {
      showLoader();
      setTimeout(hideLoader, 500);
    });


























