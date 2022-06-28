<?php
$r = password_verify('qwerty1234','$2y$10$bIs5RFmpP5gFI4y5R26I7uBP27pcsXAmErSK4ehSfPufTyaTYo9ym');
echo var_dump($r);