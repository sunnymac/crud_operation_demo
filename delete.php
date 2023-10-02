<?php
include 'conntect.php';
if (isset($_GET['myid'])) {
    $id = $_GET['myid'];

    $sql = "DELETE FROM crud WHERE `crud`.`id` =$id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:display.php');

        //echo "Delete";
    } else {
        echo "error";
    }
}
