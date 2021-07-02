<form method="post" id="form">
    <p>Yakin ingin menghapus Kelas <strong><?php echo $hasil->namaMapel;?></strong> </p>
    <input type="hidden" name="idMapel" value="<?php echo $hasil->idMapel;?>">
    <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_hapus").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>admin/mapel/delete",
                    data: data,

                    cache	: false,
                    success	: function(data){
                        alert('Sukses Hapus data');
                        $('#tampil').load("<?php echo base_url(); ?>admin/mapel/tampilMapel");
                    }
                });
            });
        });
</script> 