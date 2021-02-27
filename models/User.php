<?php
require_once 'models/Connection.php';
require_once 'models/Model.php';
// require_once 'models/upload_file.php';
    class User extends Model{
        protected $table;
        public function __construct(){
            parent::__construct();//Kế thừa lại biến connection của class Model
            $this->table = 'users';
         }
         public function update($data){
            $data=$_POST;
            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_user','avatar');
            $query = "update users set name='".$data['name']."',card_id='".$data['card_id']."',email='".$data['email']."',password='".$data['password']."',adress='".$data['adress']."',role='".$data['role']."',avatar='".$upload_obj."' where id=".$data['id'];
         
            $result = $this->conn->query($query);
            if($result) {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            } else {
                setcookie('msg',"Chỉnh sửa thành công",time() + 2);
            }
            return $result;
        }
        // public function getUserByEmail($email_login){
        //     return $this->getEmail($this->table,$email_login);
        // }
    }
?>