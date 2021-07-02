<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/mapel/tampilMapel",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });
});
</script>
<div class="container-fluid mt-3">
    
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Mapel
                <div class="float-right">
                    <a href="<?php echo base_url('admin/mapel') ;?>" class="tambah btn btn-primary" ><i class="fa fa-refresh"></i></a>
                    <button type="button" class="tambah btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
                </div>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="tampil">
                            <!-- Data tampil disini -->
                </div>
                        
            </div>
        </div>
    </div>
</div>


<script src="http://localhost/kelulusan/assets/p/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example2').DataTable();
    } );
</script>

