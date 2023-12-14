<?php  require_once '../db.php';
session_start();
if(isset($_POST['del'])){


    $del="DELETE * FROM `users` ";
    $exc=mysqli_query($conn,$del);


    if($exc){
       $_SESSION['success']='records deleted succesfully';

    header("location:../home.php");

    
    }
}

elseif(isset($_POST['cancel'])){
    $_SESSION['success']='records not deleted ';

    header("location:../home.php");
}


?>

