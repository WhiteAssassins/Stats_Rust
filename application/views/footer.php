<footer class="page-footer font-small danger-color footer-mio"    style="z-index: 10;">


  <div class="footer-copyright text-center py-3">© <?php echo date('Y')?> {copy} |
    <a href="">WhiteAssassins</a>
  </div>


</footer>

<?php 
if($this->session->userdata('idioma') == 'es'){
$placeholder = "Buscar";
$entradas = "Entradas a Mostrar";
$de = "de";
$infovacia = "No Hay Entradas para Mostrar";
$tablavacia = "No hay Datos en la tabla";
$infofiltered = "- Filtrado de _MAX_ entradas";
$cargando = "Por Favor Espere - Cargando...";
$procesando = "Los Datos estan Cargando";
$nodatos = "No hay datos para Mostrar";
}elseif($this->session->userdata('idioma') == 'en'){
  $placeholder = "Search";
  $entradas = "Tickets to Show";
  $de = "from";
  $infovacia = "No Tickets to Show";
$tablavacia = "There is no data in the table";
$infofiltered = "- Filtering of _MAX_ tickets";
$cargando = "Please wait - Charging...";
$procesando = "Data is Loading";
$nodatos = "No data to display";
}elseif($this->session->userdata('idioma') == 'ru'){
  $placeholder = "Поиск";
  $entradas = "Билеты на шоу";
  $de = "из";
  $infovacia = "Нет билетов на показ";
$tablavacia = "В таблице нет данных";
$infofiltered = "- Фильтрация _MAX_ Билеты";
$cargando = "Подождите пожалуйста - Зарядка...";
$procesando = "Данные загружаются";
$nodatos = "Нет данных для отображения";
}elseif($this->session->userdata('idioma') == 'ch'){
  $placeholder = "搜索";
  $entradas = "演出门票";
  $de = "从";
  $infovacia = "没有门票可显示";
$tablavacia = "表中没有数据";
$infofiltered = "- 过滤 _MAX_ 车票";
$cargando = "请稍等 - 收费...";
$procesando = "数据正在加载";
$nodatos = "没有数据显示";
}elseif($this->session->userdata('idioma') == 'fr'){
  $placeholder = "Chercher";
  $entradas = "Billets pour le spectacle";
  $de = "de";
  $infovacia = "Aucun billet à montrer";
$tablavacia = "Il n'y a pas de données dans le tableau";
$infofiltered = "- Filtrage de _MAX_ des billets";
$cargando = "S'il vous plaît, attendez - Mise en charge...";
$procesando = "Les données sont en cours de chargement";
$nodatos = "aucune donnée à afficher";
}elseif($this->session->userdata('idioma') == 'al'){
  $placeholder = "Suche";
  $entradas = "Tickets zu zeigen";
  $de = "von";
  $infovacia = "Keine Tickets zu zeigen";
$tablavacia = "Die Tabelle enthält keine Daten";
$infofiltered = "- Filtern von _MAX_ tickets";
$cargando = "Warten Sie mal - Aufladen...";
$procesando = "Daten werden geladen";
$nodatos = "Keine Daten zum Anzeigen";
}else{
  $placeholder = "Search";
  $entradas = "Tickets to Show";
  $de = "from";
  $infovacia = "No Tickets to Show";
$tablavacia = "There is no data in the table";
$infofiltered = "- Filtering of _MAX_ tickets";
$cargando = "Please wait - Charging...";
$procesando = "Data is Loading";
$nodatos = "No data to display";
}
?>
<script>


$(document).ready(function () {
  $('#dtMaterialDesignExample').DataTable({
    "language": {
      "info": "_START_ - _END_ <?php echo $de;?> _TOTAL_",
      "infoEmpty": "<?php echo $infovacia;?>",
      "emptyTable": "<?php echo $tablavacia;?>",
      "infoFiltered": "<?php echo $infofiltered;?>",
      "loadingRecords": "<?php echo $cargando;?>",
      "processing": "<?php echo $procesando;?>",
      "zeroRecords": "<?php echo $nodatos;?>"
			        }
  });
  $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
   
    $(this).parent().append($(this).children());
    
  });
  $('#dtMaterialDesignExample_length').find('label').each(function () {
    const $this = $(this);
  $this.empty("label");
   $this.append("<?php echo $entradas;?>");

   
 });

  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
    const $this = $(this);
    $this.attr("placeholder", "<?php echo $placeholder;?>");
    $this.removeClass('form-control-sm');
     
  });
  //$("#dtMaterialDesignExample").append("<button type='submit'>Ver</button>");
  $('#dtMaterialDesignExample_wrapper .dataTables_length').addClass('d-flex flex-row');
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').addClass('md-form');
  $('#dtMaterialDesignExample_wrapper select').removeClass('custom-select custom-select-sm form-control form-control-sm');
  $('#dtMaterialDesignExample_wrapper select').addClass('mdb-select');
  $('#dtMaterialDesignExample_wrapper .mdb-select').materialSelect();
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('label').remove();
  
});



$(document).ready(function () {
$('#dtOrderExample').DataTable({
  "paging": false,
  "searching": false,
  "info": false,
"order": [[ 2, "desc" ]]
});

});
</script>
</body>