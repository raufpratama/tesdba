<?php 
include 'conn.php';

$usern = $_POST["usern"];
$pass = $_POST["passw"];

$query = "SELECT nama_lengkap,email_user from admin_pml where user_name='$usern' AND pass_word='$pass';";

$sql = mysqli_query($conn,$query);

if(mysqli_num_rows($sql) > 0) {
	$row = mysqli_fetch_assoc($sql);
	echo json_encode(array("namalengkap"=>$row["nama_lengkap"],"email"=>$row["email_user"]));
}


 ?>