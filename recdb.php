<?php
include 'db.php';

$uname = $_POST["userid"];
$pass = $_POST["password"];

$sql = "select username,password from reception where username='$uname' and password ='$pass' ";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $u = $row["username"];
        $p = $row["password"];
        if (($u == $uname && $p == $pass) == TRUE) {
            echo "<script>alert('Login Successful')</script>";
            header("refresh:0,url=form.php");
        }
    }
} else {
    echo "<script>alert('Login Failed')</script>";
    header("refresh:0,url=receptionlog.html");
}

?>