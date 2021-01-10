<?php
    class Controller{
        public function view($path,$data=[]){
            extract($data);
            require_once 'views/'.$path;
        }
    }
?>