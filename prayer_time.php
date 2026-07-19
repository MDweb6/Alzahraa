<?php
// ============================================
// PRAYER TIME - RENA VARIABLER
// ============================================

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// ============================================
// DEBUG... Scrolla längst ner.
// ============================================
/*

Efter require prayer_time


// Hijri datum från Sistani
echo $hijriDateFull;           // الإثنين ١٣ المحرم الحرام ١٤٤٨
echo $hijriDateWithoutWeekday; // ١٣ المحرم الحرام ١٤٤٨
echo $hijriWeekday;            // الإثنين
echo $hijriDayOnly;            // ١٣

// Svenska veckodagar
echo $vDagSv;                  // Onsdag
echo $vDagAr;                  // الأربعاء



echo "=== HIJRI DATUM ===\n";
echo "Veckodag (från Sistani): $hijriWeekday\n";
echo "Dag (med veckodag): $DateDayH\n";
echo "Dag (bara siffror): $hijriDayOnly\n";
echo "Månad: $MonthH\n";
echo "År (med هـ): $YearH\n";
echo "År (bara siffror): $hijriYearOnly\n";
echo "Fullt (med veckodag): $hijriDateFull\n";
echo "Fullt (utan veckodag): $hijriDateWithoutWeekday\n";

echo "\n=== SVENSKA DAGAR ===\n";
echo "Veckodag (sv tid): $vDagSv\n";
echo "Veckodag (arabiska): $vDagAr\n";
echo "Dag: $DateDayM\n";
echo "Månad: $MonthM\n";
echo "År: $YearM\n";

echo "\n=== BÖNETIDER ===\n";
echo "Imsak: $imsak\n";
echo "Fajr: $fajer\n";
echo "Shurooq: $Shurooq\n";
echo "Dhuhr: $dhuhr\n";
echo "Asr: $asr\n";
echo "Ghoroob: $ghoroob\n";
echo "Maghrib: $maghrib\n";
echo "Isha: $isha\n";
echo "Midnatt: $Correct_MN\n";


*/
// ============================================
// 1. HÄMTA HIJRI DATUM FRÅN SISTANI.ORG
// ============================================
$url = 'https://www.sistani.org/';
$html = @file_get_contents($url);

if ($html) {
    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($html);

    $homeDate = $dom->getElementById('home-date');

    if ($homeDate) {
        $part1 = trim($homeDate->getElementsByTagName('span')->item(0)->nodeValue);
        $firstDash = strpos($part1, '-');
        $secondDash = strrpos($part1, '-');
        
        // Exempel: "الإثنين ١٣ - المحرم الحرام - ١٤٤٨هـ"
        $DateDayH = trim(substr($part1, 0, $firstDash));           // "الإثنين ١٣"
        $MonthH = trim(substr($part1, $firstDash + 1, $secondDash - $firstDash - 1)); // "المحرم الحرام"
        $YearH = trim(substr($part1, $secondDash + 1));            // "١٤٤٨هـ"
        
        // ============================================
        // EXTRAHERA VECKODAG OCH DAG (SIFFROR)
        // ============================================
        
        // Dela upp "الإثنين ١٣" i två delar
        $hijriParts = explode(' ', $DateDayH);
        
        // Veckodag = första delen: "الإثنين"
        $hijriWeekday = $hijriParts[0] ?? '';
        
        // Dag (siffror) = sista delen: "١٣"
        $hijriDayOnly = end($hijriParts);
        
        // Rensa bort "هـ" från år
        $hijriYearOnly = str_replace('هـ', '', $YearH);
        $hijriYearOnly = trim($hijriYearOnly);
        
        // Bygg Hijri-datum med veckodag + dag + månad + år
        $hijriDateFull = $hijriWeekday . ' ' . $hijriDayOnly . ' ' . $MonthH . ' ' . $hijriYearOnly;
        
        // Bygg Hijri-datum utan veckodag: "١٣ المحرم الحرام ١٤٤٨"
        $hijriDateWithoutWeekday = $hijriDayOnly . ' ' . $MonthH . ' ' . $hijriYearOnly;
        
    } else {
        // Fallback
        $DateDayH = 'الإثنين ١٣';
        $MonthH = 'المحرم الحرام';
        $YearH = '١٤٤٨هـ';
        $hijriWeekday = 'الإثنين';
        $hijriDayOnly = '١٣';
        $hijriYearOnly = '١٤٤٨';
        $hijriDateFull = 'الإثنين ١٣ المحرم الحرام ١٤٤٨';
        $hijriDateWithoutWeekday = '١٣ المحرم الحرام ١٤٤٨';
    }
} else {
    // Fallback om URL inte nås
    $DateDayH = 'الإثنين ١٣';
    $MonthH = 'المحرم الحرام';
    $YearH = '١٤٤٨هـ';
    $hijriWeekday = 'الإثنين';
    $hijriDayOnly = '١٣';
    $hijriYearOnly = '١٤٤٨';
    $hijriDateFull = 'الإثنين ١٣ المحرم الحرام ١٤٤٨';
    $hijriDateWithoutWeekday = '١٣ المحرم الحرام ١٤٤٨';
}

