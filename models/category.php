<?php
require_once 'models/Connection.php';
require_once 'models/Model.php';
// require_once 'models/upload_file.php';
    class Category extends Model{
      
        
        public function __construct(){
           parent::__construct();//Kế thừa lại biến connection của class Model
           $this->table = 'categories';
        }

        // public function getAll(){
        //     return $this->select($this->table);
        //     // $query  = "select * from categories";
           
        //     // $result = $this->conn->query($query);
        //     // $data = array();
        //     // while($row=$result->fetch_assoc()){
        //     //     $data[]=$row;
        //     // }
        //     // return $data;
        // }

        // public function addCategory(){
        //     // die();
          
            
            
        //     $upload = new Upload();
        //     $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
        //     $data['data']['avatar']=$upload_obj;
        //     // $upload = new Upload();
        //     // $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
            
        //     // $query ="insert into categories (name,parent_id,content,avatar) values ('".$data['name']."','".$data['parent_id']."','".$data['content']."','".$upload_obj."')";
        //     // $result = $this->conn->query($query);
        //     // return $result;
        //     return $this->insert($this->table,$data['data']);
        // }

        public function update($data){
            $data=$_POST;

            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
           
            $query = "update categories set name='".$data['name']."',parent_id='".$data['parent_id']."',content='".$data['content']."',avatar='".$upload_obj."' where id=".$data['id'];

            $result = $this->conn->query($query);
            return $result;
        }

        public function delete($id){
            $id = $_GET['id'];
            $query = "DELETE from categories where id=".$id;
            
            $result = $this->conn->query($query);
            return $result;
        }
        //Tìm một bản ghi
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
        public function slug(){}
    }
?>