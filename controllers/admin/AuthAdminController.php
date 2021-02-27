<?php

require_once 'controllers/controller.php';
require_once 'models/User.php';
    class AuthAdminController extends Controller{
        public function login(){
            $this->view('backend/auth/login.php',[]);
        }
        public function checklogin(){
            
                $email_login= $_POST['email'];
                
                $password_login = $_POST['password'];
                
                $usermodel = new User();
                $users = $usermodel->getUserByName($email_login);
                // var_dump($users );
                // die();
                if($users){
                    if($users['password']==$password_login){
                        $_SESSION['login']=1;
                        $_SESSION['auth'] = $users;
                        $_SESSION['role'] = $users["role"];
                        if(isset($_POST['remember'])){
                            setcookie("email",$email_login);
                            setcookie("password",$password_login);
                        }
                        if($_SESSION['role']=="Admin"){
                            header('location: index.php?mod=home&c=admin&act=index');
                        }
                        // if($_SESSION['role']=="User"){
                        //     header('location: index.php?mod=home&c=client&act=index');
                        // }
                        
//                         echo $_SESSION['login'];
// die();  
                        
                        
                    }
                    else{
                        $_SESSION['login']=0;
                        // echo $_SESSION['login'];
                        // die();  
                        setcookie('msg','Mật khẩu không chính xác hoặc bạn chưa đăng ký!',time()+5);
                        header('location: index.php?mod=auth&c=admin&act=login');
                    }
                }
                else{
                    $_SESSION['login']=0;
                    // echo $_SESSION['login'];
                    // die(); 
                        setcookie('msg','Email đăng nhập không chính xác hoặc bạn chưa đăng ký!',time()+5);
                        header('location: index.php?mod=auth&c=admin&act=login');
                }
              
        }




        public function register(){
            $this->view('admin/auth/register.php',[]);
        }
        public function checkRegister(){
            if(isset($_POST['registerbtn'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirmpassword'];
                // echo $password;
                // $data = $_POST;

                // $register_model = new Model();
                // $register = $register_model->insert('register',$data);

                $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
                // echo $query;
                // die();
                $register_model = new Connection();
                $conn =$register_model->connect();
                $result = $conn->query($query);
                
                if($password ==$confirm_password){
                    if($result){
                        $_SESSION['register'] = "add";
                        setcookie('msg','Đăng ký thành công. Đăng nhập lại!',time()+5);
                        header('location: index.php?mod=admin&c=auth&act=login');
                    }
                    else{
                        $_SESSION['status'] = false;
                        setcookie('msg','Không thành công!',time()+5);
                        header('location: index.php?mod=admin&c=auth&act=register');
                    }
                
                }
                else{
                    $_SESSION['status']=false;
                    setcookie('msg','Mật khẩu không khớp',time()+5);
                    header('location: index.php?mod=admin&c=auth&act=register');
                }
            }
                
            
        }
        
        public function logout()
       {
           if(isset($_POST['btn_logout'])){
        $_SESSION['login'] = 0;

                session_destroy();
                unset($_SESSION['auth']); 
               
                header('location:index.php?mod=auth&c=admin&act=login');


           }
        // //     if (isset($_SESSION['auth'])){
        //         unset($_SESSION['auth']); 
        //         unset($_SESSION['avatar']);
        // //   
        //     header('location:index.php?mod=auth&c=admin&act=login');
        // }
       }
    }

?>