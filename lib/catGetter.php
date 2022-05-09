<?php
session_start();
$cat=[];

include ("../config/globals.php");

include "$root/config/dbconfig.php";

$USER = $_SESSION["username"];

if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        if(isset($_GET['categ']))
        {
            foreach($_GET['cat'] as $value)
            {
                echo "Chosen category : ".$value.'<br/>';
                array_push($cat,$value);
            }
            $cat  = implode("_",$cat);
            
        $pdo = new PDO('mysql:host=localhost;dbname=a2zlibrary', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->prepare
        (
            <<<_END
            UPDATE user set Interests = '$cat' WHERE UserName= '$USER'
            _END
        
        );
        $statement->execute();
        // $books = $statement->fetchAll(PDO::FETCH_ASSOC);
        header("location:../index.php");
    }
}

?>