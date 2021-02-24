<?php
    class Connection{
        private $servername;
        private $username;
        private $password;
        private $dbname;

            function __construct() {
                $this->servername = 'localhost';
                $this->username = 'root';
                $this->password = '';
                $this->dbname = 'qlthuvien';
            }
    
           
            function connect(){

            $conn =  mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
            // if($conn->connect_errno){
            //     echo "fail" .  $conn->connect_error;
            //     exit(); 
            // }
            return $conn;
        }
    }
?>