<?php
if ($fp = @fsockopen('127.0.0.1','28016',$ERROR_NO,$ERROR_STR,(float)0.5)){
  fclose($fp);
  $serstats = "<p class='online'><i class='fas fa-link'></i> {online}</p>";
}else{
  $serstats = "<p class='offline'><i class='fas fa-unlink'></i> {offline}</p>";
}


?>
<nav class="navbar navbar-expand-lg navbar-dark danger-color ">
  <a class="navbar-brand" href="<?php echo base_url()?>">{titulo}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>">{navbar1}</a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="<?php //echo base_url()?>home/top">Tops </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>home/about">{navbar2}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>home/changelog">{navbar3}</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto nav-flex-icons">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">{idioma}</a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomaes"><i class="es flag"></i></a>
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomaen"><i class="united states flag"></i></a>
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomaru"><i class="russia flag"></i></a>
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomach"><i class="china flag"></i></a>
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomafr"><i class="france flag"></i></a>
          <a class="dropdown-item" href="<?php echo base_url();?>home/idiomaal"><i class="germany flag"></i></a>
        </div>
      </li>

    </ul>
    <span class="navbar-text white-text">
    <?php echo $serstats;?>
    </span>
    
  </div>
</nav>