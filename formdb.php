<?php
include 'db.php';
$name = $_POST["name"];
$contact = $_POST["contact"];
$gender = $_POST["gender"];
$consult = $_POST["consult"];
$age = $_POST["age"];
$address = $_POST["address"];
$symptoms = $_POST["symptoms"];
$date = date("Y-m-d");
$patienttype = "New Patient";
$con = new mysqli($host, $user, $pwd, $db);

if (!$con) {
    echo "Error : " . $con->connect_error;
}


// echo "<div>$name $contact $gender $consult $age $address $symptoms $date $patinttype</div>";


$sql = "INSERT INTO `patient`(`name`, `contact`, `gender`, `consult`, `age`, `address`, `symptoms`, `date`, `patient type`) VALUES ('$name','$contact','$gender','$consult','$age','$address','$symptoms','$date','$patienttype')";

if ($con->query($sql) == TRUE) {
    echo "<script>alert('data added')</script>";
    header("refresh:0,url= form.php");
} else {
    echo "<script>alert('data not added')</script>";
    header("refresh:0,url= form.php");
}
$con->close();
?>