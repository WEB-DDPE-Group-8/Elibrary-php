
<?php include("../inc/nav_bar.php") ?>

<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"/> -->
    <link rel="stylesheet" type="text/css" href="css/team.css"/>

<?php include("../config/dbconfig.php");  
$header = array("Downloads","Year","Language","Likes","Dislikes");

$queries = array(
"select  Title,Author,Year,Description,Language from books where Downloads > 2",
"select  Title,Author,Year,Description,Language from books where Year > 2005",
"select  Language ,COUNT(*) AS lang from books Group by Language ",
"select  Title,Author,Year,Description,Language from books where Likes > 0",
"select  Title,Author,Year,Description,Language from books where Dislikes > 100"
);
$myfile = fopen("report.txt", "w") or die("Unable to open file!");
     for($query=0 ; $query<count($queries) ; $query++)
     {
        $download = $db -> query($queries[$query]);
         echo "<h1>$header[$query]</h1>" ;
         $head = $header[$query]."\n";
         fwrite($myfile, $head);
    while ($download2 = $download->fetch_assoc())
    {
        ?>
        <table>
            <tr>
                <td>
        <?php
        foreach($download2 as $e)
        {
            echo $e.","."\n";
            $body = $e.",";
            fwrite($myfile, $body);
            ?> 
            

            </td>
            <td></td>
            <td>
                <?php
                };
                fwrite($myfile, "\n");?>   
               </td> 
            </tr>
        </table>
        
        <?php   
    }
    
    }
    fclose($myfile);
?>

<?php
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?> 

<?php include("../inc/footer.php") ?>

