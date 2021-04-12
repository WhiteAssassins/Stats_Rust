


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


<div class="table-responsive-sm w-auto table-fixed text-nowrap">
<div class="ct2 z-deppth-5 ">

<table id="dtMaterialDesignExample" class="table table-fixed " cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">{nombre}
      </th>
      <th class="th-sm">{kills}
      </th>
      <th class="th-sm">{muertes}
      </th>
      <th class="th-sm">{suicidios}
      </th>
      <th class="th-sm">{disparos}
      </th>
      <th class="th-sm">{headshots}
      </th>
      <th class="th-sm">{itemscreados}
      </th>
      <th class="th-sm">{itemsreparados}
      </th>
      <th class="th-sm">{mejoras}
      </th>
      <th class="th-sm">{explosivos}
      </th>
      <th class="th-sm">{armasrecargadas}
      </th>
      <th class="th-sm">{misiles}
      </th>
      <th class="th-sm">{ver}
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
    <td><button class="btn btn-danger btn-rounded" type="submit">{ver}</button></td>
    </form>
    </tr>
    

    <?php }?>
  </tbody>
  <tfoot>
  <tr>
      <th>{nombre}
      </th>

      <th>{kills}
      </th>
      <th>{muertes}
      </th>
      <th>{suicidios}
      </th>
      <th>{disparos}
      </th>
      <th>{headshots}
      </th>
      <th>{itemscreados}
      </th>
      <th>{itemsreparados}
      </th>
      <th>{mejoras}
      </th>
      <th>{explosivos}
      </th>
      <th>{armasrecargadas}
      </th>
      <th>{misiles}
      </th>
      <th>{ver}
      </th>
      

    </tr>
  </tfoot>
</table>
</div>
</div>
<script>

bienvenido.call();

</script>