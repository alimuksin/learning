 <table id="example2" class="table header-border table-hover verticle-middle table-sm" width="50%">
    <thead>
        <tr>
            <th scope="col">Kode MAPEL</th>
            <th scope="col">Nama Mapel</th>
            <th scope="col">Guru Pengampu</th>
            <th colspan="2" width="10%" class="text-center"> Aksi </th>
            
        </tr>
    </thead>
    <tbody>

    <?php
            $no=1;
            foreach ($hasil as $item)
            {
        ?>
        <tr>
            <td><?php echo $item->kodeMapel;?></td>
            <td><?php echo $item->namaMapel;?></td>
            <td><?php echo $item->first_name;?> <?php echo $item->last_name;?></td>
            <td> <button type="button" idMapel="<?php echo $item->idMapel; ?>" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></td>
            <td>    <button type="button" idMapel="<?php echo $item->idMapel; ?>" class="hapus btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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
                var aksi = 'Tambah Mapel';
                $.ajax({
                    url: '<?php echo base_url(); ?>admin/mapel/tambah',
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

                    var idMapel = $(this).attr("idMapel");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/mapel/edit',
                        method: 'post',
                        data: {idMapel:idMapel},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idMapel = $(this).attr("idMapel");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/mapel/hapus',
                        method: 'post',
                        data: {idMapel:idMapel},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>