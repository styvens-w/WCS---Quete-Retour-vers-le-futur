<?php
$presentTime = new DateTime();
$destinationTime = new DateTime('2024-01-01 12:00:00');

$presentTimeFormatted = $presentTime->format('M d Y h i A');
$destinationTimeFormatted = $destinationTime->format('M d Y h i A');

[$presentMonth, $presentDay, $presentYear, $presentHour, $presentMin, $presentAmPm] = explode(' ', $presentTimeFormatted);
[$destinationMonth, $destinationDay, $destinationYear, $destinationHour, $destinationMin, $destinationAmPm] = explode(' ', $destinationTimeFormatted);

echo "DESTINATION TIME<br>";
echo "Month: $destinationMonth<br>";
echo "Day: $destinationDay<br>";
echo "Year: $destinationYear<br>";
echo "Hour: $destinationHour<br>";
echo "Min: $destinationMin<br>";
echo "$destinationAmPm\<br><br>";

echo "PRESENT TIME<br>";
echo "Month: $presentMonth<br>";
echo "Day: $presentDay<br>";
echo "Year: $presentYear<br>";
echo "Hour: $presentHour<br>";
echo "Min: $presentMin<br>";
echo "$presentAmPm<br><br>";


$interval = $presentTime->diff($destinationTime);

echo "TIME DIFFERENCE<br>";
echo $interval->format('%y years, %m months, %d days, %h hours, %i minutes') . "<br>";

$totalMinutes = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;
$fuelRequired = ceil($totalMinutes / 10000);

echo "<br>TOTAL MINUTES: $totalMinutes minutes<br>";
echo "FUEL REQUIRED: $fuelRequired liters<br>";