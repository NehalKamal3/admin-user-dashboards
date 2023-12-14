<?php      require_once "../db.php";

session_start();
                  // this code for downloading any file to user device 
				  
$stat2 = "select * from skills where user_id= $_SESSION[id] order by skill_id desc ";
$query2 = mysqli_query($conn, $stat2);
while( $row = mysqli_fetch_assoc($query2)){
  if($row['skill_file'] >0){
 if(!empty( $row['skill_file']))
{
	$filename = basename( $row['skill_file']);
	$filepath = '../uploads/skills/'. $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
      //  header('location:index.php');
		///exit;

	}
	else{
		echo "This File Does not exist.";
		//header('location:index.php');

		break;
	}
}
}
}

