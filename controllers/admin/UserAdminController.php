<?php
// require_once 'controllers/controller.php';
require_once 'models/User.php';
require_once 'models/upload_file.php';
require_once 'controllers/admin/AdminController.php';
class UserAdminController extends AdminController{
    protected $model;
    public function __construct(){
        $this->model = new User();
    }
    public function index(){
        $list_user = $this->model->select();

        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/list',
            'list_user'=>$list_user,
            ]);
    }
    public function create(){
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/create',
        ]);
    }
    public function store($data){
        $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_user','avatar');
                $data['data']['avatar']=$upload_obj;
                $data['data']['name']=$_POST['name'];
                $data['data']['email']=$_POST['email'];
                $data['data']['password']=$_POST['password'];
                $data['data']['adress']=$_POST['address'];
                $data['data']['role']=$_POST['role'];
            
            $create_user = $this->model->insert($data['data']);
           
            header('Location: index.php?mod=user&c=admin&act=index');
    }
    public function edit($id){
        $id = $_GET['id'];

        $user_id= $this->model->show_edit($id);
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/edit',
            'user_id'=>$user_id,
        ]);

    } 
    public function update($data){
        $data=$_POST;
        $user = new User();
        $user_up = $user->update($data);
    //     $update_user = $this->model->update($data['data']);
        header('Location: index.php?mod=user&c=admin&act=index');
    }
    public function delete($id){
        $user_delete = $this->model->delete($id);
        header('Location: index.php?mod=user&c=admin&act=index');
    }
    public function show($id){
        $user_detail = $this->model->detail($id);
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/detail',
            'user_detail'=>$user_detail,
        ]);
    }
    public function timKiem(){
        $search = $this->model->search($name);
       
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/list',
            'list_user'=>$list_user,
            ]);
    }
   
}
?>