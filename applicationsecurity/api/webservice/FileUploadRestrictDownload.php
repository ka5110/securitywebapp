<?php

if(isset($_FILES['cv'])){
    $errors= array();
    $file_name = $_FILES['cv']['name'];
    $file_size = $_FILES['cv']['size'];
    $file_tmp = $_FILES['cv']['tmp_name'];
    $file_type = $_FILES['cv']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['cv']['name'])));

    $extensions= array("docx","pdf");
      
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a docx or pdf file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be excately 2 MB';
    }
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"./uploadFiles/".$file_name);
       echo "Success";
    }else{
       print_r($errors);
    }
 }
?>


