<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./Doctor_Page.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;600;700&display=swap" />
</head>

<body>
  <form action="#" method="POST">
    <div class="doctorpage">
      <div class="main">
        <div class="search-section">
          <img class="icon" alt="" src="./public/7191136-3568984-1-1@2x.png" />

          <img class="vector-icon" alt="" src="./public/vector.svg" />

          <div class="they-say-laughter-is-the-best-parent">
            <div class="they-say-laughter-container">
              <p class="they-say-laughter">
                They say laughter is the best medicine, well it is more like a
              </p>
              <p class="they-say-laughter">
                medicine a general physician will prescribe but if you want
              </p>
              <p class="they-say-laughter">
                specialized care, make sure to go to a doctor.
              </p>
            </div>
            <b class="healthy-living-is-container">
              <p class="healthy-living-is">Healthy living is a choice,</p>
              <p class="they-say-laughter">make the right one</p>
            </b>
          </div>
          <b class="baymax-care">BayMax Care</b>
          <a href="#app" class="appointments">Appointments</a>
          <a href="#" class="create-prescription">Create Prescription</a>
          <a href="#med" class="medicine-a-z">Medicine A-Z</a>
          <a href="#feed" class="feedbacks">Feedbacks</a>
          <img class="baymax-2-icon" alt="" src="./public/baymax-2@2x.png" />

          <img class="vector-icon1" alt="" src="./public/vector1.svg" />

          <b class="welcome-doctor">Welcome Doctor !!</b>
        </div>
      </div>
      <div id="app" class="appointment">
        <img class="copy-1-icon" alt="" src="./public/8513821-3898596-copy-1@2x.png" />

        <div class="appointment-child"></div>
        <b class="appointments1">Appointments</b>
        <div class="appointment-item">
          <br>
          <?php
          ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL & ~E_WARNING);

          include 'dbconnection.php';


          // Create connection
          $conn = new mysqli('localhost', 'root', '', 'signup');
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT fname,phone FROM signup";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              echo "<div style='font-size: 16px; padding:5px; padding-left:10px; color: #000; '>";
              echo "<br><b> Name:</b> " . $row["fname"] . "<b style='padding-left:10px;'> Phone: </b>" . $row["phone"];
              echo "</div>";
            }
          } else {
            echo "0 results";
          }

          $conn->close();
          ?>




        </div>
        <div class="available-appointments">Available Appointments</div>
      </div>
      <div id="med" class="medicine">
        <div class="medicine-search-parent">
          <b class="medicine-search">Medicine Search</b>
          <b class="experience-the-freedom">Experience the freedom of pain-free movement with our powerful and
            reliable medication.</b>
        </div>
        <img class="removal-1-icon" alt="" src="./public/removal-1@2x.png" />

        <div class="form">
          <div class="form-child"></div>
          <!-- <button class="form-item"></button>
          <input class="form-inner" type="text" placeholder="Search Medicine" /> -->
          <input type="submit" class="form-item" value="Search">
          <input id="med" name="msubmit" class="form-inner" type="text" placeholder="Search Medicine" />
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





      <div id="feed" class="feedbacks1">
        <img class="icon1" alt="" src="./public/13961232-5385893-1@2x.png" />

        <b class="feedbacks2">Feedbacks</b>
        <div class="union-icon" alt="" style="background-image: url(./public/union.svg); ">

        <?php
          ini_set('display_errors', '1');
          ini_set('display_startup_errors', '1');
          error_reporting(E_ALL & ~E_WARNING);

          include 'dbconnection.php';


          // Create connection
          $conn = new mysqli('localhost', 'root', '', 'signup');
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT nam,contact_number,feedback FROM feedbacks";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              echo "<div style='font-size: 16px; padding:5px; padding-left:50px; color: #000; '>";
              echo "<br><b> Name:</b> " . $row["nam"] . "<b style='padding-left:10px;'> Phone: </b>" . $row["contact_number"]."<br><b> FeedBack: </b>". $row["feedback"];
              echo "</div>";
            }
          } else {
            echo "0 results";
          }

          $conn->close();
          ?>


        
        </div>

      </div>
      <div class="footer-section">


        <div class="contact-us-parent">
          <b class="contact-us">Contact Us</b>
          <b class="baymaxcare">@Baymaxcare</b>
          <img class="group-child" alt="" src="./public/group-13.svg" />

          <b class="copyright-by-baymax">Copyright© by BayMax Care</b>
        </div>
      </div>
    </div>
</body>

</html>