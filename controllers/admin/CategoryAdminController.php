<?php
require_once 'models/Category.php';
// require_once 'controllers/controller.php';
require_once 'models/upload_file.php';
require_once 'controllers/admin/AdminController.php';

    class CategoryAdminController extends AdminController{
        protected $model;
        protected $option;
        public function __construct(){
        $this->model = new Category();
        $this->option ="";

        }
        public function index(){
           
            $categories_obj= $this->model->select();
           $this->view('backend/layout/master.php',[
               'page'=>$_GET['mod'].'/list',
               'cate'=>$categories_obj
               
               ]);
        }
        public function create(){
            
            $list_cate = $this->model->select();  //Lấy ra tất cả danh mục sản phẩm
            foreach($list_cate as $item){
                if($item['parent_id']==0){ //Nếu parent_id = 0 nó sẽ là danh mục cha
                    $this->option .= "<option value='".$item['id']."'>".$item['name_category']."</option>";
                   
                }
                foreach($list_cate as $item1){
                    if($item1['parent_id']==$item['id']){ // nếu parent id = id của danh mục khác thì nó sẽ là danh mục con
                        $this->option.="<option value='".$item1['id']."'>"."--".$item1['name_category']."</option>" ;
                    }
                }
            }
            // echo $this->option;
            $this->view('backend/category/create.php',[
                'option'=>$this->option
                
                ]);
        }
        public function store($data){
            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_cate','avatar');
                $data['data']['avatar']=$upload_obj;
                $data['data']['name_category']=$_POST['name'];
                $data['data']['parent_id']=$_POST['parent_id'];
                $data['data']['slug']=$this->to_slug($data['data']['name_category']);
                $data['data']['content']=$_POST['content'];
              
            $create = $this->model->insert($data['data']);
            header('Location: index.php?mod=category&c=admin&act=index');
        }
        public function edit($id){ 
            $id = $_GET['id'];
            $list_cate = $this->model->select();  //Lấy ra tất cả danh mục sản phẩm
            foreach($list_cate as $item){
                if($item['parent_id']==0){ //Nếu parent_id = 0 nó sẽ là danh mục cha
                    $this->option .= "<option value='".$item['id']."'>".$item['name_category']."</option>";
                   
                }
                foreach($list_cate as $item1){
                    if($item1['parent_id']==$item['id']){ // nếu parent id = id của danh mục khác thì nó sẽ là danh mục con
                        $this->option.="<option value='".$item1['id']."'>"."--".$item1['name_category']."</option>" ;
                    }
                }
            }
            // $category = new Category();
            $edit = $this->model->find($id);
            $this->view('backend/category/edit.php',[
                'category'=>$edit,
                'option'=>$this->option,
                ]);
        }
        public function update(){
            $data=$_POST;
            // $categories = new Category();
            $update = $this->model->update($data);
            header('Location: index.php?mod=category&c=admin&act=index');
        }
        public function delete($id){
            // $categories = new Category();
            $delete = $this->model->delete($id);
            header('Location: index.php?mod=category&c=admin&act=index');
        }
    }
?>