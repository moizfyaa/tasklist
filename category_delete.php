<?php
include "db.php";

// echo "<pre>";
// print_r($_GET['cat_id']);
// echo "</pre>";

$category_id = $_GET['cat_id'];
$query_edit_category = "DELETE FROM categories where id = '{$category_id}'";
$result = mysqli_query($connection, $query_edit_category);
if (!$result) {
    die('Query Failed' . mysqli_error($connection));
}

header("location: http://localhost/crud/category_view.php");
