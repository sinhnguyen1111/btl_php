<div class="container">
        <h3 class="text-center">----Quản lý sách----</h3>
        <a href="" class="btn btn-primary">Danh sách  các loại sách</a>
        <?php
		if(isset($_COOKIE['msg'])){?>
		<div class="alert alert-success" style="width: 28%; float: right;">
			<strong>Thông báo: </strong>
			<?php echo $_COOKIE['msg']?>
		</div>
	<?php }?>
       
            <form action="index.php?mod=book&c=admin&act=search_book" method="post">
            
                <div class="input-group input-group-sm" style="width: 300px;">
                
                    <input type="text" name="search" class="form-control float-right" placeholder="Tìm kiếm theo tên sách, tác giả,..">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        
        <table class="table">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Title</th>
                <th>Author</th>
                <th>Danh mục</th>
                <th>Quanlity</th>
                <th>Bìa sách</th>
            </thead>
            <?php 
            $i=0;
            
            foreach ($list_book as $value) {
                $i++;
                
                ?>
            <tr>
                <td><?php echo $i?></td>
                <td><a href=""><?php echo $value['name']?></a></td>
                <td><?php echo $value['title']?></td>
                <td><?php echo $value['author']?></td>
                <td><?php echo $value['name_category']?></td>
                <td><?php echo $value['quanlity']?></td>
                <td>
                    <img src="upload/images_user/<?php echo $value['image']?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="index.php?mod=book&c=admin&act=show&id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=book&c=admin&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?mod=book&c=admin&act=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php }?>

		        
        </table>
    </div>