<?php
require_once("../includes/initialize.php");

if(isset($_GET['id'])){
$id=$_GET['id'];	
	
}else{
//when the user didnt post a topup code	
redirect_to("../admin.php?error=1&edefin=no data recieved");
exit();
}
if(isset($admin_id)){
$insert=$mysqli->query("UPDATE energy_theft SET active='0' WHERE id='$id'");
redirect_to("../admin.php?error=0&edefin=energy tamper flag cleared");
}
else {
	echo 'you have to be logged in as an admin';
}






?>
