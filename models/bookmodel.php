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
                    if (isset($column[2], $column[3], $column[13])) {
                        
                        $id = $column[0];
                        $Cover = $column[1];
                        $Book = $column[2];
                        $Title = $column[3];
                        $Downloads = $column[4];           
                        $Author = $column[5];
                        $Description = $column[6]; 
                        $Genre = $column[7];
                        $Language = $column[8];
                        $Price = $column[9];
                        $Likes = $column[10];
                        $Dislikes = $column[11];
                        $Status = $column[12];
                        $Year = $column[13];

                        $insertId = $this->insertBook($id, $Cover,$Book,$Title,$Downloads,$Author,$Description,$Genre,$Language,$Price,$Likes,$Dislikes,$Status,$Year);
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

    function insertBook($id, $Cover,$Book,$Title,$Downloads,$Author,$Description,$Genre,$Language,$Price,$Likes,$Dislikes,$Status,$Year)
    {
        $sql = "SELECT Title FROM books WHERE Title = ?";
        $paramType = "s";
        $paramArray = array(
           $Title
        );

        $result = $this->conn->select($sql, $paramType, $paramArray);
        $insertId = 0;
        if (empty($result)) {
            $sql = "INSERT into books (BookID,Cover,Book,Title,Downloads,Author,Description,Genre,Language,Price,Likes,Dislikes,Status,Year,UserID)
                       values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $paramType = "sssssssssssssss";
            $paramArray = array(
                $id, $Cover,$Book,$Title,$Downloads,$Author,$Description,$Genre,$Language,$Price,$Likes,$Dislikes,$Status,$Year,1);
            $insertId = $this->conn->insert($sql, $paramType, $paramArray);
        }
        return $insertId;
    }
}
?>