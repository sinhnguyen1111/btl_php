<?php
require_once 'models/Model.php';
require_once 'models/upload_file.php';
     class Book extends Model{
        protected $table;
        public function __construct(){
            parent::__construct();
            $this->table="books";
        }
        public function update($data){
            $data=$_POST;
            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_user','avatar');
            $query = "update books set name='".$data['name']."',title='".$data['title']."',content='".$data['content']."',category_id='".$data['category_id']."',author='".$data['author']."',quanlity='".$data['quanlity']."',image='".$upload_obj."' where id=".$data['id'];
         
            $result = $this->conn->query($query);
            if($result) {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            } else {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            }
            return $result;
        }
     }
?>