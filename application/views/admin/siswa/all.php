 <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<table class="table header-border table-hover verticle-middle table-sm">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">JK</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th></th>
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
            <td><?php echo $item->nis;?></td>
            <td><?php echo $item->nis;?></td>
            <td><?php echo $item->nis;?></td>
            <td><?php echo $item->nis;?></td>
            <td><?php echo $item->nis;?></td>
            <td> <button type="button" idSiswa="<?php echo $item->idSiswa; ?>" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></td>
            <td>    <button type="button" idSiswa="<?php echo $item->idSiswa; ?>" class="hapus btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
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