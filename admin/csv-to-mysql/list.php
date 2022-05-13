<?php
// namespace Phppot;
// require_once __DIR__ . '/lib/UserModel.php';
require_once __DIR__ . '/lib/bookmodel.php';

// $userModel = new UserModel();
$bookModel = new BookModel();

// $result = $userModel->getAllUser();
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