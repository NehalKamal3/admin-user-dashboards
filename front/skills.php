<?php
require_once '../db.php';
session_start();

$errors=[];
if(isset($_POST['sub'])){

  if(!empty( $_POST['skilln']  )){


    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data ;
    }

    $sname=validate($_POST['skilln']);

     if(strlen($sname) >33  || strlen($sname) < 3 ){
        $errors[]='skill name too short or long ';
     }

                
     if(isset($_FILES['simage']['name'])  ){
        $allowed_ext = ['png' , 'jpg','jpeg'];
        $myimg = $_FILES['simage'];
        $img_size = $myimg['size'];
        $img_tmp = $myimg['tmp_name'];
       $img_name = uniqid() . $myimg['name'];
        // to get image ext
 
        if($myimg['error'] === 0 ){
 
        $img_expload = explode('.', $img_name);
        $img_end_ext = end($img_expload);
        $img_ext = strtolower($img_end_ext);
        
      if(!in_array($img_ext, $allowed_ext)) {
         $errors[] = 'plz upload file png or jpg';
      }
        move_uploaded_file($img_tmp, 'assets/img/icons/'. $img_name);
      }
     
 
       if($img_size > 2097152) {
         $errors[] = 'plz upload file less than 2 miga';
            }
 
       
 }
    

 // cv

  
 if(isset($_FILES['cv']['name']) && !empty($_FILES['cv']['name'])   ){
 
     $allowed_ext = ['pdf' , 'word','docx'];
     $myimg = $_FILES['cv'];
     $img_size = $myimg['size'];
     $img_tmp = $myimg['tmp_name'];
   // $cv_name = uniqid() . $myimg['name'];
    $cv_name = $myimg['name'];

     // to get image ext

     if($myimg['error'] === 0 ){

     $img_expload = explode('.', $cv_name);
     $img_end_ext = end($img_expload);
     $img_ext = strtolower($img_end_ext);
     
   if(!in_array($img_ext, $allowed_ext)) {
      $errors[] = 'plz upload file pdf or word';
   }
 //  move_uploaded_file($img_tmp, '../uploads/skills/'. $cv_name);
}

    if($img_size > 2097152) {
      $errors[] = 'plz upload file less than 2 miga';
         }
         $Path2 = '../uploads/skills/'.$cv_name;  

         $Path = '../uploads/skills/'.$cv_name;  
         
         if (file_exists($Path)){


        if(  unlink($Path) ){

  
          }
     
          } 
               move_uploaded_file($img_tmp, $Path2);

          $stat3 = "insert into skills (skill_name,skill_img ,skill_file,user_id) values 
          ('$sname' ,'$img_name' ,'$cv_name','$_SESSION[id]' )";    
           $query3 = mysqli_query($conn, $stat3);
          header('location:index.php');
          
     
}else{

  
  $ins = "insert into skills (skill_name ,skill_img,user_id ) values  ('$sname' ,'$img_name','$_SESSION[id]' )";
  $query = mysqli_query($conn, $ins);
  
  if($query){

  header('location:index.php');

  }

}
            
     }else{
         $errors[]='fill all the data';
     }

        

}
