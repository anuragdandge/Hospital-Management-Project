<!DOCTYPE html>
<html lang="en">

<head>
  <title>SIGMA Hospital</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <style>
    .button li {
      display: block;
      background-color: rgb(75, 60, 161);
      border-radius: 10px;
    }

    a {
      text-decoration: none;
    }

    table {
      border-collapse: collapse;
      border-radius: 1em;
      overflow: hidden;
    }

    .patient {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    .patient td,
    .patient th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .patient tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .patient tr:nth-child(odd) {
      background-color: #ffffff;
    }

    .patient tr:hover {
      background-color: #ddd;
    }

    .patient th {
      padding: 12px 12px;
      text-align: left;
      background-color: rgb(75, 60, 161);
      color: white;
    }
  </style>
</head>

<body>
  <div class="header">
    <h1>SIGMA Hospital</h1>
  </div>
  <div class="nav">
    <div class="link">
      <li><a href="index.html">Home</a></li>
      <li><a href="admin.html">Admin</a></li>
      <li><a href="receptionlog.html">Reception</a></li>
      <li><a href="doctor.html">Doctor</a></li>
      <li><a href="aboutus.html">About us</a></li>
    </div>
  </div>
  <?php

  include 'db.php';

  $sql = "select * from patient";
  $result = $con->query($sql);
  if ($result->num_rows > 0) { ?>
    <div style="
        width: 100%;
        padding-left: 0.75em;
        padding-right: 0.75em;
        margin-right: auto;
        margin-left: auto;
        max-width: 1140px;
      ">
      <h1 style="
        text-align: center;
        margin-top: 1em;
        margin-bottom: 1em;
        font-weight: 300;
        line-height: 1.2;
        color: white;
        background-color: rgb(75, 60, 161);
        border-radius: 10px;
      ">
        History
      </h1>
      <div style="margin-bottom: 3em;">
        <form class="form" action="search.php" method="POST">
          <h2>Admin Search Here</h2>
          <hr />
          <br />
          <label for="fname">Search Name</label>
          <input type="text" id="fname" name="search" placeholder="Enter Name" />
          <input type="submit" value="Submit" />
        </form>
      </div>
      <div style="margin-bottom: 3em;">
        <table class="patient">
          <tr>
            <th>Sr.No.</th>
            <th>Patient Name</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>Consulting Doctor</th>
            <th>Age</th>
            <th>Address</th>
            <th>Sympotoms</th>
            <th>Date</th>
            <th>Patient Type</th>
            <th>Delete</th>
          </tr>
          <?php
          while ($row = $result->fetch_assoc()) { ?>

            <?php
            $id = $row['srno'];
            $name = $row['name'];
            $Mobno = $row['contact'];
            $gender = $row['gender'];
            $consult = $row['consult'];
            $age = $row['age'];
            $address = $row['address'];
            $symptoms = $row['symptoms'];
            $date = $row['date'];
            $patient = $row['patient type'];

            echo ("<tr>

            <td>$id</td>
            <td>$name</td>
            <td>$Mobno</td>
            <td>$gender</td>
            <td>$consult</td>
            <td>$age</td>
            <td>$address</td>
            <td>$symptoms</td>
            <td>$date</td>
            <td>$patient</td>
            <td><div class='button'><li><a href='./_delete.php?id=$id' class='delete-btn'>delete</a></li></div></td>
          </tr>");
            ?>

          <?php
          }
          ?>
        </table>
      </div>
    </div>
  <?php
  }
  ?>
</body>

</html>