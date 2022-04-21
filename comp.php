
<?php


$queries = array(
   "select * from books where Downloads > 0",
  "select * from books where Year > 0",
  "select * from books where Language > 0",
  "select * from books where Likes > 0",
  "select * from books where Dislikes > 0",
);
foreach($queries as $query)
{
echo $query;
}
  ?>