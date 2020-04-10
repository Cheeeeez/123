<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Employee.php";
    include "../class/EmployeeManager.php";
    $employeeManager = new EmployeeManager("../data.json");
    $employeeManager->getDataJson();

    $name = $_REQUEST['name'];
    $dateOfBirth = $_REQUEST['date-of-birth'];
    $address = $_REQUEST['address'];
    $position = $_REQUEST['position'];

    $employee = new Employee($name, $dateOfBirth, $address, $position);
    $employeeManager = new EmployeeManager("../data.json");
    $employeeManager->addEmployee($employee);
    header("Location: ../index.php");
}