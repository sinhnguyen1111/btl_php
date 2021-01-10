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
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tạo danh mục</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                <li class="breadcrumb-item active">Tạo danh mục sách</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
<!-- Content -->
<div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tạo danh mục sách</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?php echo "?c=admin&mod=category&act=store"?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm " name="name">
                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-control select2" style="width: 100%;" name="parent_id">
                                <option>--Chọn danh mục---</option>
                                <option value="1">Điện thoại</option>
                                <option value="2">Máy tính</option>
                                <option value="3">Máy ảnh</option>
                                <option value="4">Phụ kiện</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục cha</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option>--Chọn danh mục---</option>
                                <option>Điện thoại</option>
                                <option>Máy tính</option>
                                <option>Máy ảnh</option>
                                <option>Phụ kiện</option>
                            </select>
                            
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả danh mục</label>
                            <textarea class="textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh danh mục</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="uploadfile" id="">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="form-group">
                            <label>Trạng thái sản phẩm</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option>--Chọn trạng thái---</option>
                                <option>Đang nhập</option>
                                <option>Mở bán</option>
                                <option>Hết hàng</option>
                            </select>
                        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-default">Huỷ bỏ</button>
                        <button type="submit" class="btn btn-sucess">Tạo mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
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
