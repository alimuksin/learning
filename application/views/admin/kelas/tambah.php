<form method="post" id="form">
    <div class="form-group">
         <label for="email">Nama:</label>
        <input type="text" class="form-control"  name="namaKelas" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
        <label for="email">Deskripsi:</label>
        <input type="text" class="form-control"  name="deskKelas" placeholder="Masukan Deskripsi">
    </div>
    
    <button id="tombol_tambah" type="button" class="btn btn-primary btn-block" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>admin//kelas/simpankelas",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>admin/kelas/tampilKelas");
                    }
                });
            });
        });
</script> 