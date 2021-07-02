<script src="<?php echo base_url('themes/') ?>plugins/common/common.min.js"></script>
    <script src="<?php echo base_url('themes/') ?>js/custom.min.js"></script>
    <script src="<?php echo base_url('themes/') ?>js/settings.js"></script>
    <script src="<?php echo base_url('themes/') ?>js/gleek.js"></script>
    <script src="<?php echo base_url('themes/') ?>js/styleSwitcher.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url('themes/') ?>plugins/toastr/js/toastr.min.js"></script>
    <script src="<?php echo base_url('themes/') ?>plugins/toastr/js/toastr.init.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url('themes/') ?>plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('themes/') ?>plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url('themes/') ?>plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

   
	<script>
		window.onload = function() {
			<?php if ($this->session->flashdata('msg') != '') {
	    echo "effect_msg();";
	}?>
		}

		function effect_msg_form() {
			$('.form-msg').slideDown(1000),
				setTimeout(function() {
					$('.form-msg').slideUp(1000);
				}, 3000)
		}

		function effect_msg() {
			$('.msg').show(1000),
				setTimeout(function() {
					$('.msg').fadeOut(1000);
				}, 3000)
		}
	</script>

	<script type="text/javascript">
		(function($) {
            "use strict"

            new quixSettings({
                layout: "horizontal"
            });

        })(jQuery);
	</script>