<?php

define("FACTOR", 9 / 5);
define("OFFSET", 32);
echo "Enter temperature value:";
$temperature = (float) readLine();

echo "Convert to (1: Farenheit , 2: Celsius):";
$choice = (int) readLine();

switch ($choice) {
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo "Temperature in farenheit: $result";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result";
        break;
    default:
        echo "Invalid choice.";
        break;
}
