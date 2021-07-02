<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/siswa/all",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/siswa/kelas10",
        cache: false,
        success: function(data) {
            $("#kelas10").html(data);
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/siswa/kelas11",
        cache: false,
        success: function(data) {
            $("#kelas11").html(data);
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/siswa/kelas12",
        cache: false,
        success: function(data) {
            $("#kelas12").html(data);
        }
    });
});
</script>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<div class="card-body">
					<button type="button" class="tambah btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#myModal"> Tambah </button>
  					 <br>
        			<div class="list-group" id="list-tab" role="tablist">
						<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-all" role="tab" aria-controls="home">All</a>
						<a class="list-group-item list-group-item-action" id="list-kelasX-list" data-toggle="list" href="#list-kelasX" role="tab" aria-controls="kelasX">Kelas X</a> 
						<a class="list-group-item list-group-item-action" id="list-kelasXI-list" data-toggle="list" href="#list-kelasXI" role="tab" aria-controls="kelasXI">Kelas XI</a>
						<a class="list-group-item list-group-item-action" id="list-kelasXII-list" data-toggle="list" href="#list-kelasXII" role="tab" aria-controls="kelasXII">Kelas XII</a>
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Daftar Siswa</h4>
					<div class="tab-content" id="nav-tabContent">
						<!-- Semua -->
						<div class="tab-pane fade show active" id="list-all">
							<div class="table-responsive">
								<div id="tampil"></div>
							</div>
						</div>

						<div class="tab-pane fade" id="list-kelasX" role="tabpanel">
							<!-- Semua -->
						<div class="tab-pane fade show active" id="list-kelasX">
							<div class="table-responsive">
								<div id="kelas10"></div>
							</div>
						</div>
						</div>
						<div class="tab-pane fade" id="list-kelasXI">
							<div class="tab-pane fade show active" id="list-kelasXI">
								<div class="table-responsive">
									<div id="kelas11"></div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="list-kelasXII">
							<!-- Semua -->
							<div class="tab-pane fade show active" id="list-kelasXII">
								<div class="table-responsive">
									<div id="kelas12"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title text-center bg-navy" id="judul">Tambah Siswa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
			         <!-- Modal body -->
			         <div class="modal-body">
			         	<div class="basic-form">
                            <form action="<?php echo base_url('admin/siswa/tambahkan') ?>" method="POST" enctype="multipart/form-data">
                            
                            <div class="form-row">
                            	<div class="form-group col-md-6">
                            		<label>NIS</label>
                                    <input type="number" min="10" class="form-control" placeholder="Masukan NIS" name="nis" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="namaLengkap" required="">
                                </div>
                            </div>
                            
                            <div class="form-row">
                            	<div class="form-group col-md-6">
                            		<label>Email</label>
                                    <input type="email" min="10" class="form-control" placeholder="Masukan Email" name="nis" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telp</label>
                                    <input type="number" class="form-control" placeholder="Masukan Nama Lengkap" name="namaLengkap" required="">
                                </div>
                            </div>
                            <div class="form-row">
                            	<div class="form-group col-md-6">
                            		<label>Jenis Kelamin</label>
                            		<select class="form-control" name="jk">
                            			<option>-- Pilih Jenis Kelamin</option>
                            			<option value="L">Laki-laki</option>
                            			<option value="P">Perempuan</option>
                            		</select>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kelas</label>
                                    <select class="form-control" name="kelasId">
                            			<option>-- Pilih Jenis Kelamin</option>
                            			<option value="L">Laki-laki</option>
                            			<option value="P">Perempuan</option>
                            		</select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block"> <i class="fa fa-save"></i>  Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

