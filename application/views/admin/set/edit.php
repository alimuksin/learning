<form method="post" id="form">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="email">Nama :</label>
                <input class="form-control" value="<?php echo $hasil->nameOption; ?>" placeholder="Masukan idKelas" readonly>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="email">Deskripsi :</label>
                <input type="text" class="form-control" value="<?php echo $hasil->deskOption; ?>" readonly >
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Pilihan :</label>
        <?php 
            $apa    = $hasil->pilOption;
            $L [0]  = '';
            $L [1]  = '';
            $P [0]  = '';
            $P [1]  = '';
            switch ($hasil->valueOption){
                    case "vertical" : $L[0]="selected"; break;
                    case "horizontal" : $L[1]="selected"; break;
                    case "wide" : $P[0]="selected"; break;
                    case "boxed" : $P[1]="selected"; break;
                };

            if ($apa == "style") {
                echo "<input type='text' class='form-control' name='valueOption' value='".$hasil->valueOption."' readonly >";

                }elseif ($apa == "layout") {
                echo 
                    "<select class='form-control' name='valueOption'>
                        <option value='vertical' $L[0]>Vertical</option>
                        <option value='horizontal' $L[1]>Horizontal</option> 
                    </select>";
                }elseif ($apa == "posisi") {
                echo 
                    "<select class='form-control' name='valueOption'>
                        <option value='boxed' $P[0];>boxed</option>
                        <option value='wide' $P[1];>wide</option> 
                    </select>";
            }elseif ($apa == "navbar") {
                echo "<input type='text' class='form-control' name='valueOption' value='".$hasil->valueOption."' readonly >";

            }elseif ($apa == "sidebar") {
                echo "<input type='text' class='form-control' name='valueOption' value='".$hasil->valueOption."' readonly >";

                }
        ?>
    </div>
    <div class="form-group">
        <label for="email">Status :</label>
        <select class="form-control" name="isActive">
            <?php
                $jur[0]="";
                $jur[1]="";
                switch ($hasil->isActive){
                    case "0" : $jur[0]="selected"; break;
                    case '1' : $jur[1]="selected"; break;
                }
            ?>
            <option value="0" <?php echo $jur[0]; ?>>Disable</option>
            <option value="1" <?php echo $jur[1]; ?>>Aktive</option>
         </select>
    </div>
    
    <input type="hidden" name="idOption" value="<?php echo $hasil->idOption;?>">
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
                    url	: "<?php echo base_url(); ?>/admin/set/update",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        alert ('data berhasil diupdate');
                        $('#tampil').load("<?php echo base_url(); ?>/admin/set/all");    
                    }
                });
            });
        });
</script> 