<?php

require_once "../models/bookmodel.php";

$bookModel = new BookModel();


$result = $bookModel->getAllBook();
if (! empty($result)) {
    ?>
<table id='userTable'>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
        </tr>
    </thead>
<?php
    foreach ($result as $row) {
        ?>
                <tbody>
        <tr>
            <td><?php  echo $row['Title']; ?></td>
            <td><?php  echo $row['Author']; ?></td>
            <td><?php  echo $row['Genre']; ?></td>
        </tr>
                    <?php
    }
    ?>
                </tbody>
</table>

<?php } ?>