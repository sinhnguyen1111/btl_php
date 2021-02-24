<h4 class="h4 mb-4 text-gray-800 lol">User Detail</h4>
<div class="card shadow mb-4">
    <div class="container">
    <h3></h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Card_id</th>
                    <th>avatar</th>
                    <th>role</th>
                    <th>phone</th>
                    <th>book_id</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $user_detail['id']  ?></td>
                    <td><?php echo $user_detail['name']  ?></td>
                    <td><?php echo $user_detail['email']  ?></td>
                    <td><?php echo $user_detail['password']  ?></td>
                    <td><?php echo $user_detail['card_id']  ?></td>
                    <td>
                        <img src="upload/images_user/<?php echo $user_detail['avatar']  ?>" alt="" style="width: 150px; height: 200px;">
                    </td>
                    <td><?php echo $user_detail['role']  ?></td>
                    <td><?php echo $user_detail['phone']  ?></td>
                    <td><?php echo $user_detail['book_id']  ?></td>
                    <td><?php echo $user_detail['role']  ?></td>
                   
                    <td><?php echo $user_detail['created_at']  ?></td>
                </tr>
            </tbody>
    </table>
    <a href="?mod=user&c=admin&act=index"><button class="btn btn-danger"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
    <h3></h3>
    </div>
</div>