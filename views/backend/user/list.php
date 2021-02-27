<div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="" class="btn btn-primary">Danh sách người dùng</a>
        <?php
		if(isset($_COOKIE['msg'])){?>
		<div class="alert alert-success" style="width: 28%; float: right;">
			<strong>Thông báo: </strong>
			<?php echo $_COOKIE['msg']?>
		</div>
	<?php }?>
       
            <form action="index.php?mod=user&c=admin&act=index&search=<?php echo $list_user['name']?>" method="get">
            
                <div class="input-group input-group-sm" style="width: 300px;">
                
                    <input type="text" name="search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Role</th>
                <th>Avatar</th>
            </thead>
            <?php 
                 $i=0;
                foreach ($list_user as $value) {
                     $i++;    
            ?>
            
            <tr>
                <td><?php echo $i?></td>
                <td><a href=""><?php echo $value['name']?></a></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['adress']?></td>
                <td><?php echo $value['role']?></td>
                <td>
                    <img src="upload/images_user/<?php echo $value['avatar']?>" width="100px" height="100px">
                </td>
                <td>
                    <a href="index.php?mod=user&c=admin&act=show&id=<?php echo $value['id']?>" class="btn btn-primary">Detail</a>
                    <a href="index.php?mod=user&c=admin&act=edit&id=<?php echo $value['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="index.php?mod=user&c=admin&act=delete&id=<?php echo $value['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php }?>

		        
        </table>
    </div>