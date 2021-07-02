<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        type: 'POST',
        url: "<?php echo base_url(); ?>admin/set/all",
        cache: false,
        success: function(data) {
            $("#tampil").html(data);
        }
    });
});
</script>
<div class="container mt-3">
	<div class="card">
        <div class="card-body">
        	<h4 class="card-title">Setting Tampilan</h4>
        	<div class="custom-tab-1">
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin">Administrator</a> </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#guru">Guru</a> </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#siswa">Siswa</a> </li>
                </ul>
                <div class="tab-content">
                	<div class="tab-pane fade show active" id="admin" role="tabpanel">
                        <div class="p-t-15">
                            <div class="table-responsive">
			        			<div id="tampil"></div>
			        		</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="guru">
                        <div class="p-t-15">
                            Guru
                        </div>
                    </div>
                    <div class="tab-pane fade" id="siswa">
                        <div class="p-t-15">
                           Siswa
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>