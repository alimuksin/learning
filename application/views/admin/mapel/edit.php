<form method="post" id="form">
    <div class="form-group">
        <label for="email">Kode Mapel:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->kodeMapel; ?>" name="kodeMapel" placeholder="Masukan Kode Mapel">
    </div>
    <div class="form-group">
        <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->namaMapel; ?>" name="namaMapel" placeholder="Masukan Nama Mapel">
    </div>
    <div class="form-group">
        <label for="email">Guru:</label>
        <select class="form-control" name="guruId">
            <option value="">-- Pilih Guru --</option>
            <?php   foreach($guru as $guru) { ?>
                <option value="<?= $guru->id;?>"
                    <?php if($hasil->guruId==$guru->id){ echo "selected"; } ?> >
                    <?php echo $guru->username?>
                </option> 
          <?php  } ?>
        </select>
    </div>
    
    <input type="hidden" name="idMapel" value="<?php echo $hasil->idMapel;?>">
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
                    url	: "<?php echo base_url(); ?>/admin/mapel/update",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        alert('Sukses update data');
                        $('#tampil').load("<?php echo base_url(); ?>/admin/mapel/tampilMapel");    
                    }
                });
            });
        });
</script> 