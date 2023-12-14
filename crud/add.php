
<?php  require_once '../db.php';
session_start();
$errors=[];
if(isset($_POST['add'])){
  if(!empty( $_POST['uname'] && $_POST['email'] && $_POST['pass']  )){


    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data ;
    }

    $uname=validate($_POST['uname']);
    $email=validate($_POST['email']);
    $pass=validate($_POST['pass']);
    $type=validate($_POST['type']);


     if(strlen($uname) >22  || strlen($uname) < 7 ){
        $errors[]='username must be from 7 to 22 ';
     }

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $errors[]='not a valid email';

      }

      if(strlen($pass) > 20 || strlen($pass < 7) ){
        $errors[]='password from 7 to 20 char or number';

      }else{
      //  $pass=password_hash($pass,PASSWORD_DEFAULT);
      }

      $select =" select email from users ";
      $res=mysqli_query($conn , $select);
      
      if(($row=mysqli_fetch_assoc($res)) > 0 ){
      
        if($row['email'] == $email){
        $errors[]='this email already exists';
        
        }
    }


                
    if(isset($_FILES['image']['name'])  && !empty($_FILES['image']['name']) ){
        
       $allowed_ext = ['png' , 'jpg','jpeg'];
       $myimg = $_FILES['image'];
       $img_size = $myimg['size'];
       $img_tmp = $myimg['tmp_name'];
      $img_name = uniqid() . $myimg['name'];
         
       var_dump($errors);
       // to get image ext

       if($myimg['error'] === 0 ){

       $img_expload = explode('.', $img_name);
       $img_end_ext = end($img_expload);
       $img_ext = strtolower($img_end_ext);
       


     if(!in_array($img_ext, $allowed_ext)) {
        $errors[] = 'plz upload file png or jpg';
     }
      //  move_uploaded_file($img_tmp, '../uploads/imgs/'. $img_name);
     }
    

      if($img_size > 2097152) {
        $errors[] = 'plz upload file less than 2 miga';
           }

         if(empty($errors) && isset($_FILES['image']['name'])   ){
          move_uploaded_file($img_tmp, '../uploads/imgs/'. $img_name);


            $stat = "insert into users (username ,email, password , img) values
             ('$uname' ,'$email', '$pass' , '$img_name')";
              $query = mysqli_query($conn, $stat);

            header('location:../home.php');
          if($query){
            $_SESSION['success']='record added succesfully';

            header("location:../home.php");
        
  
       }
    }

    }else{
      
      $ins = "insert into users (username ,email, password ) values  ('$uname' ,'$email', '$pass' )";
       $query = mysqli_query($conn, $ins);
       
       if($query){
      $_SESSION['uname']=$uname;
      $_SESSION['email']=$email;
      $_SESSION['pass']=$pass;
       header('location:../home.php');
        exit();
  }
}
   
           
    }else{
        $errors[]='fill all the data';
    }

        

}

if(isset($_POST['cancel'])){
    $_SESSION['success']='record  not added';

    header("location:../home.php");
}

if(isset($errors ) && !empty($errors) ):
  foreach($errors as $error):
     $_SESSION['error']=$error;
 header("location:../home.php");
  endforeach;
endif;
?>


