<?php  require_once '../db.php';
session_start();

if(isset($_POST['update'])){

  if(!empty(($_POST['name'])  && ($_POST['disc'])  )){
   
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data ;
    }

    $name=validate($_POST['name']);
    $disc=validate($_POST['disc']);


    /* if(strlen($name) >22  || strlen($name) < 3 ){
      //  $errors[]='username must be from 7 to 22 ';
     }*/

   
   

$select =" select * from services where ser_id !=$_GET[id]  ";
$res=mysqli_query($conn , $select);

while(  ($row=mysqli_fetch_assoc($res)) > 0 ){
      
  if($row['ser_name'] == $name){
  $errors[]='this service already exists';
  
  

  }
  
}

             
if(isset($_FILES['image']['name'])  && !empty($_FILES['image']['name']) ){
        
    $allowed_ext = ['png' , 'jpg','jpeg'];
    $myimg = $_FILES['image'];
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
 // move_uploaded_file($img_tmp, '../assets/img/icons/'. $img_name);

}
 

   if($img_size > 2097152) {
     $errors[] = 'plz upload file less than 2 miga';
        }

        move_uploaded_file($img_tmp, '../front/assets/img/serv/'. $img_name);


       $up="update services set ser_name ='$name', ser_img='$img_name' , ser_disc='$disc' where ser_id=$_GET[id]";
       $exct= mysqli_query($conn , $up);
       var_dump($up);

      if($exct ){
       
        $_SESSION['success']='service updated succesfully';
 
     header("location:../account.php");
 
      }

/*
        if(empty($errors) ){

      $up="update skills set username ='$uname', email='$email', password='$pass' where id=$_GET[id]";
       $exct= mysqli_query($conn , $up);

      if($exct ){
       
        $_SESSION['success']='record updated succesfully';
 
     header("location:../account.php");
 
     
      }else{

     
       echo "Error: " . $exct . "<br>" . mysqli_error($conn);
       die();


      }
    }*/
      
      
    }else{
        $errors[]='fill all the data';
    }

    }else{
        $errors[]='fill all the data';
    }
}

if(isset($_POST['cancel'])){
      
    $_SESSION['success']='skill not updated ';
 
    header("location:../account.php");
    //session_unset();
    

}

  

$sel =" select * from services where ser_id=$_GET[id]  ";
$res=mysqli_query($conn , $sel);

  $row=mysqli_fetch_assoc($res) ;
  


?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form   method="post" enctype="multipart/form-data" style="width:511px;  margin-left:393px;"  >

<h3 class="modal-title">Edit service</h3>

<?php

if(isset($errors ) && !empty($errors) ):
      foreach($errors as $error):
       echo "<div class='alert alert-danger' role='alert'>
         $error
     
</div>";
      endforeach;
endif;
?>


  <div class="mb-1 w-35">
    <label for="" class="form-label">service name</label>
    <input type="text" class="form-control" name="name"value="<?=$row['ser_name']?>"   >
  
  </div>
  <div class="mb-1 w-35">
    <label for="" class="form-label">service discription</label>
    <input type="text" class="form-control" name="disc"value="<?=$row['ser_disc']?>"   >
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">service image</label><br>
    <th> <img src="../front/assets/img/serv/<?=$row['ser_img'] ?? 'user.jpg'?>"  style="width:40px; border-radius:50%;"/>

    <input type="file" name="image" class="form-control" 
    value="<?=$row['ser_img']?>"  id="exampleInputPassword1">

  </div>


  <input type="submit" name="update" value="update" class="btn btn-primary"></input>
  <input type="submit"  name="cancel" value="cancel"  class="btn btn-warning"> </input>

</form>
<?php
       // session_unset();

?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>