<?php
require_once ('controllers/controller.php');
require_once 'models/Category.php';
require_once 'models/Book.php';
    class HomeClientController extends Controller{
        public function index(){
            $category = new Category();
            $categories = $category->select();

            $book = new Book();
            $books = $book->select();
             $this->view('frontend/home.php',[
                 'categories'=>$categories,
                 'books'=>$books
             ]);

        }
        public function detail_book($id){
            $id= $_GET['id'];
            $detail_book = new Book();
            $detail = $detail_book->detail($id);

            $category = new Category();
            $categories = $category->select();

            $this->view('frontend/detail_book.php',[
                'categories'=>$categories,
                'detail'=>$detail
            ]);
        }
    }
?>