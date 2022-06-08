<?php
 $reviews = $db->query("SELECT 
   user.UserID,user.UserName,reviews.UserID, reviews.Content,reviews.reaction
    FROM 
        reviews
    INNER JOIN 
        user 
    ON
        user.UserID=reviews.UserID
    Where
    BookID =$Id
    "
);
    $reviews->fetch_assoc();
   