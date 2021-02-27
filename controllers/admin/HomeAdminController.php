<?php
// require_once 'controllers/controller.php';
require_once 'models/Book.php';
require_once 'controllers/admin/AdminController.php';


    class HomeAdminController extends AdminController{
        public function index(){
            $book = new Book();
            $books = $book->getBookNew();
            // var_dump($books);
            // die();
			$this->view ('backend/layout/master.php',[
                'page'=>'dashboard',
                'books'=>$books,
                ]);
        }
       
    }
?>