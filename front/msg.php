<?php  require_once ("../db.php");
$data =file_get_contents("php://input");
// json to php 
$finaldata =json_decode($data , true);  


$name= $finaldata['name'];
$email = $finaldata['email'];
$num= $finaldata['num'];
$msg=$finaldata['mseg'];

$stat = "select * from users ";
$query = mysqli_query($conn, $stat);

while($row = mysqli_fetch_assoc($query)){
 if($row["email"] == $email){


$ins="insert into msg (nmsg ,emsg ,	msgnum ,text) values ('$name','$email','$num','$msg')  ";

$exct= mysqli_query($conn ,$ins);
 if($exct){
    $_SESSION['uccess']= 'message sent';
    header("location:index.php");
 }else{
   $_SESSION['error']= 'something wrong';

 }
}else {
   $_SESSION['error']= 'this user not exists';

}

}