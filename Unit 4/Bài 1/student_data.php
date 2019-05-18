<?php
session_start();
if($_SESSION['IsSubmit'] == false){
	setcookie('Submit_msg','Không được bỏ trống thông tin', time()+2);
	header('Location: inform.php');
} else{
	echo "<h1><center>ZENT GROUP- PHP - Thực hành về gửi dữ liệu dùng POST</center></h1>";
	echo "<h1><center>THÔNG TIN SINH VIÊN </h1>";
	echo "<pre>";
	echo $_SESSION;
	echo "</pre>";
}

?>
