<form method="post" id="form">
    <div class="form-group">
         <label for="email">Kode Mapel:</label>
        <input type="text" class="form-control"  name="kodeMapel" placeholder="Masukan Kode Mapel" >
    </div>
    <div class="form-group">
        <label for="email">MAPEL :</label>
        <input type="text" class="form-control"  name="namaMapel" placeholder="Masukan MAPEL">
    </div>
    <div class="form-group">
        <label for="email">Guru Mapel:</label>
        <select class="form-control" name="guruId">
            <option>-- Pilih Guru --</option>
            <?php foreach($guru as $guru):?>
                <option value="<?= $guru->id;?>"><?= $guru->first_name;?> <?= $guru->last_name;?></option>
            <?php endforeach;?>
        </select>
    </div>
    
    <button id="tombol_tambah" type="button" class="btn btn-primary btn-block" data-dismiss="modal" >Tambah</button>
</form>
<script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>admin/mapel/simpan",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        alert('Sukses adding / update data');
                        $('#tampil').load("<?php echo base_url(); ?>admin/mapel/tampilMapel");
                    }
                });
            });
        });
</script> 