<?php  require_once '../db.php';
session_start();
//require_once '../head.php';



if(isset($_POST['update'])){

  if(!empty(    ($_POST['uname']) &&  $_POST['email'] && $_POST['pass'] )){
   
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data ;
    }

    $uname=validate($_POST['uname']);
    $email=validate($_POST['email']);
    $pass=validate($_POST['pass']);


     if(strlen($uname) >22  || strlen($uname) < 7 ){
        $errors[]='username must be from 7 to 22 ';
     }

     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $errors[]='not a valid email';
      }

      if(strlen($pass) > 20 || strlen($pass < 7) ){
        $errors[]='password from 7 to 20 char or number';
      }

   

$select =" select * from users where id !=$_GET[id]  ";
$res=mysqli_query($conn , $select);

while(  ($row=mysqli_fetch_assoc($res)) > 0 ){
      
  if($row['email'] == $email){
  $errors[]='this email already exists';
  
  

  }
  
}
        if(empty($errors) ){

      $up="update users set username ='$uname', email='$email', password='$pass' where id=$_GET[id]";
       $exct= mysqli_query($conn , $up);

      if($exct ){
       
        $_SESSION['success']='record updated succesfully';
 
     header("location:../account.php");
 
     
      }else{

     
       echo "Error: " . $exct . "<br>" . mysqli_error($conn);
       die();


      }
    }
    
      


    }else{
        $errors[]='fill all the data';
    }
}

if(isset($_POST['cancel'])){
      
    $_SESSION['success']='record not updated ';
 
    header("location:../account.php");
    //session_unset();
    

}


if(isset($errors) && !empty($errors)){

    foreach($errors as $error){
        $_SESSION['error']= $error;
    }
}

$sel =" select * from users where id=$_GET[id]  ";
$res=mysqli_query($conn , $sel);

(  ($row=mysqli_fetch_assoc($res)) > 0 );
       $row['username'];
     $row['email'];
       $row['password'];


?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form   method="post"  style="width:511px;  margin-left:393px;"  >

<h3 class="modal-title">Edit Account</h3>

<?php

if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
   echo "<div class='alert alert-danger' role='alert'>
   $_SESSION[error];
   </div>";
  

}



?>

  <div class="mb-1 w-35">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"value="<?=$row['email']?>"  id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">username</label>
    <input type="text" name="uname" class="form-control" value="<?=$row['username']?> "id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="text" class="form-control" name="pass"  value="<?=$row['password'];?>" id="exampleInputPassword1">
  </div>

  <input type="submit" name="update" value="update" class="btn btn-primary"></input>
  <input type="submit"  name="cancel" value="cancel"  class="btn btn-warning"> </input>

</form>
<?php
       // session_unset();

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>