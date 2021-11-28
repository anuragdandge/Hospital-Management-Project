<?php

include 'db.php';

$id = $_GET['id'];

$sql =  "DELETE FROM patient WHERE srno = '$id'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo  "Success";
    header("refresh:1,url=history.php");
} else {
    echo "Failed to delete";
    header("refresh:1,url=history.php");
}
?>