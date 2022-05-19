
<p><big>Readers also liked</big></p>
<hr size =12px color =grey>
<?php
 $genre = $row['Genre'];
 $related = $db->query("Select * from books Where Genre LIKE '$genre'");
 $related = $related->fetch_assoc();
?>
<a  href= "Description.php?<?php echo $related["BookID"] ?>"><img  src="resources/books/2.jpg" width=255 height="400px"></a> 

<hr size =12px color =grey>
<br>
