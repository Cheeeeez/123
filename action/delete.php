<?php
include "../class/Employee.php";
include "../class/EmployeeManager.php";
$employeeManager = new EmployeeManager("../data.json");
$employeeManager->getDataJson();
$index = $_GET['index'];
$employeeManager->deleteEmployee($index);
header("Location: ../index.php");