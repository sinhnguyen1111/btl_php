<?php
    class Upload{
        public function upload_file($target_dir,$input_name,$max_size=null, $formats_allowed_array=null){
        //    $uploadOK=1;
        //     $error = array();
            // $target_dir = "upload/images_cate/";
            $target_file=$target_dir.'/'.basename($_FILES[$input_name]['name']);
            // echo $target_file;
            // var_dump($upload);
            // die();
            // if(file_exists($target_file)){
            //     echo "File da ton tai";
            //     $uploadOK=0;
            // }
            // if($uploadOK){
            
            $upload=move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
              
            // }
            // else{
            //    $error[]="Loi";
            // }
            return basename($_FILES[$input_name]['name']);

        }

    }
?>