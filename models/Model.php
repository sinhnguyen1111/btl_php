<?php
require_once 'models/upload_file.php';
require_once 'models/Connection.php';
class Model{
    protected $conn;
    protected $table;
    public function __construct(){
        $connection = new Connection();
        $this->conn = $connection->connect();
    }
    public function select(){
        $query = "select * from $this->table order by created_at DESC";
        $result = $this->conn->query($query);
        $data=array();
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
        return $data;
    }
//================================================================
     public function insert($data){
        $query = "insert into $this->table";

        $string1 = "";
        $string2 = "";
        $i=0;
        foreach($data as $column=>$value){
            $i++;
            $string1.=$column;
            if($i!=count($data)){
                $string1.=',';
            }

            $string2.= "'" .$value. "'";
            if($i!=count($data)){
                $string2.=',';
            }
        }
        
        $string = '('.$string1.')'.' values '.' ('.$string2.')';
        $query.=$string;
       
        $result = $this->conn->query($query);
        if($result){
            setcookie('msg','Thêm mới thành công',time()+5);
        }
        else{
            setcookie('msg','Thêm mới không thành công',time()+5);
        }
        return $result;
       
    }
//==================================================================
    public function show_edit($id) {
        $query = "SELECT * FROM $this->table where id = " . $id;

        // echo $query;die();

        $result = $this->conn->query($query);
    
        $status = $result->fetch_assoc();
        return $status;
    }
//===============================================================
    public function update($data){
        
		$query = "UPDATE $this->table SET ";
		$string_1='';
		$string_2='';
		$i=0;
		foreach ($data as $column => $value) {
			$i++;
			$string_1 .= $column."="."'".$value."'";
			if($i!=count($data)){
				$string_1 .= ",";

			}
			$string_2 = " WHERE id =".$data['id'];
		}
		$string = $string_1.$string_2;
        $query = $query.$string;
//    echo $query;
//    die();
		$result = $this->conn->query($query);
		return $result;

    }
//=======================================================
    public function delete($id){
        $query = "DELETE FROM $this->table where id = " . $id;
        // echo $query;
        // die();
        $result = $this->conn->query($query);
        if($result) {
            setcookie('msg',"Xóa thành công",time() + 2);
        } else {
            setcookie('msg',"Xóa không thành công",time() + 2);
        }
        
        return $result;
    }
 //=====================================
    public function detail($id){
        $query = "SELECT * FROM  $this->table where id = " . $id;

        // echo $query;
        // die();
        
        $result = $this->conn->query($query);

        $data = $result->fetch_assoc();

        return $data;
    }
//=============================================
    public function getUserByName($email) {
        $query = "SELECT * FROM $this->table where email=" . "'" .  $email . "'";

        $result = $this->conn->query($query);
        $user = $result->fetch_assoc();
        return $user;
    }
//=========================================
    public function search($name){
        $name = $_POST['search'];
        // books inner join categories where books.category_id = categories.id AND name LIKE '%s%' order by name DESC
        $query = "select * from $this->table inner join categories where books.category_id = categories.id AND name LIKE '%".$name."%' order by name DESC";
        $result = $this->conn->query($query);

        $categories = array();
        while($row = $result->fetch_assoc()){
             $categories[]=$row;
        }
        return $categories;
    }
//=========================================================
public function select_category(){
    $query = "select books.id,books.name,books.author,books.title,books.content,books.quanlity,books.image,books.created_at,categories.name_category from books inner join categories on books.category_id = categories.id";
    // echo $query;
    // die();
    $result = $this->conn->query($query);
    $categories = array();
   while($row = $result->fetch_assoc()){
        $categories[]=$row;
   }
   return $categories;
}
//=============================================================
public function getBookNew(){
    $query = "select * from $this->table  ORDER BY created_at DESC limit 5";
    // echo $query;
    // die();
    $result = $this->conn->query($query);
    $book = array();
    while($row = $result->fetch_assoc()){
        $book[]=$row;
   }
   return $book;


    // echo $query;
}

}

?>