<div class="container-fluid">
<!-- Notif berhasil update -->
<div class="msg" style="display:none;">
    <?= @$this->session->flashdata('msg'); ?>
</div>


	<div class="row">
		<div class="col-lg-4 col-xl-3">
			<div class="card">
				<div class="card-body">
					<div class="media align-items-center mb-4">
						<img src="<?=base_url('themes/');?>images/avatar/11.png" width="100%" alt="">
					</div>
					<p>
						<a href="#" class="btn btn-primary btn-block btn-sm" data-toggle="modal" data-target="#basicModal<?= $userdata->id; ?>">Ganti profile</a>
					</p>
                </div>
            </div>  
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills mb-3">
                        <li class="nav-item"><a href="#info-1" class="nav-link active" data-toggle="tab" aria-expanded="false">Informasi Pribadi</a></li>
                        <li class="nav-item"><a href="#navpills-2" class="nav-link" data-toggle="tab" aria-expanded="false">Setting Profile</a></li>
                        <li class="nav-item"><a href="#navpills-3" class="nav-link" data-toggle="tab" aria-expanded="true">Setting Password</a></li>
                    </ul>
                    
               	</div>
           	</div>

           	<div class="card">
                <div class="card-body">
                    <div class="tab-content br-n pn">
                      	<div id="info-1" class="tab-pane active">
                          	<div class="row align-items-center">
                          		<h4 class="card-title">Tentang Saya</h4>
                                <div class="table-responsive">
                                    <table class="table header-border">
                                        <tr>
                                           	<th>Nama Lengkap</th>
                                           	<td width="1%">:</td>
                                           	<td><?= $userdata->first_name; ?> <?= $userdata->last_name; ?></td>
                                       	</tr>
                                       	<tr>
                                           	<th>Email</th>
                                           	<td>:</td>
                                           	<td><?= $userdata->email; ?></td>
                                       	</tr>
                                       	<tr>
                                           	<th>Telp</th>
                                           	<td>:</td>
                                           	<td><?= $userdata->phone; ?></td>
                                       	</tr>
                                       	<tr>
                                           	<th>Username</th>
                                           	<td>:</td>
                                           	<td><?= $userdata->username; ?></td>
                                       	</tr>
                                       	<tr>
                                           	<th>Status Akun</th>
                                           	<td>:</td>
                                           	<td>
                                           		<?php
                                           		$status = $this->session->userdata('activated');
                                           		if ($status < "1") {
                                           			echo "<span class='label label-info'>Aktiv</span>";
													} else {
													  echo "<span class='label label-danger'>Tidak Aktiv</span>";
													} 
                                           		?>
                                           	</td>
                                       	</tr>
                                       	<tr>
                                           	<th>Tanggal dibuat</th>
                                           	<td>:</td>
                                           	<td><?= tgl_lengkap($userdata->created_at);?></td>
                                       	</tr>
                                       	<tr>
                                           	<th>Terahir login</th>
                                           	<td>:</td>
                                           	<td><?= tgl_lengkap($userdata->last_login);?></td>
                                       	</tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <div id="navpills-2" class="tab-pane">

                        	<h4 class="card-title">Edit data pribadi</h4>
                                <div class="basic-form">
                                    <form action="<?php echo base_url('auth/updateinfo') ?>" method="POST" enctype="multipart/form-data">
                                    	<div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="1234 Main St" value="<?= $userdata->username; ?>" readonly="">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Nama Depan</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Depan" value="<?= $userdata->first_name; ?>" name="first_name" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Nama Belakang</label>
                                                <input type="text" class="form-control" placeholder="Masukan Nama Belakang" value="<?= $userdata->last_name; ?>" name="last_name" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="Masukan Email" value="<?= $userdata->email; ?>" name="email" >
                                        </div>
                                        <div class="form-group">
                                            <label>No Telphone</label>
                                            <input type="text" class="form-control" placeholder="Masukan No Telp" value="<?= $userdata->phone; ?>" name="phone" >
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save"></i>  Simpan Perubahan</button>
                                    </form>
                                </div>

                        </div>
                        <div id="navpills-3" class="tab-pane">
                            <h4 class="card-title">Edit data pribadi</h4>
                            <form action="<?php echo base_url('auth/updatePassword') ?>" method="POST">
                            	<div class="form-group">
									<label for="passLama" >Password Lama</label>
									<input type="password" class="form-control" placeholder="Password Lama" name="passLama">
								</div>
								<div class="form-group">
									<label for="passBaru">Password Baru</label>
									<input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
								</div>
								<div class="form-group">
									<label for="passKonf">Konfirmasi Password</label>
									<input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-check-circle"></i> Simpan</button>
								</div>
							</form>
                       	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="basicModal<?= $userdata->id; ?>">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Foto Profile</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
            	<img src="<?=base_url('themes/');?>images/avatar/11.png" width="50%" alt="">
            	<form style="margin-top: 30px">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="form-group text-center">
                                <label>Ganti Foto</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>