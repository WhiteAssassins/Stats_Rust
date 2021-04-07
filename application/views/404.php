<video id="video" loop autoplay preload muted class="mask flex-center rgba-black-strong">
  <?php
  error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_WARNING & ~E_NOTICE);
    $fondo[0] = "img/fondo.mp4";
    $fondo[1] = "img/fondo2.mp4";
    $fondo[2] = "img/fondo3.mp4";
    $fondo[3] = "img/fondo4.mp4";
  ?>
<source src="<?php echo base_url()?><?php echo $fondo[array_rand($fondo)];?>" type="video/mp4" codecs="avc1,mp4a" />
</video>
<div class="ct4 z-depth-5 container">
<div class="text-center ">
<div class="view overlay rounded-top">
    <img src="<?php echo base_url();?>img/404.png" class="img-fluid" alt="Sample image">
    <a href="#">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <h2 class="card-title h2">Error 404</h2>

      <p class="card-text">La Pagina que usted Busca no se Encuentra</p>


  <a class="btn peach-gradient btn-rounded" href="<?php echo base_url(); ?>">Volver</a>
</div>

</div>
</div>