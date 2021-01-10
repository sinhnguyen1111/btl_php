<!DOCTYPE html>
<html>
<?php
    include_once 'views/backend/includes/header.php';
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <?php 
    include_once 'views/backend/includes/topbar.php';?>
<!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include_once 'views/backend/includes/sidebar.php';?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php include_once 'views/backend/'.$page.'.php';?>
</div>
    <!-- /.content-wrapper -->
    <?php include_once 'views/backend/includes/footer.php' ;?>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php
    include_once 'views/backend/includes/script.php';
?>
</body>
</html>