<footer class="page-footer font-small danger-color footer-mio"    style="z-index: 10;">


  <div class="footer-copyright text-center py-3">© <?php echo date('Y')?> {copy} |
    <a href="">WhiteAssassins</a>
  </div>


</footer>


<script>


$(document).ready(function () {
  $('#dtMaterialDesignExample').DataTable();
  $('#dtMaterialDesignExample_wrapper').find('label').each(function () {
    $(this).parent().append($(this).children());
    
  });
  $('#dtMaterialDesignExample_wrapper .dataTables_filter').find('input').each(function () {
    const $this = $(this);
    $this.attr("placeholder", "Buscar");
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