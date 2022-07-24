<?php
//localhost/username/password/database-name

$connection = mysqli_connect('localhost', 'root', '', 'batch-2-repeat');
if ($connection) {
    // echo 'database is connected';
} else {
    die('database connection failed');  
}


?>
