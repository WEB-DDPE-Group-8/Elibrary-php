<?php
// namespace Phppot;

use Phppot\DataSource;


class BookModel
{

    private $conn;

    function __construct()
    {
        require_once 'DataSource.php';
        $this->conn = new DataSource();
    }

    function getAllBook()
    {
        $sqlSelect = "SELECT * FROM books";
        $result = $this->conn->select($sqlSelect);
        return $result;
    }

    function readBookRecords()
    {
        $fileName = $_FILES["file"]["tmp_name"];
        if ($_FILES["file"]["size"] > 0) {
            $file = fopen($fileName, "r");
            $importCount = 0;
            while (($column = fgetcsv($file, 100, ",")) !== FALSE) {
                
                if (! empty($column) && is_array($column)) {
                    if ($this->hasEmptyRow($column)) {
                        continue;
                    }
                    if (isset($column[2], $column[3], $column[9])) {
                        $Downloads = $column[1];
                        $Author = $column[2];
                        $Title = $column[3];
                        $Year = $column[4];
                        $Genre = $column[5];
                        $Description = $column[6];
                        $Publisher = $column[7];
                        $Language = $column[8];
                        $Status = $column[9];

                        $insertId = $this->insertBook($Downloads,$Author,$Title,$Year,$Genre,$Description,$Publisher,$Language,$Status);
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

    function insertBook($Downloads,$Author,$Title,$Year,$Genre,$Description,$Publisher,$Language,$Status)
    {
        // $sql = "SELECT Title FROM books WHERE Author = ?";
        $sql = "SELECT Title FROM books WHERE Title = ?";

        $paramType = "s";
        $paramArray = array(
           $Title
        );

        $result = $this->conn->select($sql, $paramType, $paramArray);
        $insertId = 0;
        if (empty($result)) {
            $sql = "INSERT into books (Downloads,Author,Title,Year,Genre,Description,Publisher,Language,Status,UserID)
                       values (?,?,?,?,?,?,?,?,?,?)";
            $paramType = "ssssssssss";
            $paramArray = array(
                $Downloads,
                $Author,
                $Title,
                $Year,
                $Genre,
                $Description,
                $Publisher,
                $Language,
                $Status,
                1
            );
            $insertId = $this->conn->insert($sql, $paramType, $paramArray);
        }
        return $insertId;
    }
}
?>