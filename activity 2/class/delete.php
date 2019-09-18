<?php

include_once("../config/database.php");

if (isset($_GET['id'])) {

    $delete_id = $_GET['id'];
    $delete_student = "delete from tbl_class where id='$delete_id'";
    $run_delete = mysqli_query($con, $delete_student);

    if ($run_delete) {
        echo "<script>alert('One of your student has been Deleted')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}

?>