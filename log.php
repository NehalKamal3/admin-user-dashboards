<?php  require_once 'db.php';
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['log'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $stat = "select * from users";
  $query = mysqli_query($conn, $stat);

  while($row = mysqli_fetch_assoc($query)) {
      if($row['username'] == $user  && $row['password'] == $pass) {
          $_SESSION['id'] = $row['id'];
         $_SESSION['uname'] = $row['username'];
         $_SESSION['email'] = $row['email'];
          $_SESSION['type'] = $row['type'];
          
          if($row['type'] == 'normal_user') {
              header('location:front/index.php');
          } else {
              header('location:home.php');
          }
      }
  }
}    if(isset($_POST['register'])){
    header('location:index.php');

}}





?>
<!DOCTYPE html>
<html>
    <link href="css.css" rel="stylesheet">
<body>

<h2>LOG IN</h2>

<form action="" method="post">
    <?php
if(isset($errors ) && !empty($errors) ):
      foreach($errors as $error){
        echo "<div class='alert alert-danger' role='alert'>
         $error
     
</div>";} endif;
?>

  <label class="txt"   for="fname">Username:</label><br>
  <input class="in" type="text" placeholder="username" name="user" value=""><br>

  <label class="txt"   for="fname">password:</label><br>

  <input class="in"  type="text" placeholder="password" name="pass"  ><br>


  <input class="btn" type="submit" name="log" value="login">

  <input class="btn2" type="submit" name="register"  href="#" value="register">

</form> 



</body>
</html>