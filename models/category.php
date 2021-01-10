<?php
require_once 'connection.php';
require_once 'models/upload_file.php';
    class Category {
        protected $conn;
        public function __construct(){
            $connection = new connect();
            $this->conn = $connection->connection();
        }
        public function select(){
            $query  = "select * from categories";
           
            $result = $this->conn->query($query);
            $data = array();
            while($row=$result->fetch_assoc()){
                $data[]=$row;
            }
            return $data;
        }
        public function insert($data){
            $data = $_POST;
            // var_dump($data);
            // return $data;
            // die()
            $upload = new Upload();
            $upload_obj = $upload->upload_file('upload/images_cate','uploadfile');
            
            // $data['data']['uploadfile'] = $upload_obj;
            // var_dump($upload_obj);
            // die();
            // $data['data']['uploadfile']=$upload_obj;
            
            $query ="insert into categories (name,parent_id,avatar) values ('".$data['name']."','".$data['parent_id']."','".$upload_obj."')";
           
        //    echo($query);
        //    die(); // $connection = new connect();
            // $conn = $connection->connection();
            $result = $this->conn->query($query);
            return $result;
        }

        public function update(){
            $data=$_POST;
            $query = "update categories set name='".$data['name']."',parent_id='".$data['parent_id']."',avatar='".$data['uploadfile']."' where id=".$data['id'];
            // echo $query;
            // die();
            // $connection = new connect();
            // $conn = $connection->connection();
            $result = $this->conn->query($query);
            return $result;
        }
        public function delete($id){
            $id = $_GET['id'];
            $query = "DELETE from categories where id=".$id;
            // echo $query;
            // die();
        //     $connection = new connect();
        // $conn = $connection->connection();
        $result = $this->conn->query($query);
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
		// $result = $this->conn->query($query);
		$row = $result->fetch_assoc();
		return $row;

        }
    }
?>