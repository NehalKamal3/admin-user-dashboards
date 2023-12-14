<?php  require_once '../db.php';
session_start();
if(isset($_POST['del'])){


    $del="DELETE FROM `users` WHERE id=$_GET[id]";
    $exc=mysqli_query($conn,$del);


    if($exc){
       $_SESSION['success']='record deleted succesfully';

    header("location:../index.php");

    
    }
}

elseif(isset($_POST['cancel'])){
    $_SESSION['success']='record not deleted ';

    header("location:../account.php");
}


?>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form   method="post"  style="width:511px;  margin-left:393px; justiry-content:center;"  >

<h5 class="modal-title">Delete Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <h4>Are you sure you want to delete your account <?//=$_GET['id']?></h4>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
	  

        <input type="submit"  name="cancel" value="cancel" class="btn btn-secondary"></input>

        <input type="submit" name="del" value="delete" class="btn btn-success"></input>
      </div>







      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>



