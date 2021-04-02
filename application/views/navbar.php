<?php
if ($fp = @fsockopen('127.0.0.1','28016',$ERROR_NO,$ERROR_STR,(float)0.5)){
  fclose($fp);
  $serstats = "<p class='online'><i class='fas fa-link'></i> Online</p>";
}else{
  $serstats = "<p class='offline'><i class='fas fa-unlink'></i> Offline</p>";
}
?>
<nav class="navbar navbar-expand-lg navbar-dark danger-color">
  <a class="navbar-brand" href="<?php echo base_url()?>">Rust Stats</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>">Home</a>
      </li>
     <!-- <li class="nav-item">
        <a class="nav-link" href="<?php //echo base_url()?>home/top">Tops </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>home/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>home/changelog">Changelog</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto nav-flex-icons">
      
    </ul>
    <span class="navbar-text white-text">
    <?php echo $serstats;?>
    </span>
    
  </div>
</nav>