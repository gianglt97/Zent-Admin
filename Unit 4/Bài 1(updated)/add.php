
<!DOCTYPE html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
     <div style="text-align: center;"class="header">
        <form>
            <legend><h1>ZENT GROUP- PHP- NHẬP THÔNG TIN SINH VIÊN</h1></legend>
        </form>
    </div>
    <div class="container">
        <form action="add_process.php" method="POST" role="form" oninfo="return validateForm()">
            <div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="number" class="form-control" id="studentID" placeholder="Nhập mã sinh viên" name="ID">
            </div>
            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" name="name">
            </div>  
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="number" class="form-control" id="phone" placeholder="Nhập vào số điện thoại" name="phone" maxlength="11">
            </div> 
            <div class="form-group">
                <label for="">Địa chỉ email</label>
                <input type="text" class="form-control" id="email" placeholder="Nhập vào địa chỉ email" name="email">
            </div>
            <div class ="form-group">
                <label for="">Giới tính</label><br>
                <input type="radio" id = "gender" name="gender" value="Nam"> Nam
                <input type="radio" id = "gender" name="gender" value="Nữ"> Nữ
                <input type="radio" id = "gender" name="gender" value="Khác"> Khác
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