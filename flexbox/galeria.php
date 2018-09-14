<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: flex;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}


</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Responsive Image Grid</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<!-- Photo Grid -->
<div class="row">
  <div class="column">
    <img src="https://www.w3schools.com/w3images/wedding.jpg">
    <img src="https://www.w3schools.com/w3images/rocks.jpg">
    <img src="https://www.w3schools.com/w3images/falls2.jpg">
    <img src="https://www.w3schools.com/w3images/paris.jpg">
    <img src="https://www.w3schools.com/w3images/nature.jpg">
    <img src="https://www.w3schools.com/w3images/mist.jpg">
    <img src="https://www.w3schools.com/w3images/paris.jpg">
  </div>
  <div class="column">
    <img src="https://www.w3schools.com/w3images/underwater.jpg">
    <img src="https://www.w3schools.com/w3images/ocean.jpg">
    <img src="https://www.w3schools.com/w3images/wedding.jpg">
    <img src="https://www.w3schools.com/w3images/mountainskies.jpg">
    <img src="https://www.w3schools.com/w3images/rocks.jpg">
    <img src="https://www.w3schools.com/w3images/underwater.jpg">
  </div>
  <div class="column">
    <img src="https://www.w3schools.com/w3images/wedding.jpg">
    <img src="https://www.w3schools.com/w3images/rocks.jpg">
    <img src="https://www.w3schools.com/w3images/falls2.jpg">
    <img src="https://www.w3schools.com/w3images/paris.jpg">
    <img src="https://www.w3schools.com/w3images/nature.jpg">
    <img src="https://www.w3schools.com/w3images/mist.jpg">
    <img src="https://www.w3schools.com/w3images/paris.jpg">
  </div>
  <div class="column">
    <img src="https://www.w3schools.com/w3images/underwater.jpg">
    <img src="https://www.w3schools.com/w3images/ocean.jpg">
    <img src="https://www.w3schools.com/w3images/wedding.jpg">
    <img src="https://www.w3schools.com/w3images/mountainskies.jpg">
    <img src="https://www.w3schools.com/w3images/rocks.jpg">
    <img src="https://www.w3schools.com/w3images/underwater.jpg">
  </div>
</div>

</body>
</html>
