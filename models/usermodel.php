<?php
// namespace Phppot;

use Phppot\DataSource;

class UserModel
{

    private $conn;

    function __construct()
    {
        require_once 'DataSource.php';
        $this->conn = new DataSource();
    }

    function getAllUser()
    {
        $sqlSelect = "SELECT * FROM user";
        $result = $this->conn->select($sqlSelect);
        return $result;
    }

    function readUserRecords()
    {
        $fileName = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            $importCount = 0;
            while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
                if (! empty($column) && is_array($column)) {
                    if ($this->hasEmptyRow($column)) {
                        continue;
                    }
                    if (isset($column[1], $column[3], $column[7])) {
                        $userName = $column[1];
                        $password = $column[2];
                        $firstName = $column[3];
                        $lastName = $column[4];
                        $Email = $column[5];
                        $IsAdmin =$column[6];
                        $Status = $column[7];
                        $insertId = $this->insertUser($userName, $password, $firstName, $lastName, $Email,$IsAdmin,$Status);
                        if (! empty($insertId)) {
                            $output["type"] = "success";
                            $output["message"] = "Import completed.";
                            $importCount ++;
                        }
                    }
                } else {
                    $output["type"] = "error";
                    $output["message"] = "Problem in importing data.";
                }
            }
            if ($importCount == 0) {
                $output["type"] = "error";
                $output["message"] = "Duplicate data found.";
            }
            return $output;
        }
    }

    function hasEmptyRow(array $column)
    {
        $columnCount = count($column);
        $isEmpty = true;
        for ($i = 0; $i < $columnCount; $i ++) {
            if (! empty($column[$i]) || $column[$i] !== '') {
                $isEmpty = false;
            }
        }
        return $isEmpty;
    }

    function insertUser($userName, $password, $firstName, $lastName, $Email,$IsAdmin,$Status)
    {
        $sql = "SELECT UserName FROM user WHERE UserName = ?";
        $paramType = "s";
        $paramArray = array(
            $userName
        );
        $result = $this->conn->select($sql, $paramType, $paramArray);
        $insertId = 0;
        if (empty($result)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT into user (UserName,password,FirstName,LastName,Email,IsAdmin,Status)
                       values (?,?,?,?,?,?,?)";
            $paramType = "sssssss";
            $paramArray = array(
                $userName,
                $hashedPassword,
                $firstName,
                $lastName,
                $Email,
                $IsAdmin,
                $Status
            );
            $insertId = $this->conn->insert($sql, $paramType, $paramArray);
        }
        return $insertId;
    }
}
?>