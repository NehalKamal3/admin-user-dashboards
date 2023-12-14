<?php  require_once 'db.php';
session_start();
//var_dump($_SESSION);
if(isset($_SESSION['id']) ){
	if($_SESSION['type'] == 'super_admin'){
	$sel="select * from users where id='$_SESSION[id]'";
      $exc=mysqli_query($conn ,$sel);

    $row = mysqli_fetch_assoc($exc);

}
}else{
	header("location:log.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>crud dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
 
<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="img/logo.png" class="img-fluid"/><span>vishweb design</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li class="active">
		  <a href="#" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">aspect_ratio</i>Layouts
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="#">layout 1</a></li>
			 <li><a href="#">layout 2</a></li>
			 <li><a href="#">layout 3</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">apps</i>widgets
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		     <li><a href="#">Apps 1</a></li>
			 <li><a href="#">Apps 2</a></li>
			 <li><a href="#">Apps 3</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">equalizer</i>charts
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">extension</i>UI Element
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">border_color</i>forms
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li>	<a href="login.php" class=""><i class="material-icons"></i>sign in </a>
			 </li>
			 <li class="">
				<a href="register.php" class=""><i class="material-icons"></i>sign up </a>
			
		  </li>
</ul>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">grid_on</i>tables
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu6">
		     <li><a href="#">table 1</a></li>
			 <li><a href="#">table 2</a></li>
			 <li><a href="#">table 3</a></li>
		  </ul>
		  </li>
		  
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">content_copy</i>Pages
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu7">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		 
			
		   
		  <li class="">
		  <a href="#" class=""><i class="material-icons">date_range</i>copy </a>
		  </li>
		  <li class="">
		  <a href="#" class=""><i class="material-icons">library_books</i>calender </a>
		  </li>
		
		</ul>
	 </div>
	 
   <!-------sidebar--design- close----------->
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     <div class="xp-searchbar">
						     <form>
							    <div class="input-group">
								  <input type="search" class="form-control"
								  placeholder="Search">
								  <div class="input-group-append">
								     <button class="btn" type="submit" id="button-addon2">Go
									 </button>
								  </div>
								</div>
							 </form>
						 </div>
					 </div>
					 
					 
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   <li class="dropdown nav-item active">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <span class="material-icons">notifications</span>
								  <span class="notification">4</span>
								 </a>
								  <ul class="dropdown-menu">
								     <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
									 <li><a href="#">You Have 4 New Messages</a></li>
								  </ul>
							   </li>
							   
							   <li class="nav-item">
							     <a class="nav-link" href="#">
								   <span class="material-icons">question_answer</span>
								 </a>
							   </li>
							   
							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								 <?php if(isset($_SESSION['id'])){?>
                         
						 <img src="uploads/imgs/<?=$row['img']?>"  style="width:40px; border-radius:50%;"/>
										  <?php }else{?>
						<img src="uploads/imgs/user.jpg?>"  style="width:40px; border-radius:50%;"/>
		
                                <?php }?>

								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="#">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">settings</span>
									 Settings
									 </a></li>
									 <li><a href="logout.php">
									 <span class="material-icons">logout</span>
									 Logout
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title"><?=$row['username']?></h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item"><a href="#">Admin</a></li>
					  <li class="breadcrumb-item active" aria-curent="page">Dashboard</li>
					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		   <?php


if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
   echo "<div class='alert alert-warning' role='alert'>
                      $_SESSION[success]
  <button type='button' class='close' onclick='$(this).parent().hide();'>×</button></div>"
   ;
  
}
?>



		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">Manage  users</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New Employees</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>ID</th>

							 <th>Name</th>
							 <th>Email</th>
							 <th>password</th>
							 <th>img</th>
							 <th>type</th>

							 <th>Actions</th>
							 </tr>
						  </thead>
						  <?php
                              
						$sel2="select * from users where type='normal_user'";
							$exc2=mysqli_query($conn ,$sel2);
							
							while($user = mysqli_fetch_assoc($exc2)):
							
							 
						  ?>
						  <tbody>
						      <tr>
								<th><span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="option[]" value="1">
									<label for="checkbox1"></label></th>
									<th><?=$user['id']?> </th>

							 <th><?=$user['username']?> </th>
							 <th><?=$user['email']?></th>
							 <th><?=$user['password']?></th>
							 <th> <img src="./uploads/imgs/<?=$user['img'] ?? 'user.jpg'?>"  style="width:40px; border-radius:50%;"/>
</th>
<th><?=$user['type']?></th>

							 <th>
			   <a href="./crud/update.php?id=<?=$user['id']?>" class="edit" >
							   <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
							   </a>
							
			   <a href="./crud/del.php?id=<?=$user['id']?>" class="delete"   >
							   <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
							   </a>
						
							 </th>
							 </tr>
							 
			
							 <?php endwhile;?>
						  </tbody>
						  
					      
					   </table>


					   <!-- table 2 -->
   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							 <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll">
							 <label for="selectAll"></label></th>
							 <th>MSG ID</th>

							 <th>Name</th>
							 <th>Email</th>
							 <th>phone</th>
							 <th>msg</th>

							 <th>Actions</th>
							 </tr>
						  </thead>
						  <?php
                              
						$sel2="select * from msg ";
							$exc2=mysqli_query($conn ,$sel2);
							
							while($msg = mysqli_fetch_assoc($exc2)):
							
							 
						  ?>
						  <tbody>
						      <tr>
								<th><span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="option[]" value="1">
									<label for="checkbox1"></label></th>
									<th><?=$msg['msg_id']?> </th>

							 <th><?=$msg['nmsg']?> </th>
							 <th><?=$msg['emsg']?></th>
							 <th><?=$msg['msgnum']?></th>
                            <th><?=$msg['text']?></th>

							 <th>
			   <!-- <a href="./crud/update.php?msg_id=<?//=$msg['msg_id']?>" class="edit" > -->
							   <!-- <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i> -->
							   <!-- </a> -->
							
			   <a href="./crud/del.php?msg_id=<?=$msg['msg_id']?>" class="delete"   > 
			    <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i> 
							   </a> 
						
							 </th>
							 </tr>
							 
			
							 <?php endwhile;?>
						  </tbody>
						  
					      
					   </table>

					   
					   
					   <div class="clearfix">
					     <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item "><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item active"><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					
									   <!----add-modal start--------->



<form method="post"  action="./crud/add.php" enctype="multipart/form-data">

		<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Employees</h5><br>

		<?php
if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
   echo "<div class='alert alert-danger' role='alert'>
   $_SESSION[error];
   </div>";
  

}?>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">

		    <label>Name</label>
			<input type="text" name="uname" class="form-control" >
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil" name="email" class="form-control" >
		</div>
		<div class="form-group">
		    <label>pssword</label>
			<input class="form-control"  name="pass" ></input>
		</div>
		<div class="form-group">
		    <label>img</label>
			<input type="file" class="form-control" name="image">
		</div>
		<div class="form-group">
		    <label>type</label>
			<input type="text" class="form-control" name="type">
		</div>
      </div>
      <div class="modal-footer">

	  
  <input type="submit" name="add" value="add" class="btn btn-primary"></input>
  <input type="submit"  name="cancel" value="cancel"  class="btn btn-warning"> </input>
    
      </div>
    </div>
  </div>
