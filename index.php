<?php

require_once 'prayer_time.php';

?>



<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Alzahraa Förening</title>
<link rel="icon" href="...">

<!--Fonts-->


<!--Teko-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">

<!--QuickSand-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<!--Poppins-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<!--Noto Kufi Arabic-->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">





<style>
    .containerr {
        max-width: 1500px;
        margin: 20px auto;
        background: #F5F5DC;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    .date {
        text-align: center;
        margin-bottom: 10px;
        color: #555;
    }

    .arabic {
        direction: rtl;
        font-family: "Noto Kufi Arabic", sans-serif;
        font-size: 0.9rem;
    }
    .Engg {
        font-family: "Noto Kufi Arabic", sans-serif;
        font-size: 0.9rem;
    }
    .date-label {
    display: block;
    font-size: 1rem;
    color: black;

    }
    .countdown {
        text-align: center;
        font-size: 18px;
        margin: 15px 0;
        font-weight: medium;
        color: #A0C878;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .countdownArabic {
        text-align: center;
        font-size: 18px;
        margin: 15px 0;
        font-weight: medium;
        color: #A0C878;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .next-name {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        margin-top: 5px;
    }

    .next-name span {
        display: block;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    th {
        background: #337e35;
        color: white;
    }
    td{
        background: #fff;
    }
    .next {
        background-color: #e6f0ff;
        font-weight: bold;
    }




    @media (max-width: 768px) {
        .containerr {
            height: 95vh;
            width: 90%;
        }

        .date {
            text-align: center;
            margin-bottom: 10px;
            color: #555;
        }

        .prayer { font-size:16px; } 
    }
</style>

</head>
<body>
    

    <header>
        <div class="head1">
            <h1 id="LogoIndex">Alzahraa Förening</h1>
        </div>

        <div class="head2">
            <nav>
                <ul>
                    <li><a class="sida1 active">Hem</a></li>
                    <li><a href="#AllBon">Bönetider</a></li>
                    <li><a class="sida3">Kontakta</a></li>
                </ul>
            </nav>
        </div>

        <div class="HeadBtn">
            <button class="VisaDua">Dagens Dua`a</button>
        </div>

        <div class="head3">
            <i id="HemburgerMenu" class="fa-solid fa-bars-staggered"></i>
        </div>
    </header>



    <div class="NavForMobile">
        <div class="NavForMobileHead">
            <i id="CloseMenu" class="fa-regular fa-circle-xmark"></i>
        </div>

        <div class="Naven">
            <div class="NavBoxen">


                <nav>
                    <ul>
                    <li><a class="sida1 active">Hem</a></li>
                    <li><a href="#AllBon">Bönetider</a></li>
                    <li><a class="sida3">Kontakta</a></li>
                    </ul>
                </nav>
            </div>

            <div class="DuaDiv">
                <p>
                    Dagens dua <span class="dagen"></span>
                </p>

                <button class="VisaDua">Visa</button>
            </div>
        </div>

    </div>
    


    <section class="DateTime">

    <div class="prayer-section">

    <div class="timeline">
      <div class="line-bg"></div>

      <!-- Markers + Labels -->
      <div class="prayer-marker imsak" id="marker-imsak"></div>
      <div class="prayer-time imsak"><?php echo "$imsak\n"; ?></div>
      <div class="prayer-label imsak">Imsak <span>(الإمساك)</span></div>

      <div class="prayer-marker fajr" id="marker-fajr"></div>
      <div class="prayer-time fajr"><?php echo "$fajer\n"; ?></div>
      <div class="prayer-label fajr">Fajr <span>(الفجر)</span></div>

      <div class="prayer-marker shurooq" id="marker-shurooq"></div>
      <div class="prayer-time shurooq"><?php echo "$Shurooq\n"; ?></div>
      <div class="prayer-label shurooq">Shurooq <span>(الشروق)</span></div>

      <div class="prayer-marker dhuhr" id="marker-dhuhr"></div>
      <div class="prayer-time dhuhr"><?php echo "$dhuhr\n"; ?></div>
      <div class="prayer-label dhuhr">Dhuhr <span>(الظهر)</span></div>

      <div class="prayer-marker ghoroob" id="marker-ghoroob"></div>
      <div class="prayer-time ghoroob"><?php echo "$ghoroob\n"; ?></div>
      <div class="prayer-label ghoroob">Ghoroob <span>(غروب الشمس)</span></div>

      <div class="prayer-marker maghrib" id="marker-maghrib"></div>
      <div class="prayer-time maghrib"><?php echo "$maghrib\n"; ?></div>
      <div class="prayer-label maghrib">Maghrib <span>(المغرب)</span></div>

      <div class="prayer-marker midnatt" id="marker-midnatt"></div>
      <div class="prayer-time midnatt"><?php echo "$Correct_MN\n"; ?></div>
      <div class="prayer-label midnatt">Midnatt <span>(منتصف الليل)</span></div>
    </div>


  <div class="AllPray" > <h5><a href="#AllBon">Alla bönetider</a></h5></div>
 

    </section>

    <section class="SprakSkrift">
    
        <div class="LanguSide">
        
            <div class="Lang1">
                <span>Arabiska</span> <img src="images/arabic.png" alt="">
            </div>
            <div class="Lang2">
                <span>Svenska</span> <img src="images/swedish.png" alt="">
            </div>
        </div>
        
        <div class="Langu">
            <i class="fa-solid fa-language"></i>
        </div>


    </section>


    <section class="OmOss">
        <div class="bilden">
            <h2>Alzahraa Förening</h2> 
        </div>

        <div class="OmTexten">
            <h2>Vilka vi är</h2>

            <p>
                
                Alzahraa Förening är en ideell, <strong>religiös</strong>, <strong>kulturell</strong> och <strong>demokratisk</strong> förening i den mån denna distinktion kan tillämpas på en förening och är förenlig med svensk lag. Alzahraa har sitt säte i Borås, och har som officiellt språk <strong>svenska och arabiska</strong>.

                Syftet med föreningen är att presentera den <strong>islamiska traditionen</strong>, kulturen och de olika traditioner inom olika grupper, verka för vänskap, skapande av ömsesidig informationsgivning mellan svenska folket och olika nationaliteter vad beträffar deras kulturhistoriska, religiösa, samt andra ungdoms aktiviteter
                         <br>   
                <strong>Föreningen är partipolitiskt obunden</strong>.

            </p>
        </div>
    </section>

    <section class="DuaReklam" id="DuaReklam">
        <div class="DuaBox2">

            <div class="DuaImg">
                <!-- <img src="images/DuaImg.png" alt="Dagens Dua"> -->
                 <span>🤲</span>
            </div>

            <div class="DuaTxt">
                <h2>Dagens Dua</h2>
                <p>
                    Här kan du se dagens dua, Varje dag presenteras en ny dua dvs (Måndag,Tisdag,Onsdag, Torsdag,Fredag,Lördag,Söndag) Klicka på knappen nedan för att se dagens dua och lära dig mer om dess betydelse och användning.
                </p>

                <button onclick="window.location.href='Dua.php'">
                    Visa dagens dua
                </button>

        </div>
    </section>




<div class="containerr" id="AllBon">

        <div class="date">

            <div class="date-box">
                <span class="date-label Engg">Svenskt datum</span>
                <div class="date-main">
                    <?php echo "$vDagSv $DateDayM $MonthM $YearM"; ?>
                </div>
            </div>

            <div class="date-box">
                <span class="date-label arabic">التاريخ الهجري</span>
                <div class="date-hijri arabic">
                    <?php echo $hijriDateFull; ?>
                </div>
            </div>

        </div>

        <div class="countdown" id="countdown"></div>
        <div class="countdownArabic" id="countdownArabic"></div>

        <table id="prayerTable">
            <tr>
                <th class="Engg">Bön</th>
                <th class="arabic">الصلاة</th>
                <th class="Engg">Tid</th>
            </tr>
            <tr data-name="Imsak" data-ar="الإمساك" data-time="<?php echo $imsak; ?>">
                <td class="Engg">Imsak</td>
                <td class="arabic">الإمساك</td>
                <td class="Engg"><?php echo $imsak; ?></td>
            </tr>
            <tr data-name="Fajr" data-ar="الفجر" data-time="<?php echo $fajer; ?>">
                <td class="Engg">Fajr</td>
                <td class="arabic">الفجر</td>
                <td class="Engg"><?php echo $fajer; ?></td>
            </tr>
            <tr data-name="Shurooq" data-ar="الشروق" data-time="<?php echo $Shurooq; ?>">
                <td class="Engg">Shurooq</td>
                <td class="arabic">الشروق</td>
                <td class="Engg"><?php echo $Shurooq; ?></td>
            </tr>
            <tr data-name="Dhuhr" data-ar="الظهر" data-time="<?php echo $dhuhr; ?>">
                <td class="Engg">Dhuhr</td>
                <td class="arabic">الظهر</td>
                <td class="Engg"><?php echo $dhuhr; ?></td>
            </tr>
            <tr data-name="Ghoroob" data-ar="غروب الشمس" data-time="<?php echo $ghoroob; ?>">
                <td class="Engg">Ghoroob</td>
                <td class="arabic">غروب الشمس</td>
                <td class="Engg"><?php echo $ghoroob; ?></td>
            </tr>
            <tr data-name="Maghrib" data-ar="المغرب" data-time="<?php echo $maghrib; ?>">
                <td class="Engg">Maghrib</td>
                <td class="arabic">المغرب</td>
                <td class="Engg"><?php echo $maghrib; ?></td>
            </tr>
            <tr data-name="Midnatt" data-ar="منتصف الليل" data-time="<?php echo $Correct_MN; ?>">
                <td class="Engg">Midnatt</td>
                <td class="arabic">منتصف الليل</td>
                <td class="Engg"><?php echo $Correct_MN; ?></td>
            </tr>
        </table>

</div>

    <script>
function parseTime(str) {
    let [h, m] = str.split(':');
    let d = new Date();
    d.setHours(parseInt(h), parseInt(m), 0, 0);
    return d;
}

function updateCountdown() {
    let now = new Date();

    let allowedPrayers = ["Fajr", "Dhuhr", "Maghrib"];

    let rows = document.querySelectorAll("#prayerTable tr[data-time]");
    let nextPrayer = null;
    let nextRow = null;
    let nextName = "";
    let nextAr = "";

    rows.forEach(row => {
        let name = row.dataset.name;

        if (!allowedPrayers.includes(name)) return;

        let time = parseTime(row.dataset.time);

        if (time > now && !nextPrayer) {
            nextPrayer = time;
            nextRow = row;
            nextName = name;
            nextAr = row.dataset.ar;
        }
    });

    // Om inga kvar idag → Fajr imorgon
    if (!nextPrayer) {
        let fajrRow = document.querySelector('tr[data-name="Fajr"]');

        if (!fajrRow) return; // säkerhet

        let fajr = parseTime(fajrRow.dataset.time);
        fajr.setDate(fajr.getDate() + 1);

        nextPrayer = fajr;
        nextRow = fajrRow;
        nextName = "Fajr";
        nextAr = fajrRow.dataset.ar;
    }

    // Markera
    rows.forEach(r => r.classList.remove("next"));
    if (nextRow) nextRow.classList.add("next");

    let diff = Math.floor((nextPrayer - now) / 1000);

    let h = Math.floor(diff / 3600);
    let m = Math.floor((diff % 3600) / 60);
    let s = diff % 60;

    // Svenska
    document.getElementById("countdown").innerText =
        nextName + " bön om " + h + "h " + m + "m " + s + "s";

    // Arabiska
    document.getElementById("countdownArabic").innerText =
        "صلاة " + nextAr + " بعد " + h + "س " + m + "د " + s + "ث";
}

// STARTA scriptet
setInterval(updateCountdown, 1000);
updateCountdown();
    </script>














    <section class="VikCon">

    <div class="bontideralla">
        <div class="hed"><h2>Nuvarande Program</h2></div>
        
        <div class="Vikss">

            <div class="Vikbox">
                <h3>Tisdag</h3>
                <p>
                <span style="font-weight: bold;">Innehåll:</span>
                Varje tisdag kl. 19:00 är centret öppet och erbjuder ett religiöst program med fokus på gemenskap
                 och andlig utveckling. Programmet inkluderar recitation av Dua al-Tawassul samt religiösa 
                 föreläsningar som belyser islamisk tro, tradition och vardagliga frågor.
                </p>
            </div>

            <div class="Vikbox">
                <h3>Torsdag</h3>
                <p>
                <span style="font-weight: bold;">Innehåll:</span>
                Varje torsdag kl. 19:00 hålls ett religiöst program med särskilt fokus på tradition och historia.
                 Kvällen inkluderar Ziyarat Imam Hussein (frid vare med honom) samt recitation av Dua Kumayl, 
                 följt av religiösa föreläsningar.
                </p>
            </div>

            <div class="Vikbox">
                <h3>Fredag</h3>
                <p>
                <span style="font-weight: bold;">Innehåll:</span>
                Varje fredag hålls fredagsbönen i centret enligt aktuella tider. Bönen är en central del av den
                 islamiska traditionen och samlar besökare i en gemensam stund av tillbedjan, 
                 reflektion och gemenskap. 
                </p>
            </div>

        </div>
        

    </div>
    </section>


<!--      
    <section class="OvSec" id="OvSec">
        <div class="h2Head">
            <h2>Övrigt</h2>
        </div>
        <div class="Container">

            <div class="box">
                <img src="images/defrino-maasy-0TwA0UDKHl8-unsplash.jpg">
                <div class="boxTxt">
                    <h3><a href="#">Islam</a></h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eius, autem repellat totam rerum libero quasi animi quae corporis eos sed ipsam. Accusamus cumque excepturi, error vero optio inventore nisi repudiandae est laboriosam impedit neque.
                    </p>
                </div>
            </div>

            <div class="box">
                <img src="images/imam.jpg">
                <div class="boxTxt">
                    <h3><a href="">Imammer</a></h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eius, autem repellat totam rerum libero quasi animi quae corporis eos sed ipsam. Accusamus cumque excepturi, error vero optio inventore nisi repudiandae est laboriosam impedit neque.
                    </p>
                </div>
            </div>

            <div class="box">
                <img src="images/syed-aoun-abbas-v__B86PhdM0-unsplash.jpg">
                <div class="boxTxt">
                    <h3><a href="#">Bön</a></h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eius, autem repellat totam rerum libero quasi animi quae corporis eos sed ipsam. Accusamus cumque excepturi, error vero optio inventore nisi repudiandae est laboriosam impedit neque.
                    </p>
                </div>
            </div>

        </div>
    </section>


-->

     <div class="loader-modal" id="loaderModal">
        <div class="spinner"></div>
     </div>







     <footer>
        <h2>Kontakta oss via:</h2>
        <a href="mailto:alzahraa.forening@yahoo.se">alzahraa.forening@yahoo.se</a>
     </footer>
        <div id="slutet" class="slutet">
            <span>
                <p>&copy; 2025 Alzahraa.</a></p>
            </span>
        </div>







     <script>
        window.addEventListener("DOMContentLoaded", function () {
  const scrollToId = sessionStorage.getItem("scrollTo");

  if (scrollToId) {
    const target = document.getElementById(scrollToId);
    if (target) {
      target.scrollIntoView({ behavior: "smooth" });
    }
    sessionStorage.removeItem("scrollTo");
  }
});

     </script>
    <script src="https://kit.fontawesome.com/6a817012d4.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="via.js"></script>
</body>
</html>