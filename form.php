<!DOCTYPE html>
<html lang="en">

<head>
  <title>SIGMA Hospital | Form</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <style>
    body {
      background-color: rgb(152, 192, 200);
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

  <div style="
        width: 100%;
        padding-left: 0.75em;
        padding-right: 0.75em;
        margin-right: auto;
        margin-left: auto;
        max-width: 1140px;
      ">
    <form class="form" action="formdb.php" method="POST">
      <h2>New Patient Registration Here</h2>
      <hr />
      <div class="main">
        <div class="col">
          <div class="fname">
            <label for="fname"> Full Name </label><br />
            <input type="text" class="fn" id="fname" name="name" placeholder="Enter Your Name " required />
          </div>

          <div class="mobno">
            <label for="mobno">Mobile Number </label><br />
            <input type="text" class="mb" maxlength="10" id="mobno" name="contact" placeholder="Enter Phone Number " required />
          </div>
        </div>
        <div class="col">
          <div class="gender">
            <label for="gender"> Gender </label><br />
            <select id="gender" name="gender" required>
              <option selected="true" disabled="disabled" value="">
                Select
              </option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>

          <div class="consult">
            <label for="cons"> Consulting Doctor </label><br />
            <select id="cons" name="consult" required>
              <option selected="true" disabled="disabled" value="">
                Select
              </option>
              <option value="Eye Specialist">Eye Specialist</option>
              <option value="General Physician">General Physician</option>
              <option value="Dentist">Dentist</option>
            </select>
          </div>
          <div class="age">
            <label for="age"> Age </label><br />
            <input type="text" maxlength="3" name="age" id="" required />
          </div>
        </div>

        <div class="addr">
          <label for="add"> Address </label><br />
          <textarea name="address" id="add" cols="73" rows="3"></textarea>
        </div>
        <div class="symp">
          <label for="symp"> Symptoms </label><br />
          <textarea name="symptoms" id="symp" class="textarea" required></textarea>
        </div>
      </div>

      <input type="submit" value="Submit" />
    </form>
  </div>
</body>

</html>