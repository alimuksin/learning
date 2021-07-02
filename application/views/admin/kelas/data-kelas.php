<table class="table header-border table-hover verticle-middle table-sm">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Kelas</th>
            <th scope="col">Deskripsi Kelas</th>
            <th colspan='2' class="text-center">Aksi</th>
        </tr>
    </thead>
    <tbody>

    <?php
            $no=1;
            foreach ($hasil as $item)
            {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $item->namaKelas;?></td>
            <td><?php echo $item->deskKelas;?></td>
            
            <td> <button type="button" idKelas="<?php echo $item->idKelas; ?>" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> </button></td>
            <td> <button type="button" idKelas="<?php echo $item->idKelas; ?>" class="hapus btn btn-danger btn-sm"><i class="fa fa-trash"></i> </button></td>
        </tr>
        <?php
                $no++;
                }
                 ?>
    </tbody>
                           
</table>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title text-center bg-navy" id="judul"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div id="tampil_modal">
                            <!-- Data akan di tampilkan disini-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){

                $('.tambah').click(function(){
                var aksi = 'Tambah Mahasiswa';
                $.ajax({
                    url: '<?php echo base_url(); ?>admin/kelas/tambah',
                    method: 'post',
                    data: {aksi:aksi},
                    success:function(data){
                        $('#myModal').modal("show");
                        $('#tampil_modal').html(data);
                        document.getElementById("judul").innerHTML='Tambah Data';

                    }
                });
                });

                $('.edit').click(function(){

                    var idKelas = $(this).attr("idKelas");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/kelas/edit',
                        method: 'post',
                        data: {idKelas:idKelas},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idKelas = $(this).attr("idKelas");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/kelas/hapus',
                        method: 'post',
                        data: {idKelas:idKelas},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>