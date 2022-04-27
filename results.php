<?php

	// get the user input
  $tripDistance = floatval($_POST['distance']);
  $fuelEfficiency = floatval($_POST['efficiency']);
  $fuelPrice = floatval($_POST['price']);

  // calculate the fuel required and the fuel cost
  $fuelRequired = $tripDistance * ($fuelEfficiency / 100);
  $fuelCost = $tripDistance * ($fuelEfficiency / 100) * $fuelPrice;

  // if tripDistance is more than 200km, display "Bon Voyage and Safe Travels!"
  if ($tripDistance > 200) {

    echo "$fuelRequired" . " litres of fuel are required for the trip, so the fuel cost is " . " $fuelCost" . ".";
    echo ' Bon Voyage and Safe Travels!'; 

}

  else {

    echo "$fuelRequired" . "litres of fuel are required for the trip, so the fuel cost is " . " $fuelCost" . ".";
}
    
?>