<?php

	// get the user input
  $tripDistance = floatval($_POST['distance']);
  $fuelEfficiency = floatval($_POST['efficiency']);
  $fuelPrice = floatval($_POST['price']);

  // calculate the fuel required and the fuel cost
  $fuelRequired = $tripDistance * ($fuelEfficiency / 100);
  $fuelCost = $tripDistance * ($fuelEfficiency / 100) * $fuelPrice;
  $requiredRounded = number_format($fuelRequired, 2);
  $costRounded = number_format($fuelCost, 2);

  // if tripDistance is more than 200km, display "Have a safe trip!"
  if ($tripDistance > 200) {

    echo "$requiredRounded" . " litres of fuel are required for the trip, so the fuel cost is $" . "$costRounded" . ".";
    echo ' Have a safe trip!'; 

}

  else {

    echo "$requiredRounded" . " litres of fuel are required for the trip, so the fuel cost is $" . "$costRounded" . ".";
}
    
?>