// ============================================
// 2. BERÄKNA BÖNETIDER MED PRAYTIME
// ============================================
require_once $_SERVER['DOCUMENT_ROOT'] . '/pt_new/PrayTime.php';

$prayTime = new PrayTime();
$prayTime->setCalcMethod($prayTime->Tehran);

$latitude = 57.72;
$longitude = 12.94;
$timeZone = 2;

$today = getdate();
$year = $today['year'];
$month = $today['mon'];
$day = $today['mday'];

$prayerTimes = $prayTime->getDatePrayerTimes($year, $month, $day, $latitude, $longitude, $timeZone);






// ============================================
// 3. BERÄKNA IMSAK OCH FAJR
// ============================================

// Hämta Dhuhr-tiden från PrayTime
$dhuhrTime = $prayerTimes[2];

// Kontrollera om det är sommartid (1 april - 30 september)
$todayDate = date('Y-m-d');
$summerStart = date('Y') . '-04-01';
$summerEnd = date('Y') . '-09-30';

if ($todayDate >= $summerStart && $todayDate <= $summerEnd) {
    // ============================================
    // SOMMARTID: Fajr = Dhuhr + 12 timmar 30 minuter
    // ============================================
    $fajer = date('H:i', strtotime('+12 hours +30 minutes', strtotime($dhuhrTime)));
    
    // Imsak = Fajr - 15 minuter
    $imsak = date('H:i', strtotime('-15 minutes', strtotime($fajer)));
    
} else {
    // ============================================
    // VINTERTID: Använd standard Fajr från PrayTime
    // ============================================
    $fajer = date('H:i', strtotime($prayerTimes[0]));
    
    // Imsak = Fajr - 15 minuter
    $imsak = date('H:i', strtotime('-15 minutes', strtotime($fajer)));
}




// 5. BERÄKNA MIDNATT
// ============================================
$maghrib_today = $prayerTimes[5];
$fajr_today = $prayerTimes[0];

$maghrib_timestamp = strtotime('2024-04-01 ' . $maghrib_today . ':00');
$fajr_timestamp = strtotime('2024-04-02 ' . $fajr_today . ':00');
$diff = abs($fajr_timestamp - $maghrib_timestamp);
$midnight_timestamp = $maghrib_timestamp + ($diff / 2);
$Correct_MN = date('H:i', $midnight_timestamp);

// ============================================
// 6. SÄTT VARIABLER FRÅN PRAYER TIMES
// ============================================
$Shurooq = $prayerTimes[1];
$dhuhr = $prayerTimes[2];
$asr = $prayerTimes[3];
$ghoroob = $prayerTimes[4];
$maghrib = $prayerTimes[5];
$isha = $prayerTimes[6];

// ============================================
// 7. DAGAR OCH MÅNADER - SVENSKA
// ============================================
$DateDayM = date('d');
$YearM = date('Y');
$manenDidit = date('m');
$dayDigit = date('w');

// Svenska veckodagar
$dag_sv = ['Söndag', 'Måndag', 'Tisdag', 'Onsdag', 'Torsdag', 'Fredag', 'Lördag'];
$vDagSv = $dag_sv[$dayDigit] ?? 'Onsdag';

// Arabiska veckodagar (från Sistani eller egen)
$dag_ar = [
    0 => 'الأحد',
    1 => 'الإثنين',
    2 => 'الثلاثاء',
    3 => 'الأربعاء',
    4 => 'الخميس',
    5 => 'الجمعة',
    6 => 'السبت'
];
$vDagAr = $dag_ar[$dayDigit] ?? 'الأربعاء';

