<?php
require_once 'models/category.php';
require_once 'controllers/controller.php';
require_once 'models/upload_file.php';

    class CategoryAdminController extends Controller{
        public function index(){
            $categories = new Category();
            $categories_obj= $categories->select();
           $this->view('backend/layout/master.php',[
               'page'=>'includes/'.$_GET['mod'],
               'cate'=>$categories_obj
               
               ]);
        }
        public function create(){
            $this->view('backend/category/create.php',[
                ]);
        }
        public function store($data){
            
            // var_dump($target_file);
          
            // var_dump($data['data']['uploadfile']);
            // die();
            // $upload = new Upload();
            // $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
            // $data['data']['uploadfile']=$upload_obj;
            $categories = new Category();
            $create = $categories->insert($data);
            header('Location: index.php?mod=category&c=admin&act=index');
        }
        public function edit($id){ 
            $id = $_GET['id'];
            // echo $id;
            $category = new Category();
            $edit = $category->find($id);
            // print_r($edit);

            $this->view('backend/category/edit.php',['category'=>$edit]);
        }
        public function update(){
            // $id = $_GET['id'];
            // echo $id;
            // die();
            $data=$_POST;
            
            
            $categories = new Category();
            $update = $categories->update($data);
            header('Location: index.php?mod=category&c=admin&act=index');
        }

        public function delete($id){
            $categories = new Category();
            $delete = $categories->delete($id);
            header('Location: index.php?mod=category&c=admin&act=index');
        }
    }
?>