<h1>
<?php
include("inc/nav_bar.php");

function report_text()
{
    include("./config/dbconfig.php");
    $header = array("Downloads >2","Year>2005","Language","Likes > 0","Dislikes>100");
    $queries = array(
    "select  Title,Author,Year,Description,Language from books where Downloads > 2",
    "select  Title,Author,Year,Description,Language from books where Year > 2005",
    "select  Language ,COUNT(*) AS lang from books Group by Language ",
    "select  Title,Author,Year,Description,Language from books where Likes > 0",
    "select  Title,Author,Year,Description,Language from books where Dislikes > 100"
    );
    $myfile = fopen("file/report.txt", "w") or die("Unable to open file!");
        for($query=0 ; $query<count($queries) ; $query++)
        {
            $download = $db -> query($queries[$query]);
            $head = $header[$query]."\n";
            fwrite($myfile, $head);
        while ($download2 = $download->fetch_assoc())
        {
        
            foreach($download2 as $e)
            {
                $body = $e.",";
                fwrite($myfile, $body);      
            };
                fwrite($myfile, "\n"); 

    }
        
    }
    fclose($myfile);
    echo "report.txt succesfully created";
}

function open()
{
    $functions = [
        'is_readable',
        'is_writable',
        'is_executable'
    ];
    $filename = "file/report.txt";

    if(!file_exists($filename))
    {
        echo ("the file $filename doesnot exist.");
        return 0;
    }

    $f = fopen($filename,'r');
    if($f)
    {
        //process the file
        echo '<h2>'.'The file'. $filename.' is open <h2>';
        foreach($functions as $f)
        {
           echo'<h2>'.  $f($filename) ? 'The file'. $filename ."  ". $f .'<h2>' :'<h2>'. '  '.'<h2>';
        }
    }
    
}

function ReadnWrite()
{
    $filename = "file/report.txt";
    $f = fopen($filename, 'r');

    if($f)
    {
        $content = fread($f,filesize($filename));
        fclose($f);
        echo nl2br($content);
    }
    else
    {
        echo "file not opened yet";
    }
}

function Copyf()
{
    $source = "file/report.txt";
    $dest = "file/report-copy.txt";
    !file_exists($source) && die('<h2>'. 'The file'. $source . 'doesnt exist' .'<h2>' );
    file_exists($dest) && die('<h2>'. 'The file'. $source .'exists'.' <h2>' );
    
  echo  copy($source,$dest) ? "Copying successful" : "Error Copying";

}

function del()
{
    $dir="file/";
    array_map('unlink',glob("{$dir}*"));
    echo "Deleted all files successfully";

}

function ren($newname)
{
    $oldname = "file/report.txt";

    if(rename($oldname,"file/".$newname.".txt"))
    {
        echo "Rename successful";   
    }
    else
    {
        echo "There was an error renaming your file.";
    }

}

function move()
{
    $source = "file/report.txt";
    $dest = "file2/report.txt";
    !file_exists($source) && die('<h2>'. 'The file'. $source . 'doesnt exist' .'<h2>' );
    file_exists($dest) && die('<h2>'. 'The file'. $source .'exists'.' <h2>' );
    
    echo  copy($source,$dest) ? "" : "Error Copying";

    $dir="file/";
    array_map('unlink',glob("{$dir}*"));
    echo "File Moved successfully";

}

if(isset($_POST['btn1']))
{
    report_text();
}

if(isset($_POST['btn2']))
{
    open();
}

if(isset($_POST['btn3']))
{
    ReadnWrite();
}

if(isset($_POST['btn5']))
{
    Copyf();
}

if(isset($_POST['btn6']))
{
    del();
}

if(isset($_POST['btn7']))
{
    $name = $_POST['newname'];
    ren($name);
}

if(isset($_POST['btn8']))
{

    move();
}
?>
<h1>
<form action="file_manipulation.php"  method="post">

<button class="btn" name="btn1" >Generate Report Statistical info</button> <br>

<button class="btn" name="btn2" >Open Report Statistical info</button></br>

 <button class="btn" name="btn3" >Read Report Statistical info</button></br>

<!-- <button class="btn" name="btn4" >Write Statistical info</button></br> -->

<button class="btn" name="btn5" >Copy Report Statistical info</button></br>

<button class="btn" name="btn6" >Delete All Statistical info</button></br></br></br>

<input type="text" id="bookname" name="newname" id=""></br>
<button class="btn" name="btn7" >Rename Report Statistical info</button></br>


<button class="btn" name="btn8" >Move Report Statistical info</button></br> 

</form>

<?php
include("inc/footer.php");
?>