<!DOCTYPE html>
<html>
  <head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="description" content="Fuel Quantity Required and Fuel Cost Calculator for a Car Trip">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Emma Janani">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Fuel Quantity Required and Fuel Cost Calculator for a Car </title>
    <!-- To use Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" /> 
  </head>
  <center>
  <body>
    <script src="./js/script.js"></script>
    <?php echo "<h1>Fuel Quantity Required and Fuel  
      <br>
      Cost Calculator for a Car Trip</h1>"; ?>
    <?php echo "<h5>How often do you use a car to go somewhere? Probably a lot! Here are some examples of car trips I make!</h5>"; ?>
    
    <!-- MDL Icon List -->
    <style>
    .demo-list-icon {
      width: 300px;
    }
    </style>
    
    <ul class="demo-list-icon mdl-list">
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">star</i>
        <font face="Georgia">Driving to school everyday
    </span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">star</i>
        <font face="Georgia">Driving to piano lessons on Thursdays
      </span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">star</i>
        <font face="Georgia">Driving to the mall to go shopping
      </span>
      </li>
      <li class="mdl-list__item">
        <span class="mdl-list__item-primary-content">
        <i class="material-icons mdl-list__item-icon">star</i>
        <font face="Georgia">Road trips in the Summer!
      </span>
      </li>
    </ul>

    <!-- Driving GIF -->
    <img src="./images/carvideo.gif" width="800">
    <?php echo "<h5>Have you ever thought about how fuel is required every time you use your car, 
      <br>
      <br>
      or how much that fuel costs? Use the slider to indicate how expensive you think it is!</h5>"; ?>
    <!-- Slider with Starting Value -->
    <p style="width:800px">
    <input class="mdl-slider mdl-js-slider" type="range"
    id="s1" min="0" max="10" value="4" step="2">
    </p>
    <br>
    <!-- Formula Image -->
      <center><img src="./images/formulas.png" width="800"></center>
      <br>
    <!-- Form and User Input -->    
      <table>
        <tr>
          <td style="width:30%"><img src="./images/caricon.png" alt="Car" width="50%" height="auto"/></td>
    			<td style="width:50%"><h4>Enter the following information about the car trip:</h4>
    			<form action="javascript:calcFuel()">
    				<label for="distance">The distance of the trip (km):</label>
    				<input type="number" step="any" min="0" max="2000" id="distance" placeholder="Distance (km)"><br><br>
    				<label for="efficiency">The fuel efficiency (L/100km):</label>
    				<input type="number" step="any" min="0" id="efficiency" placeholder="Efficiency (L/100km)"><br><br>             
    				<label for="price">The price of fuel ($/L):</label>
    				<input type="number" step="0.01" min="0" id="price" placeholder="Price ($/L)"><br><br>
    				<input type="submit" value="Calculate"><br><br><br>
          </form></td>
          <td style="width:8%"><img src="./images/gettingfuel.png" alt="Car" width="100%" height="auto"/></td>
        </tr>
      </table>
  	<!-- Create a space where the user information will be displayed -->
  	<div id="display-results">
    	<div id="fuel-required"></div>
  		<div id="fuel-cost"></div>
  	</div>
    <br>
    <!-- Image -->
    <img src="./images/cartrip.jpg" width="500"></center>
    <br>
    <br>
  </body>
  </center>
</html>
