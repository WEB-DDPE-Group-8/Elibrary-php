
<?php
    // $review = $db->query("Select * from reviews where BookID = $row[BookID]");

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
    // $reviews = mysqli_fetch_assoc($review);
    $reviews->fetch_assoc();
   