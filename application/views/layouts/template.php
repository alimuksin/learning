<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('themes/') ?>images/favicon.png">
    <!-- DataTables -->
     <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/libs/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link href="<?php echo base_url('themes/') ?>plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url('themes/') ?>css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="<?php echo base_url('themes/') ?>logo1.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?php echo base_url('themes/') ?>images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?php echo base_url('themes/') ?>logo.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php require_once('_header.php') ;?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once('_sidebar.php') ;?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)"><?= $title_bread ?></a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('home')?>">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <?php echo $contents ;?>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    

    <?php require_once('_js.php') ;?>
    <!-- DataTables -->
<script src="<?php echo base_url('assets');?>/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets');?>/libs/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example2').DataTable()
    
  })
</script>
</body>

</html>

<script type="text/javascript">
     (function($) {
            "use strict"

            new quixSettings({
                headerPosition: "fixed",
            });

        })(jQuery);
</script>