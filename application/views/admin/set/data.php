<table class="table table-sm" width="70%">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Setting</th>
			<th>Deskripsi</th>
			<th>Value Setting</th>
			<th>Status</th>
			<th class="text-center" width="1%">Aksi</th>
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
            <td><?php echo $item->nameOption;?></td>
            <td><?php echo $item->deskOption;?></td>
            <td><?php echo $item->valueOption;?></td>
            <td>
            	<?php
            	$status = $item->isActive;
            	if ($status == 1) {
            		echo "<span class='label gradient-1 rounded'>Aktiv</span>";
            	}else if($status == 0){
            		echo "<span class='label gradient-2 rounded'>Disable</span>";
            	}
            	?>
            	</td>
            <td><button type="button" idOption="<?php echo $item->idOption; ?>" class="edit btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i> Edit</button></td>
		</tr>
	<?php } ?>
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
                    url: '<?php echo base_url(); ?>admin/set/tambah',
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

                    var idOption = $(this).attr("idOption");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/set/edit',
                        method: 'post',
                        data: {idOption:idOption},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var idOption = $(this).attr("idOption");
                    $.ajax({
                        url: '<?php echo base_url(); ?>admin/set/hapus',
                        method: 'post',
                        data: {idOption:idOption},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>