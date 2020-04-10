<?php
include "../class/Employee.php";
include "../class/EmployeeManager.php";

$index = $_GET['index'];
$employeeManager = new EmployeeManager("../data.json");
$employeeManager->getDataJson();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="layout/style.css">
    <script>
        function loadAddress(){
            document.getElementById("address").value = "<?php echo EmployeeManager::$listEmployee[$index]->getAddress();?>"
        }
    </script>
    <title>Document</title>
</head>
<body onload="loadAddress()">
<nav class="nav flex-column">
    <?php include "../layout/nav.php"; ?>
</nav>
<form action="../action/update.php?index=<?php echo $index?>" method="post">
    <div class="form-group">
        <label for="name">Họ và tên :</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo EmployeeManager::$listEmployee[$index]->getName()?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Ngày sinh :</label>
        <input type="date" value="<?php echo EmployeeManager::$listEmployee[$index]->getDateOfBirth()?>" class="form-control" id="date-of-birth" name="date-of-birth">
    </div>
    <div class="form-group">
        <label for="address">Địa chỉ :</label>
            <select class="custom-select" id="address" name="address">
            <option value="An Giang">An Giang
            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
            <option value="Bắc Giang">Bắc Giang
            <option value="Bắc Kạn">Bắc Kạn
            <option value="Bạc Liêu">Bạc Liêu
            <option value="Bắc Ninh">Bắc Ninh
            <option value="Bến Tre">Bến Tre
            <option value="Bình Định">Bình Định
            <option value="Bình Dương">Bình Dương
            <option value="Bình Phước">Bình Phước
            <option value="Bình Thuận">Bình Thuận
            <option value="Bình Thuận">Bình Thuận
            <option value="Cà Mau">Cà Mau
            <option value="Cao Bằng">Cao Bằng
            <option value="Đắk Lắk">Đắk Lắk
            <option value="Đắk Nông">Đắk Nông
            <option value="Điện Biên">Điện Biên
            <option value="Đồng Nai">Đồng Nai
            <option value="Đồng Tháp">Đồng Tháp
            <option value="Đồng Tháp">Đồng Tháp
            <option value="Gia Lai">Gia Lai
            <option value="Hà Giang">Hà Giang
            <option value="Hà Nam">Hà Nam
            <option value="Hà Tĩnh">Hà Tĩnh
            <option value="Hải Dương">Hải Dương
            <option value="Hậu Giang">Hậu Giang
            <option value="Hòa Bình">Hòa Bình
            <option value="Hưng Yên">Hưng Yên
            <option value="Khánh Hòa">Khánh Hòa
            <option value="Kiên Giang">Kiên Giang
            <option value="Kon Tum">Kon Tum
            <option value="Lai Châu">Lai Châu
            <option value="Lâm Đồng">Lâm Đồng
            <option value="Lạng Sơn">Lạng Sơn
            <option value="Lào Cai">Lào Cai
            <option value="Long An">Long An
            <option value="Nam Định">Nam Định
            <option value="Nghệ An">Nghệ An
            <option value="Ninh Bình">Ninh Bình
            <option value="Ninh Thuận">Ninh Thuận
            <option value="Phú Thọ">Phú Thọ
            <option value="Quảng Bình">Quảng Bình
            <option value="Quảng Bình">Quảng Bình
            <option value="Quảng Ngãi">Quảng Ngãi
            <option value="Quảng Ninh">Quảng Ninh
            <option value="Quảng Trị">Quảng Trị
            <option value="Sóc Trăng">Sóc Trăng
            <option value="Sơn La">Sơn La
            <option value="Tây Ninh">Tây Ninh
            <option value="Thái Bình">Thái Bình
            <option value="Thái Nguyên">Thái Nguyên
            <option value="Thanh Hóa">Thanh Hóa
            <option value="Thừa Thiên Huế">Thừa Thiên Huế
            <option value="Tiền Giang">Tiền Giang
            <option value="Trà Vinh">Trà Vinh
            <option value="Tuyên Quang">Tuyên Quang
            <option value="Vĩnh Long">Vĩnh Long
            <option value="Vĩnh Phúc">Vĩnh Phúc
            <option value="Yên Bái">Yên Bái
            <option value="Phú Yên">Phú Yên
            <option value="Tp.Cần Thơ">Tp.Cần Thơ
            <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
            <option value="Tp.Hải Phòng">Tp.Hải Phòng
            <option value="Tp.Hà Nội">Tp.Hà Nội
            <option value="TP  HCM">TP HCM
        </select>
    </div>
    <div class="form-group">
        <label for="position">Vị trí công việc :</label>
        <input type="text" class="form-control" id="position" name="position" value="<?php echo EmployeeManager::$listEmployee[$index]->getPosition();?>">
    </div>
    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>