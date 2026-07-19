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


</head>
<body>
    

    <header>
        <div class="head1">
            <h1 id="LogoIndex">Alzahraa Förening</h1>
        </div>

        <div class="head2">
            <nav>
                <ul>
                    <li><a href="index.php" class="sida1">Hem</a></li>
                    <li><a href="index.php" class="sida2">Bönetider</a></li>
                    <li><a href="index.php" class="sida3">Kontakta</a></li>
                </ul>
            </nav>
        </div>

        <div class="HeadBtn">
            <button class="VisaDua" style="display: none;">Dagens Dua`a</button>
            <p>Gå till <a href="index.php">startsidan</a></p>

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
                    <li><a href="index.php" class="sida1">Hem</a></li>
                    <li><a href="index.php" class="sida2">Övrigt</a></li>
                    <li><a href="index.php" class="sida3">Kontakta</a></li>
                    </ul>
                </nav>
            </div>

            <div class="DuaDiv">
                <p style="margin-bottom: 15px;">
                    <span class="dagen" style="display: none;"></span>
                    Gå till <a href="index.php">startsidan</a>
                </p>
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

</section> 



<section class="DuaHog">


    <section class="DuaBox">
        <h2 class="DuaRubrik" style="font-family: 'Noto Naskh Arabic', sans-serif;"> dua </h2>
        <span class="DuaSpan" style="font-family: 'Noto Naskh Arabic', sans-serif;"></span>
    </section>

</section>


       <footer class="foten">
        <h2>Kontakta oss via:</h2>
        <a href="mailto:alzahraa.forening@yahoo.se">alzahraa.forening@yahoo.se</a>
     </footer>
        <div id="slutet" class="slutet">
            <span>
                <p>&copy; 2025 Alzahraa.</p>
            </span>
        </div>


     <div class="loader-modal" id="loaderModal">
        <div class="spinner"></div>
     </div>


    <script src="https://kit.fontawesome.com/6a817012d4.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="via.js"></script>
</body>
</html>