// Arabiska månader (kort version)
$manad_ar_kort = [
    1 => 'محرم',
    2 => 'صفر',
    3 => 'ربيع الأول',
    4 => 'ربيع الثاني',
    5 => 'جمادي الأول',
    6 => 'جمادي الثاني',
    7 => 'رجب',
    8 => 'شعبان',
    9 => 'رمضان',
    10 => 'شوال',
    11 => 'ذو القعدة',
    12 => 'ذو الحجة'
];

// Svenska månader (arabisk translitteration)
$manad_sv = [
1 => 'januari',
2 => 'februari',
3 => 'mars',
4 => 'april',
5 => 'maj',
6 => 'juni',
7 => 'juli',
8 => 'augusti',
9 => 'september',
10 => 'oktober',
11 => 'november',
12 => 'december'
];

$MonthM = $manad_sv[(int)$manenDidit] ?? 'غير معروف';
$dennaManad = $MonthM;

// ============================================
// 8. EXPORTERA ALLA VARIABLER
// ============================================

// Hijri datum (från Sistani)
$DateDayH = $DateDayH ?? 'الإثنين ١٣';
$MonthH = $MonthH ?? 'المحرم الحرام';
$YearH = $YearH ?? '١٤٤٨هـ';
$hijriWeekday = $hijriWeekday ?? 'الإثنين';
$hijriDayOnly = $hijriDayOnly ?? '١٣';
$hijriYearOnly = $hijriYearOnly ?? '١٤٤٨';
$hijriDateFull = $hijriDateFull ?? 'الإثنين ١٣ المحرم الحرام ١٤٤٨';
$hijriDateWithoutWeekday = $hijriDateWithoutWeekday ?? '١٣ المحرم الحرام ١٤٤٨';

// Gregorianskt datum
$DateDayM = $DateDayM ?? '1';
$MonthM = $MonthM ?? 'غير معروف';
$YearM = $YearM ?? date('Y');
$dennaManad = $dennaManad ?? 'غير معروف';
$arenDidit = $YearM;

// Veckodagar
$vDagSv = $vDagSv ?? 'Onsdag';
$vDagAr = $vDagAr ?? 'الأربعاء';

// För index.php kompatibilitet
$DateDayAr = $vDagAr;
$MonthAr = $MonthH;
$YearAr = $hijriYearOnly;
$dennaManad = $MonthM;

// Bönetider
$imsak = $imsak ?? '00:00';
$fajer = $fajer ?? '00:00';
$Shurooq = $Shurooq ?? '00:00';
$dhuhr = $dhuhr ?? '00:00';
$asr = $asr ?? '00:00';
$ghoroob = $ghoroob ?? '00:00';
$maghrib = $maghrib ?? '00:00';
$isha = $isha ?? '00:00';
$Correct_MN = $Correct_MN ?? '00:00';

// PrayerTimes array (för kompatibilitet)
$prayerTimes = [
    $fajer,      // 0 - Fajr
    $Shurooq,    // 1 - Shurooq
    $dhuhr,      // 2 - Dhuhr
    $asr,        // 3 - Asr
    $ghoroob,    // 4 - Ghoroob
    $maghrib,    // 5 - Maghrib
    $isha        // 6 - Isha
];

// ============================================
// 9. DEBUG (TA BORT I PRODUKTION)
// ============================================
/*
echo "=== HIJRI DATUM ===\n";
echo "Veckodag (från Sistani): $hijriWeekday\n";
echo "Dag (med veckodag): $DateDayH\n";
echo "Dag (bara siffror): $hijriDayOnly\n";
echo "Månad: $MonthH\n";
echo "År (med هـ): $YearH\n";
echo "År (bara siffror): $hijriYearOnly\n";
echo "Fullt (med veckodag): $hijriDateFull\n";
echo "Fullt (utan veckodag): $hijriDateWithoutWeekday\n";

echo "\n=== SVENSKA DAGAR ===\n";
echo "Veckodag (sv tid): $vDagSv\n";
echo "Veckodag (arabiska): $vDagAr\n";
echo "Dag: $DateDayM\n";
echo "Månad: $MonthM\n";
echo "År: $YearM\n";

echo "\n=== BÖNETIDER ===\n";
echo "Imsak: $imsak\n";
echo "Fajr: $fajer\n";
echo "Shurooq: $Shurooq\n";
echo "Dhuhr: $dhuhr\n";
echo "Asr: $asr\n";
echo "Ghoroob: $ghoroob\n";
echo "Maghrib: $maghrib\n";
echo "Isha: $isha\n";
echo "Midnatt: $Correct_MN\n";
*/
?>