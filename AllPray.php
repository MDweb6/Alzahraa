<?php require_once 'prayer_time.php'; ?>




<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bönetider</title>
    <link rel="stylesheet" href="style.css">


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
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!--Noto Kufi Arabic-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">



    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f6f8;
        margin: 0;

    }

    .containerr {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
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
        display: block;
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
        color: #4caf50;
        font-family: "Noto Kufi Arabic", sans-serif;
    }

    .countdownArabic {
        text-align: center;
        font-size: 18px;
        margin: 15px 0;
        font-weight: medium;
        color: #4caf50;
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
        background: #4caf50;
        color: white;
    }

    .next {
        background-color: #e6f0ff;
        font-weight: bold;
    }




    @media (max-width: 768px) {
        .containerr {
            height: 100vh;
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


        <div class="DuaDiv">
            <p style="margin-bottom: 15px;">
                <span class="dagen" style="display: none;"></span>
                Gå till <a href="index.php">startsidan</a>
            </p>
        </div>

    </div>














    <div class="containerr">

        <div class="date">

            <div class="date-box">
                <span class="date-label">Svenskt datum</span>
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
                <th>Bön</th>
                <th class="arabic">الصلاة</th>
                <th>Tid</th>
            </tr>
            <tr data-name="Imsak" data-ar="الإمساك" data-time="<?php echo $imsak; ?>">
                <td>Imsak</td>
                <td class="arabic">الإمساك</td>
                <td><?php echo $imsak; ?></td>
            </tr>
            <tr data-name="Fajr" data-ar="الفجر" data-time="<?php echo $fajer; ?>">
                <td>Fajr</td>
                <td class="arabic">الفجر</td>
                <td><?php echo $fajer; ?></td>
            </tr>
            <tr data-name="Shurooq" data-ar="الشروق" data-time="<?php echo $Shurooq; ?>">
                <td>Shurooq</td>
                <td class="arabic">الشروق</td>
                <td><?php echo $Shurooq; ?></td>
            </tr>
            <tr data-name="Dhuhr" data-ar="الظهر" data-time="<?php echo $dhuhr; ?>">
                <td>Dhuhr</td>
                <td class="arabic">الظهر</td>
                <td><?php echo $dhuhr; ?></td>
            </tr>
            <tr data-name="Ghoroob" data-ar="غروب الشمس" data-time="<?php echo $ghoroob; ?>">
                <td>Ghoroob</td>
                <td class="arabic">غروب الشمس</td>
                <td><?php echo $ghoroob; ?></td>
            </tr>
            <tr data-name="Maghrib" data-ar="المغرب" data-time="<?php echo $maghrib; ?>">
                <td>Maghrib</td>
                <td class="arabic">المغرب</td>
                <td><?php echo $maghrib; ?></td>
            </tr>
            <tr data-name="Midnatt" data-ar="منتصف الليل" data-time="<?php echo $Correct_MN; ?>">
                <td>Midnatt</td>
                <td class="arabic">منتصف الليل</td>
                <td><?php echo $Correct_MN; ?></td>
            </tr>
        </table>
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
    function parseTime(str) {
        let [h, m] = str.split(':');
        let d = new Date();
        d.setHours(h, m, 0, 0);
        return d;
    }

    function updateCountdown() {
        let now = new Date();
        let rows = document.querySelectorAll("#prayerTable tr[data-time]");
        let nextPrayer = null;
        let nextRow = null;
        let nextAr = "";

        rows.forEach(row => {
            let time = parseTime(row.dataset.time);
            if (time > now && !nextPrayer) {
                nextPrayer = time;
                nextRow = row;
                nextAr = row.dataset.ar;
            }
        });

        if (!nextPrayer) {
            let first = rows[0];
            let fajr = parseTime(first.dataset.time);
            fajr.setDate(fajr.getDate() + 1);
            nextPrayer = fajr;
            nextRow = first;
            nextAr = first.dataset.ar;
        }

        rows.forEach(r => r.classList.remove("next"));
        if (nextRow) nextRow.classList.add("next");

        let diff = Math.floor((nextPrayer - now) / 1000);
        let h = Math.floor(diff / 3600);
        let m = Math.floor((diff % 3600) / 60);
        let s = diff % 60;

        document.getElementById("countdown").innerText =
            "Nästa bön om " + h + "h " + m + "m " + s + "s";

        document.getElementById("countdownArabic").innerText =
            "الصلاة القادمة بعد " + h + "س " + m + "د " + s + "ث";


    }

    setInterval(updateCountdown, 1000);
    updateCountdown();
    </script>
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/6a817012d4.js" crossorigin="anonymous"></script>

</body>

</html>