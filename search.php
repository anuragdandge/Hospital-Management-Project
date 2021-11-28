<?php

include "db.php";

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    // $search = preg_replace("#[^0-9a-z]i#", "", $search);

    $query = mysqli_query($con, "SELECT * FROM patient WHERE name LIKE '%" . $search . "%'") or die("Could not search");
    $count = mysqli_num_rows($query);

    if ($count == 0) {
        echo "<script>alert('Data Not Found');</script>";
        header("refresh:0,url= history.php");
    } else {

        while ($row = mysqli_fetch_array($query)) {

            $srno = $row['srno'];
            $name = $row['name'];

            // $output .='<div> '.$town.''.$street.''.$bedrooms.''.$bathrooms.'</div>';
            echo "<script>alert('Id is $srno of $name')</script>";
            header("refresh:0,url= history.php");
        }
    }
}
