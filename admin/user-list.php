<?php

require_once "../models/usermodel.php";


$userModel = new UserModel();

$result = $userModel->getAllUser();

if (! empty($result)) {
    ?>
<table id='userTable'>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User Name</th>
        </tr>
    </thead>
<?php
    foreach ($result as $row) {
        ?>
                <tbody>
        <tr>
            <td><?php  echo $row['FirstName']; ?></td>
            <td><?php  echo $row['LastName']; ?></td>
            <td><?php  echo $row['UserName']; ?></td>
        </tr>
                    <?php
    }
    ?>
                </tbody>
</table>

<?php } ?>