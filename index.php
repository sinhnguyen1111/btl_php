<?php
class App{
	private $c="admin";//admin,client
	private $mod="home";
	private $act="index";
	private $params=[];
	public function __construct(){
		if(isset($_GET['c'])){
			$this->c = $_GET['c'];
		}
		if(isset($_GET['mod'])){
			$this->mod=$_GET['mod'];
		}
		if(isset($_GET['act'])){
			$this->act = $_GET['act'];
		}
		$this->params['id'] = isset($_GET['id']) ? $_GET['id'] : [];
	
		$data['data'] = $_POST;
		// // var_dump($data);

        // $data[] = $_FILES;

        $this->params['data'] = $data;
	}
	public function action(){
		$class  = ucfirst($this->mod).ucfirst($this->c).'Controller';
		$path = 'controllers/'.$this->c.'/'.$class.'.php';
		require_once $path;
		$obj = new $class();
		$data = $_POST;
        $this->params['data']=$data;
		call_user_func_array([$obj,$this->act],$this->params);
	}
}
$app = new App();
$app->action();
// define('URL_PATH_ADMIN','http:://ThuVienNongNghiep.com/public');
	// $c = $_GET['c'];//admin,client
	// $mod = $_GET['mod'];//chức năng
	// $act=$_GET['act'];//hành động
	

	// require_once('controllers/admin/HomeAdminController.php');
	
	// $class  = ucfirst($mod).ucfirst($c).'Controller';
	// $path = 'controllers/'.$c.'/'.$class.'.php';
	// require_once $path;
	// $obj = new $class();
	// $data = $_POST;
	// $params[] = $data;
	// call_user_func_array([$obj,$act],$params);
	



	// echo $home_obj;
	// $c = $_GET['c'];//dashboard
	// $act = $_GET['act'];


	

	
?>