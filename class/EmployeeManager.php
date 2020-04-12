<?php


class EmployeeManager {
    public static $listEmployee = [];
    protected $file;
    public function __construct($file) {
        $this->file = $file;
    }

    public function addEmployee($employee) {
        array_push(self::$listEmployee,$employee);
        $this->saveDataToFile(self::$listEmployee);
    }

    public function deleteEmployee($index){
        array_splice(self::$listEmployee,$index,1);
        $this->saveDataToFile(self::$listEmployee);
    }

    public function getDataJson() {
        $dataJson = file_get_contents($this->file);
        $data = json_decode($dataJson);
        foreach ($data as $index => $obj) {
            $employee = new Employee($obj->name, $obj->dateOfBirth, $obj->address, $obj->position);
            self::$listEmployee[$index] = $employee;
        }
        return self::$listEmployee;
    }

    public function saveDataToFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->file, $dataJson);
    }
}