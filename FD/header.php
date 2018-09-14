<p class="centrar">
  <a href="index.html">
    <img id="logo" src="<?php echo $logo ?>" alt="logo Digital Movies">
  </a>
</p>

<?php echo "<h1 class=\"centrar\">{$titulo}</h1>" ?>

<div id="redes">
  <ul>
    <li><a href="http://facebook.com" target="_blank"><img src="images/fb.png" alt=""></a></li>
    <li><a href="http://instagram.com" target="_blank"><img src="images/inst.png" alt=""></a></li>
    <li><a href="http://twiter.com" target="_blank"><img src="images/tw.png" alt=""></a></li>
    <li><a href="http://snapchat.com" target="_blank"><img src="images/snp.png" alt=""></a></li>
  </ul>
</div>

<div>
  <ul>
    <?php
      foreach ($generos as $genero) {
        //echo '<li><a href="listarPelis.html">'.$genero.'</a></li>';
        echo '<li><a href="'.$genero['url'].'">'.$genero['nombre'].'</a></li>';
      }
    ?>
  </ul>
</div>

<div class="centrar">
  <form class="" action="resultados.php" method="get">
    <input type="text" name="buscar" value="" placeholder="Buscar...">
    <button type="submit">Buscar</button>
  </form>

  <?php

    var_dump($_GET);

  ?>
</div>
