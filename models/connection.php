<?php
    class connect{
        public function connection(){
            $servername="localhost";
            $username="root";
            $password = "";
            $dbname = "qlthuvien";

            $conn =  mysqli_connect($servername,$username,$password,$dbname);
            // if($conn->connect_errno){
            //     echo "fail" .  $conn->connect_error;
            //     exit(); 
            // }
            return $conn;
        }
    }
?>