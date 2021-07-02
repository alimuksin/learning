	<div class="container-fluid">
		<div class="card">
			<!-- /.box-header -->
            <div class="card-body">
            	<h4 class="card-title">Data Pengguna
	                <div class="float-right">
	                    <a href="<?php echo base_url('admin/user') ;?>" class="tambah btn btn-primary" ><i class="fa fa-refresh"></i></a>
	                    <a href="<?php echo base_url('admin/user/add');?>" class="tambah btn btn-primary"><i class="fa fa-plus"></i></a>
	                </div>
	            </h4>
              	<!-- <table id="example2" class="table header-border table-hover verticle-middle table-sm"> -->
              	<div class="table-responsive">
	              	<table id="example2" class="table card-table table-vcenter text-nowrap datatable">
	                	<thead>
	                		<tr>
	                			<th width="10px" style="text-align: center;"></th>
			                  	<th style="text-align: center;">Username</th>
			                  	<th style="text-align: center;">Nama Lengkap</th>
			                  	<th style="text-align: center;">Email</th>
			                  	<th style="text-align: center;">Last Login</th>
			                  	<th style="text-align: center;">Status</th>
			                  	<th width="15%" style="text-align: center;">Aksi</th>
		                	</tr>
		                </thead>
		                <tbody>
		                	<?php 
		                	$no = 1;
		                	foreach ($user as $p) { ?>
		                	<tr>
		                  		<td style="text-align: center;"><?php echo $no++ ?></td>
		                  		<td><?php echo $p->username ?></td>
		                  		<td><?php echo $p->first_name ?> <?php echo $p->last_name ?></td>
		                  		<td><?php echo $p->email ?></td>
		                  		<td><?= tgl_lengkap($userdata->last_login);?></td>
		                  		<td style="text-align: center;">
		                  			<?php
			                          $status = $p->activated;
			                          if($status == 1){
			                            echo '<button class="btn btn-success btn-sm"><b>Aktiv</b></button>';
			                          }else if($status == 0){
			                            echo '<button class="btn btn-danger btn-sm"><b>Tidak</b></button>';
			                          }
	                        		?>
		                  		</td>
		                  		<td style="text-align: center;">
		                  			<a class="btn btn-primary btn-sm" href=""><i class="fa fa-edit"></i></a>
		                  			<a class="btn btn-danger btn-sm" href=""><i class="fa fa-trash"></i></a>
		                  		</td>
		                	</tr>
		                	<?php } ?>
	            		</tbody>
	        		</table>
	        	</div>
        	</div>
        </div>
    </div>