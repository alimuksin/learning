<form method="post" id="form">
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaKelas; ?>" name="namaKelas" placeholder="Masukan idKelas">
    </div>
    <div class="form-group">
         <label for="email">Deskripsi:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->deskKelas; ?>" name="deskKelas" placeholder="Masukan nama" >
    </div>
    
    <input type="hidden" name="idKelas" value="<?php echo $hasil->idKelas;?>">
    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
        <button id="tombol_edit" type="button" class="btn btn-success" data-dismiss="modal" >Edit</button>
    </div>
    
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_edit").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/admin/kelas/editKelas",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/admin/kelas/tampilKelas");    
                    }
                });
            });
        });
</script> 