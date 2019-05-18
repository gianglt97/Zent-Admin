<?php
    session_start();
    if(isset($_SESSION['IsSubmit'])&& $_SESSION['IsSubmit'] == true){
    header('Location: inform.php');
?>
<!-- <!DOCTYPE html> -->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <p><h1><center>ZENT GROUP- PHP - Thực hành về gửi dữ liệu dùng POST</center></h1></p>

    <p><?php
            if(isset($_COOKIE['Submit_msg'])){
                echo $_COOKIE['Submit_msg'];
            }
        ?>  
    </p>
    <div style="text-align: center"; class="container">
        <h1>ZENT GROUP- PHP - Thực hành về gửi dữ liệu dùng POST</h1>
        <form action="student_data_post.php" method="POST" role="form">
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="number" class="form-control" id="" placeholder="Nhập mã sinh viên" name="studentID">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" maxlength="11">
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ email" name="email">
            </div>
            <div class ="form-group">
                <label for="">Giới tính</label><br>
                <input type="radio" name="gender" value="male"> Nam
                <input type="radio" name="gender" value="female"> Nữ
                <input type="radio" name="gender" value="other"> Khác
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
            </div> 
            <button type="info" class="btn btn-primary">Lưu thông tin</button>
        </form>
    </div>
</body>
</html>