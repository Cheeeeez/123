<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/Employee.php";
    include "../class/EmployeeManager.php";
    $employeeManager = new EmployeeManager("../data.json");
    $employeeManager->getDataJson();
    $index = $_GET['index'];
    $name = $_REQUEST['name'];
    $dateOfBirth = $_REQUEST['date-of-birth'];
    $address = $_REQUEST['address'];
    $position = $_REQUEST['position'];
    EmployeeManager::$listEmployee[$index]->setName($name);
    EmployeeManager::$listEmployee[$index]->setDateOfBirth($dateOfBirth);
    EmployeeManager::$listEmployee[$index]->setAddress($address);
    EmployeeManager::$listEmployee[$index]->setPosition($position);
    $employeeManager->saveDataToFile(EmployeeManager::$listEmployee);
    header("Location: ../index.php");
}