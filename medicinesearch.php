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
          $medicine_name = $_POST["msearch"];

          $sql = "SELECT * FROM medicine WHERE medicinename = '$medicine_name'";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              echo "<div style='font-size: 14px; padding:0px 5px 5px 5px'>";
              echo "<br> <b>Name:</b> " . $row["medicinename"] . "<br><br> <b>Salts Used:</b> " . $row["salt"] ." <br><b>MRP:</b> ₹" . $row["mrp"] . "<br><b>Uses:</b> " . $row["uses"] . "<br><br><b>Alternate medicines:</b> " . $row["alternatemedicines"] . "<br><br><b>Side effect:</b> " . $row["sideeffect"] ."<br> <b>How to Use: </b> " . $row["howtouse"] . "<br><br><b>How It Work:</b> " . $row["howitworks"] . "<br>";
              echo "</div>";
            }
          } else {
            echo "<div style='font-size: 16px; padding:5px'>";
            echo "0 results";
            echo "</div>";
          }

          $conn->close();
          ?>