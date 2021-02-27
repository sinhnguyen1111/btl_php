<?php
require_once 'models/Connection.php';
require_once 'models/Model.php';
// require_once 'models/upload_file.php';
    class Category extends Model{
      
        
        public function __construct(){
           parent::__construct();//Kế thừa lại biến connection của class Model
           $this->table = 'categories';
        }

        public function update($data){
            $data=$_POST;

            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
           
            $query = "update categories set name_category='".$data['name']."',parent_id='".$data['parent_id']."',content='".$data['content']."',avatar='".$upload_obj."' where id=".$data['id'];

            $result = $this->conn->query($query);
            if($result) {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            } else {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            }
            return $result;
        }

        public function find($id){
            $id = $_GET['id'];
            $query = "SELECT * FROM categories WHERE id=".$id;
        // echo $query;
        // die();
        // $connection = new connect();
        // $conn = $connection->connection();
            $result = $this->conn->query($query);
		    $row = $result->fetch_assoc();
		    return $row;

        }
        
    }
?>