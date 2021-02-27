<?php
// 
require_once 'controllers/controller.php';
 class AdminController extends Controller{
    public function __construct(){
		if($_SESSION['login']==0)
		{	
			// $_SESSION['fg']="rtui";

			// echo 	$_SESSION['fg'];
			// die();	
			header('location: ?mod=auth&c=admin&act=login');
		}
	}
 }
?>