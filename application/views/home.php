


<video id="video" loop autoplay preload muted class="mask flex-center rgba-black-strong">
  <?php
    $fondo[0] = "img/fondo.mp4";
    $fondo[1] = "img/fondo2.mp4";
    $fondo[2] = "img/fondo3.mp4";
    $fondo[3] = "img/fondo4.mp4";
  ?>
<source src="<?php echo base_url()?><?php echo $fondo[array_rand($fondo)];?>" type="video/mp4" codecs="avc1,mp4a" />
</video>


<div class="table-responsive-sm w-auto table-fixed text-nowrap">
<div class="ct2 z-depth-5 ">

<table id="dtMaterialDesignExample" class="table table-fixed " cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Nombre
      </th>
      <th class="th-sm">Kills
      </th>
      <th class="th-sm">Muertes
      </th>
      <th class="th-sm">Suicidios
      </th>
      <th class="th-sm">Disparos
      </th>
      <th class="th-sm">HeadShots
      </th>
      <th class="th-sm">Items Creados
      </th>
      <th class="th-sm">Items Reparados
      </th>
      <th class="th-sm">Mejoras
      </th>
      <th class="th-sm">Explosivos Lanzados
      </th>
      <th class="th-sm">Armas Recargadas
      </th>
      <th class="th-sm">Misiles Lanzados
      </th>
      <th class="th-sm">Ver
      </th>

    </tr>
  </thead>
  <tbody>
  <?php
$jugadores = $this->db->get('playerdatabase');
$mostrarjugadores = $jugadores->result_array();
foreach ($mostrarjugadores as $key){
?>


    <tr>
    
      <td><?php echo $key['name'];?></td>
      <?php $datos = json_decode($key['StatisticsDB'], True);?>
      <td><?php print_r($datos['Kills']);?></td>
      <td><?php print_r($datos['Deaths']);?></td>
      <td><?php print_r($datos['Suicides']);?></td>
      <td><?php print_r($datos['Shots']);?></td>
      <td><?php print_r($datos['Headshots']);?></td>
      <td><?php print_r($datos['CraftedItems']);?></td>
      <td><?php print_r($datos['RepairedItems']);?></td>
      <td><?php print_r($datos['HammerHits']);?></td>
      <td><?php print_r($datos['ExplosivesThrown']);?></td>
      <td><?php print_r($datos['WeaponReloads']);?></td>
      <td><?php print_r($datos['RocketsLaunched']);?></td>
      <form method="post" action="home/verusuario">
      <input type="hidden" name="userid" value="<?php echo $key['userid']; ?>">
    <td><button class="btn btn-danger btn-rounded" type="submit">Ver</button></td>
    </form>
    </tr>
    

    <?php }?>
  </tbody>
  <tfoot>
  <tr>
      <th>Nombre
      </th>

      <th>Kills
      </th>
      <th>Muertes
      </th>
      <th>Suicidios
      </th>
      <th>Disparos
      </th>
      <th>HeadShots
      </th>
      <th>Items Creados
      </th>
      <th>Items Reparados
      </th>
      <th>Mejoras
      </th>
      <th>Explosivos Lanzados
      </th>
      <th>Armas Recargadas
      </th>
      <th>Misiles Lanzados
      </th>
      <th>Ver
      </th>
      

    </tr>
  </tfoot>
</table>
</div>
</div>
<script>

bienvenido.call();

</script>