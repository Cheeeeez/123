<?php
include "class/Employee.php";
include "class/EmployeeManager.php";
$employeeManager = new EmployeeManager("data.json");
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
    <title>Document</title>
</head>
<body>
<nav class="nav flex-column">
    <?php include "layout/nav.php"; ?>
</nav>
<table class="table ">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Ngày sinh</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Vị trí công việc</th>
        <th scope="col">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach (EmployeeManager::$listEmployee as $index => $employee):?>
        <tr>
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $employee->getName() ?></td>
            <td><?php echo $employee->getDateOfBirth() ?></td>
            <td><?php echo $employee->getAddress() ?></td>
            <td><?php echo $employee->getPosition() ?></td>
            <td><a href="view/edit.php?index=<?php echo $index?>">Sửa</a> | <a onclick="confirm('Bạn có chắc muốn xóa ?')" href="action/delete.php?index=<?php echo $index?>">Xóa</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
