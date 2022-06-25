<?php

use Phppot\DataSource;


class ReviewsModel
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

    function insertReview($UserID="",$BookID="",$Content="",$Reaction=null)
    {
        // $sql = "SELECT Title FROM books WHERE Author = ?";
        // $sql = "SELECT Title FROM books WHERE Title = ?";

        // $paramType = "s";
        // $paramArray = array(
        //    $Title
        // );

        // $result = $this->conn->select($sql, $paramType, $paramArray);
        // $insertId = 0;
        // if (empty($result)) {
            $sql = "INSERT into reviews (UserID,BookID,Content,reaction)
                       values (?,?,?,?)";
            $paramType = "ssss";
            $paramArray = array(
                $UserID,$BookID,$Content,$Reaction
            );
            $this->conn->insert($sql, $paramType, $paramArray);
        }
        // return $insertId;
}

