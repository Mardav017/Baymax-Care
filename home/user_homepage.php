<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <link rel="stylesheet" href="./user-page.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;600;700&display=swap" />

</head>

<body>
  <form action="#" method="POST">
    <div class="userpage">
      <div id="home" class="first">
        <div class="search-section1">
          <div class="own-your-health-parent">
            <b class="own-your-health">Own Your Health</b>
            <div class="baymax-gives-you">
              Baymax gives you control of your medical data so you can focus on
              your health, not chasing paperwork.
            </div>
          </div>
          <b class="welcome">Welcome !!</b>
          <a href="#app"><button class="search-section-child">Make Appointment</button></a>
          
          <img class="icon2" alt="" src="./public/12-1@2x.png" />

          <a href="#home"><b class="baymax-care">BayMax Care</b></a>
          <a href="#" class="make-appointment">Prescription</a>
          <a href="#feed" class="medicine-a-z">Feedback</a>
          <!-- <a href="#feed" class="feedback">Feedback</a> -->
          <a href="#med" class="prescription">Medicine A-Z</a>
          <img class="baymax-1-icon" alt="" src="./public/baymax-1@2x.png" />

          <img class="vector-icon4" alt="" src="./public/vector4.svg" />
        </div>
      </div>
      <div id="app" class="appointment">
        <img class="sthethosscope-1-icon" alt="" src="./public/sthethosscope-1@2x.png" />

        <div class="find-your-doctor-container">
          <p class="find-your-doctor">Find your doctor & make</p>
          <p class="an-appointment">
            <b>an appointment!</b>
          </p>
        </div>
        <div class="get-your-digital">
          Get your digital prescription Today!!
        </div>
        <div id="docapp" class="form">
          <div class="form-child">
            <br>

            <?php

            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL & ~E_WARNING);
            // Create connection
            $conn = new mysqli('localhost', 'root', '', 'signup');
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $fname1 = $_POST["dname"];
            if (isset($_POST['dsubmit'])) {
              $sql = "SELECT fname,phone,mail FROM drsignup WHERE fname= '$fname1'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo "<div style='font-size: 18px; padding-left:30px margin-top:20px '><br>";
                  echo "<br><br> Name: " . $row["fname"] . "<br> Phone: " . $row["phone"] . "<br> Name: " . $row["mail"];
                  echo "</div>";
                }
              } else {
                echo "<div style='font-size: 18px; padding-left:20px'>";
                echo "0 results";
                echo "</div>";
              }

            }
            ?>



          </div>
          <!-- <button class="form-item"></button> -->
          <input type="submit" class="form-item" value="Search" name="dsubmit"
            onclick="document.getElementById('#docapp').style.height = '360px';">
          <input class="form-inner" type="text" name="dname" placeholder="Search Doctor" />
        </div>
      </div>
      <div id="med" class="medicine-search">
        <div class="medicine-search-parent">
          <b class="medicine-search1">Medicine Search</b>
          <b class="experience-the-freedom">Experience the freedom of pain-free movement with our powerful and
            reliable medication.</b>
        </div>
        <img class="removal-1-icon" alt="" src="./public/removal-1@2x.png" />

        <div class="form1">
          <div id="medsrh" class="rectangle-div"> </div>
          <!-- <button class="form-item"></button> -->
          <input type="submit" class="form-item"  value="Search"
            onclick="document.getElementsByClassName('form1,rectangle-div').style.height = '360px';">
          <input id="med" class="form-inner" name="msubmit" type="text" placeholder="Search Medicine" />
          <div style="height:50px; width:900px;margin-left:20px; margin-top:100px;">


            <?php


            ini_set('display_errors', '1');
            ini_set('display_startup_errors', '1');
            error_reporting(E_ALL & ~E_WARNING);
            // include 'dbconnection.php';
            

            // Create connection
            $conn = new mysqli('localhost', 'root', '', 'signup');
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $medicine_name = $_POST["msubmit"];

            $sql = "SELECT medicinename,mrp,uses,alternatemedicines,sideeffect,howitwork FROM medicine WHERE medicinename = '$medicine_name'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<div style='font-size: 12px; padding:5px'>";
                echo "<br> Name: " . $row["medicinename"] . " <br><br>MRP: " . $row["mrp"] . "<br><br>Uses:" . $row["uses"] . "<br><br>Alternatemedicines:" . $row["alternatemedicines"] . "<br><br>Sideeffect:" . $row["sideeffect"] . "<br><br>How It Work:" . $row["howitwork"] . "<br>";
                echo "</div>";
              }
            } else {
              echo "<div style='font-size: 16px; padding:5px'>";
              echo "0 results";
              echo "</div>";
            }

            $conn->close();
            ?>

          </div>



        </div>
      </div>









      <div id="feed" class="feedback">
        <img class="photo-3-1" alt="" src="./public/photo-3-1@2x.png" />

        <div class="feedback-parent">
          <b class="feedback1">Feedback</b>
          <b class="feel-free-to">Feel free to drop us a line below!!</b>
        </div>
        <div class="rectangle-parent">
          <input id="feed" class="group-child" type="text" name="yourname" placeholder="Your Name" />

          <input class="group-item" type="text" name="phonenumber" placeholder="Phone Number" />

          <!-- <button class="group-inner">Send</button> -->
          <input type="submit" class="group-inner" name="submit" value="Send">
          <textarea class="rectangle-textarea" name="feedback" placeholder="Enter Feedback"></textarea>
        </div>
      </div>
      <div class="footer-section1">
        <img class="screenshot-2023-05-03-184622-1" alt="" src="./public/screenshot-20230503-184622-1@2x.png" />

        <b class="contact-us">Contact Us</b>
        <b class="baymaxcare">@Baymaxcare</b>
        <img class="footer-section-child" alt="" src="./public/group-13.svg" />

        <b class="copyright-by-baymax">Copyright© by BayMax Care</b>
      </div>
    </div>
</body>

</html>

<?php
// include 'dbconnection.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["yourname"];
$phone = $_POST["phonenumber"];
$feed = $_POST["feedback"];
$sql = "INSERT INTO feedbacks (nam, contact_number, feedback)
VALUES ('$name', '$phone', '$feed')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>