</div>
							</form>
					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start-

				   <form method="post"  action="crud/update.php">

		<div class="modal fade" tabindex="-1" id=""./crud/update.php" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>

		

		?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">

		<label>Name</label>

		<input type="number" name="id" class="form-control" value=<?//=$users['id']?> >
		    <label>Name</label>
			<input type="text" name="uname" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil"  name="email" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>password</label>
			<input type="text"  name="pass" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>type</label>
			<input type="text" name="type" class="form-control" >
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="update"  class="btn btn-success"></input>
      </div>
    </div>
  </div>
</div>					
		</form>-->


					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
<?php 
 
?>

<form method="post"  action="./crud/del_all.php" enctype="multipart/form-data">

		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">

      <input type="submit" name="del" value="delete" class="btn btn-primary"></input>
  <input type="submit"  name="cancel" value="cancel"  class="btn btn-warning"> </input>
      </div>
    </div>
  </div>
</div>
							</form>

					   <!----edit-modal end--------->   
					   
					
					
				 
			     </div>
			  </div>
		  
		    <!------main-content-end-----------> 
		  
		 
		 
		 <!----footer-design------------->
		 
		 <footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2021 Vishweb Design . All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>
		 
		 
		 
		 
	  </div>
   
</div>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>





  </body>
  
  </html>


