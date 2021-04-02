<video id="video" loop autoplay preload muted class="mask flex-center rgba-black-strong">
  <?php
    $fondo[0] = "img/fondo.mp4";
    $fondo[1] = "img/fondo2.mp4";
    $fondo[2] = "img/fondo3.mp4";
    $fondo[3] = "img/fondo4.mp4";
  ?>
<source src="<?php echo base_url()?><?php echo $fondo[array_rand($fondo)];?>" type="video/mp4" codecs="avc1,mp4a" />
</video>
<div class="row">
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Kills</h4>
            <hr>
            
<table id="dtOrderExample" class="table  table-borderless" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Name
      </th>
      <th>Name
      </th>
      <th>Name
      </th>
    </tr>
  </thead>
  <tbody>
  <?php 
         $this->db->order_by('StatisticsDB','DESC');  
$jugadores = $this->db->get('playerdatabase', 5);

$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
    
?>
    <tr>
    <td><i class="fas fa-award"></i></td>
    <td><?php echo $key['name'];?></td>
    <td><?php print_r($datos['Kills']);?></td>

</tr>
<?php }?>
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Name
      </th>
      <th>Name
      </th>
    </tr>
  </tfoot>
</table>


            
            
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Muertes</h4>
            <hr>
            <?php 


foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['Deaths']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Suicidios</h4>
            <hr>
            <?php 

foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['Suicides']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Disparos</h4>
            <hr>
            <?php 


foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['Shots']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">HeadShots</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['Headshots']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Recargas</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['WeaponReloads']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Items Creados</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['CraftedItems']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Items Reparados</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['RepairedItems']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Explosivos Lanzados</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['ExplosivesThrown']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Misiles Lanzados</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['RocketsLaunched']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Conexiones</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['Joins']);?>
            </p>
            <?php }?>
        </div>
    </div>
    <div class="card testimonial-card z-depth-5 ct3 tops">
        <div class="card-body">
            <h4 class="card-title text-white">Medicinas Usadas</h4>
            <hr>
            <?php 
            $this->db->order_by('StatisticsDB','DESC');
$jugadores = $this->db->get('playerdatabase', 5);
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
    $datos = json_decode($key['StatisticsDB'], True);
?>
            <p><i class="fas fa-award"></i> <?php echo $key['name'];?> <?php print_r($datos['LiftUsages']);?>
            </p>
            <?php }?>
        </div>
    </div>
</div>