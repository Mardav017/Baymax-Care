<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="./user-page.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;600;700&display=swap"
    />
    
  </head>
  <body>
  <form  action="user_homeback.php" method="POST">
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
          <b  class="welcome">Welcome !!</b>
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
        <img
          class="sthethosscope-1-icon"
          alt=""
          src="./public/sthethosscope-1@2x.png"
        />

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
          <div class="form-child"></div>
          <!-- <button class="form-item"></button> -->
          <input  type="submit" class="form-item" value="Search" name="dsubmit" onclick="document.getElementById('#docapp').style.height = '360px';">
          <input class="form-inner" type="text" placeholder="Search Doctor" />
        </div>
      </div>
      <div id="med" class="medicine-search">
        <div class="medicine-search-parent">
          <b class="medicine-search1">Medicine Search</b>
          <b class="experience-the-freedom"
            >Experience the freedom of pain-free movement with our powerful and
            reliable medication.</b
          >
        </div>
        <img class="removal-1-icon" alt="" src="./public/removal-1@2x.png" />

        <div  class="form1">
          <div id="medsrh" class="rectangle-div"></div>
          <!-- <button class="form-item"></button> -->
          <input type="submit" class="form-item" name = "msubmit" value="Search" onclick="document.getElementsByClassName('form1,rectangle-div').style.height = '360px';">
          <input id="med" class="form-inner" type="text" placeholder="Search Medicine" />
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
        <img
          class="screenshot-2023-05-03-184622-1"
          alt=""
          src="./public/screenshot-20230503-184622-1@2x.png"
        />

        <b class="contact-us">Contact Us</b>
        <b class="baymaxcare">@Baymaxcare</b>
        <img class="footer-section-child" alt="" src="./public/group-13.svg" />

        <b class="copyright-by-baymax">Copyright© by BayMax Care</b>
      </div>
    </div>
  </body>
</html>
