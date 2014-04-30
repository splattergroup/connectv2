<?php

include '../../setup.php';
$email = $_POST['email'];
return checkUserExists($database, $email);
?>
