<?php
require_once('controllers/controller.php');
    class HomeAdminController extends Controller{
        public function index(){
			$this->view ('backend/layout/master.php',['page'=>'dashboard']);
        }
    }
?>