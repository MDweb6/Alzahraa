<?php

require_once 'prayer_time.php';



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


?>