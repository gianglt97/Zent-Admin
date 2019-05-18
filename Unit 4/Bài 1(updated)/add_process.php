<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thông tin sinh viên</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <div style="text-align: center;"class="header">
        <form>
            <legend><h1>ZENT GROUP- PHP - Thực hành về gửi dữ liệu dùng POST</h1></legend>
        </form>
        <h3>THÔNG TIN SINH VIÊN<h3>
    </div>
	<p style="margin: 5% 5% auto"> 
			<?php
				echo '* Mã sinh viên: '.$_POST['ID'].'<br>';
				echo '* Họ và tên: '.$_POST['name'] .'<br>';
				echo '* Số điện thoại: '.$_POST['phone'] .'<br>';
				echo '* Địa chỉ email: '.$_POST['email'] .'<br>';
				echo '* Giới tính: '.$_POST['gender'] .'<br>';
				echo '* Địa chỉ: '.$_POST['address'] .'<br>';
			?>
	</p>
	

</body>
</html>