
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
<?php 
$id = $this->input->post('userid');
$resultado = $this->db->get_where('playerdatabase', array('userid' => $id));
$rest = $resultado->result_array(); 

foreach ($rest as $key){
    $datos = json_decode($key['StatisticsDB'], True);
    $datos2 = json_encode($datos['Gathered'], True);
    $datos3 = json_decode($datos2, True);
    $kills = $datos['Kills'];
    $muertes = $datos['Deaths'];
    $suicidios = $datos['Suicides'];
    $metal = $datos3['metal.ore'];
    $piedra = $datos3['stones'];
    $sulfuro = $datos3['sulfur.ore'];
    $grasa = $datos3['fat.animal'];
    $carne = $datos3['meat.boar'];
    $tela = $datos3['cloth'];
    $hueso = $datos3['bone.fragments'];
    $cuero = $datos3['leather'];
    $madera = $datos3['wood'];
    $tiempo = $key['Time Played'];
    $explosivos = $datos['ExplosivesThrown'];
    $misiles = $datos['RocketsLaunched'];
    $tiempo2 = $tiempo / 60;
    $tiempo3 = $tiempo2 / 60;
    $tiempo4 = substr("$tiempo3", 0,6);
    $disp = $datos['Shots'];
    $headshots = $datos['Headshots'];
    $porc = $headshots / $disp * 100;
    $porc2 = substr("$porc", 0,4);
    $muertesratio = $datos['Deaths'];
    $killsratio = $datos['Kills'];
    if ($killsratio == 0){
    
  }else{
    $kd = $killsratio / $muertesratio;
  }
    $mineados = $metal + $piedra + $sulfuro + $tela + $grasa + $hueso + $cuero + $madera;
?>
<div class="container">
<div class="card  card-invisible z-depth-5">


<div class="card-body">
<div class="chip chip-md pink darken-2 white-text waves-effect">
  <h4 class="card-title">Nombre: <a><?php echo $key['name'];?></a></h4>
  </div>
  <div class="row">
<p>-Tiempo Jugado: <?php 

echo $tiempo4;
?> Horas</p>
<p>-Efectividad de Disparos (HeadShots):
<?php

echo $porc2;
?>
%
</p>
<p>
-K/D Ratio:
<?php

echo $kd;
?>
</p>
<p>
-Recursos Mineados:
<?php

echo $mineados;
?>
</p>
<p>
-Misiles:
<?php

echo $misiles;
?>
</p>
<p>
-Explosivos Lanzados:
<?php

echo $explosivos;
?>
</p>
  </div>
  <div class="recursos">
  <canvas id="kills"></canvas>
  </div>
  <canvas id="recursos"></canvas>
 
  <?php //echo $datos3['metal.ore'];  
 // printf($datos2);
  ?>

  <a href="<?php echo base_url()?>" class="btn danger-color">Volver</a>

</div>
</div>
</div>


<?php 

}?>
<script>
var ctxD = document.getElementById("kills").getContext('2d');
var myLineChart = new Chart(ctxD, {
type: 'pie',
data: {
labels: ["Kills", "Muertes", "Suicidios"],
datasets: [{
data: ['<?php echo $kills;?>','<?php echo $muertes;?>','<?php echo $suicidios;?>'],
backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
}]
},
options: {
responsive: true
}
});

usuario.call();

var ctxP = document.getElementById("recursos").getContext('2d');
var myPieChart = new Chart(ctxP, {
  plugins: [ChartDataLabels],
  type: 'bar',
  data: {
    labels: ["Madera", "Metal", "Piedra", "Sulfuro", "Grasa", "Carne", "Tela", "Hueso", "Cuero"],
    datasets: [{
      label: "Recursos Mineados",
      data: ['<?php echo $madera;?>','<?php echo $metal;?>','<?php echo $piedra;?>','<?php echo $sulfuro;?>','<?php echo $grasa;?>','<?php echo $carne;?>','<?php echo $tela;?>','<?php echo $hueso;?>','<?php echo $cuero;?>',],
      backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#6610f2", "#4D5360", "#ffffff", "#401515"],
      hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774", "#616774", "#616774", "#616774"]
    }]
  },
  
  options: {
    responsive: true,
    legend: {
      position: 'right',
      labels: {
        padding: 30,
        boxWidth: 10
      }
    },
    
  }
});
</script>
