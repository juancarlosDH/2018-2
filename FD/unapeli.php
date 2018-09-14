<?php

$peliculas = [ 'Avatar', 'Rogue One', 'Dragon Ball', 'otra', 'mas' ];

  foreach ($peliculas as $value) {
    ?>
    <div class="items">
      <img class="poster" src="images/avatar.jpg" alt="">
      <div class="detalle">
        <label><?php echo $value; ?> ( 2009 ) </label>
        <label>Ciencia Ficción</label>
        <label>Duración: 2.70 hrs</label>
        <label>Rating: 10</label>
        <label> <img class="ranking" src="images/star.png" alt=""><img class="ranking" src="images/star.png" alt="">              <img class="ranking" src="images/starblack.png" alt=""> </label>
          <label>
          <img class="ranking" src="images/thumb-up-icon.png" alt="">            </label>
                      <img class="taquillera" src="images/ticket.png" alt="">
                      <img class="tresd" src="images/anteojos-3d.png" alt="">
                  </div>
    </div>
  <?php
  }
?>
