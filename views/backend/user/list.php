<div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="" class="btn btn-primary">Danh sách người dùng</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Avatar</th>
            </thead>
            <?php foreach ($list_user as $value) {?>

            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['adress']?></td>
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