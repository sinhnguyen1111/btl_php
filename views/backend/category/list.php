<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh mục sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
<!-- Content -->
<?php
		if(isset($_COOKIE['msg'])){?>
		<div class="alert alert-success"  style="width: 28%;">
			<strong>Thông báo: </strong>
			<?php echo $_COOKIE['msg']?>
		</div>
	<?php }?>
<div class="container-fluid">

    <!-- Main row -->
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Danh mục sản phẩm</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
               
                    <a href="index.php?mod=category&c=admin&act=create"><button class="btn btn-primary" >Thêm mới</button></a>
              
               
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>#</th>
                                <!-- <th>ID</th> -->
                                <th>Tên danh mục</th>
                                <!-- <th>Parent_id</th> -->
                                <th>Ảnh minh họa</th>
                                <th>Hành động</th>
                            </tr>
                           
                        </thead>
                        <tbody>
                          <?php
                          $i=0;
                            foreach($cate as $value){
                                $i++;
                          ?>
                          <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $value['name_category']?></td>
                           
                            <td>
                                <img src="upload/images_cate/<?php echo $value['avatar']?>" alt="" width="100px">
                            </td>
                            <td>
                                <a href="index.php?mod=category$c=admin&act=show&id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
                                <a href="index.php?c=admin&mod=category&act=edit&id=<?php echo $value['id']?>" class="btn btn-success">Edit</a>
                                <a href="index.php?c=admin&mod=category&act=delete&id=<?php echo $value['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                              
                          </tr>
                       <?php } ?>
                       
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->