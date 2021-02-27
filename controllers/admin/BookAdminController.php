<?php
require_once 'controllers/admin/AdminController.php';
require_once 'models/Book.php';
require_once 'models/Category.php';
require_once 'models/upload_file.php';

class BookAdminController extends AdminController{
   
    protected $model;
    protected $option="";
    public function __construct(){
        $this->model  = new Book();
    }
//=====================================================================
    public function index(){
        $list_book= $this->model->select_category();
        // var_dump($list_book);
        // echo "<pre>";
        // print_r($list_book);
        // echo "</pre>";
            $this->view('backend/layout/master.php',[
                'page'=>$_GET['mod'].'/list',
                'list_book'=>$list_book,
            ]);
        
    }
//=====================================================================
    public function create(){
        $list = new Category();
        $list_cate = $list->select();  //Lấy ra tất cả danh mục sản phẩm
        // var_dump($list_cate);
        // die();
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
         
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/create',
            'option'=>$this->option,
        ]);
    }
//=====================================================================
    public function store($data){
        $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_user','avatar');
                $data['data']['image']=$upload_obj;
                $data['data']['name']=$_POST['name'];
                $data['data']['title']=$_POST['title'];
                $data['data']['author']=$_POST['author'];
                $data['data']['content']=$_POST['content'];
                $data['data']['slug']=$this->to_slug($data['data']['name']);
                $data['data']['category_id']=$_POST['category_id'];
                $data['data']['quanlity']=$_POST['quanlity'];
            
            $create_user = $this->model->insert($data['data']);
           
            header('Location: index.php?mod=book&c=admin&act=index');
    }
//=====================================================================
    public function edit($id){
        $id = $_GET['id'];
        $list = new Category();
        $list_cate = $list->select();  //Lấy ra tất cả danh mục sản phẩm
        // var_dump($list_cate);
        // die();
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

        $book_id= $this->model->show_edit($id);
        $this->view('backend/layout/master.php',[
            'page'=>$_GET['mod'].'/edit',
            'book_id'=>$book_id,
            'option'=>$this->option
        ]);

    } 
//=====================================================================
    public function update($data){
        $book_edit = $this->model->update($data);
    //     $update_user = $this->model->update($data['data']);
        header('Location: index.php?mod=book&c=admin&act=index');
    }
//=====================================================================
    public function delete($id){
        $book_delete = $this->model->delete($id);
        header('Location: index.php?mod=book&c=admin&act=index');
    }
    public function search_book($name){
        // $name = $_GET['$name'];
        if(isset($_POST['search'])){
            $list_book = $this->model->search($name);
            
            $this->view('backend/layout/master.php',[
                'page'=>$_GET['mod'].'/list',
                'list_book'=>$list_book,
            ]);

        }
        
        

    }

}
?>