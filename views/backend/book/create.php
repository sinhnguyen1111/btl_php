

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">---Thêm mới sách---</h1>
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
                    <h3 class="card-title">Thêm mới sách</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?php echo "?c=admin&mod=book&act=store"?>" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sách</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm " name="name">
                        </div>
                        <div class="form-group">
                            <label>Danh mục sản phẩm</label>
                            <select class="form-control select2" style="width: 100%;" name="category_id">
                                <option value="0"><?php echo $option?></option>
                                
                                   

                                <!-- <option value="1">Điện thoại</option>
                                <option value="2">Máy tính</option>
                                <option value="3">Máy ảnh</option>
                                <option value="4">Phụ kiện</option> -->
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả sách</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm " name="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nội dung sách</label>
                            <textarea class="textarea" placeholder="Place some text here" name="content"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tác giả</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm " name="author">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số lượng</label>
                            <input type="text" class="form-control" id="" placeholder="Điền tên sản phẩm " name="quanlity">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Hình ảnh bìa sách</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="avatar" id="">
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
   
