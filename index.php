<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Segoe UI:wght@400;600;700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;600;700&display=swap"/>
  
  

</head>

<body>

  <div class="landing-page">
    <div class="main">
      <div class="search-section">
        <img class="untitled-1-icon" alt="" src="./public/untitled-1@2x.png" />

        <b class="baymax-care">BayMax Care</b>
        <a href="#med" class="medicine-a-z">Medicine A-Z</a>
        <img class="baymax-2-icon" alt="" src="./public/baymax-2@2x.png" />

        <div class="at-baymax-we-take-the-guesswo-parent">
          <div class="at-baymax-we-container">
            <span class="at-baymax-we-container1">
              <p class="at-baymax-we">
                At Baymax, we take the guesswork out of finding the right
              </p>
              <p class="at-baymax-we">
                doctors,hospitals, and care for you and your family.
              </p>
            </span>
          </div>
          <b class="your-health-is-container">
            <p class="your-health-is">Your health is your wealth, and</p>
            <p class="at-baymax-we">
              <span>BayMax is your key to unlocking it</span>
            </p>
          </b>
        </div>
        

        <a href="signup/signup.php"><button class="search-section-child">User
            SignUp</button></a>
        <a href="Drsignup/Drsignup.php"><button class="search-section-item">Doc SignUp</button></a>
      </div>
    </div>

    <div class="appointment">
      <div class="vector-parent">
        <img class="vector-icon" alt="" src="./public/vector.svg" />

        <div class="online-emergency-provides-container">
          <span class="at-baymax-we-container1">
            <p class="online-emergency">Online Emergency</p>
            <p class="provides-immediate-medical">
              provides immediate medical assistance
            </p>
            <p class="provides-immediate-medical">
              and care to patients in emergency situations.
            </p>
          </span>
        </div>
      </div>
      <div class="medication-service-responsible-parent">
        <div class="medication-service-responsible-container">
          <span class="at-baymax-we-container1">
            <p class="online-emergency">Medication Service</p>
            <p class="provides-immediate-medical">
              responsible for the safe and efficient management
            </p>
            <p class="provides-immediate-medical">
              of all medications used in patient care
            </p>
          </span>
        </div>
        <img class="vector-icon1" alt="" src="./public/vector1.svg" />
      </div>
      <div class="vector-group">
        <img class="vector-icon2" alt="" src="./public/vector2.svg" />

        <div class="hr-health-program-container">
          <span class="at-baymax-we-container1">
            <p class="online-emergency">24hr health Program</p>
            <p class="provides-immediate-medical">
              offers comprehensive medical services and care
            </p>
            <p class="provides-immediate-medical">
              around the clock, with dedicated healthcare
            </p>
            <p class="provides-immediate-medical">
              professionals available to address patients
            </p>
          </span>
        </div>
      </div>
      <div class="our-service-we-container">
        <span class="at-baymax-we-container1">
          <p class="our-service">
            <span class="our-service1">
              <span>Our Service</span>
            </span>
          </p>
          <p class="blank-line">
            <span class="our-service1">
              <span>&nbsp;</span>
            </span>
          </p>
          <p class="we-offer-special-service">
            <b>We Offer Special Service</b>
          </p><br>
          <p class="provides-immediate-medical">
            In a free hour, when our power of choice is untrammeled and
          </p>
          <p class="provides-immediate-medical">
            when nothing prevents our being able
          </p>
        </span>
      </div>
    </div>




    <!-- <form action="#" method="POST"> -->
    <div id="med" class="appointment1">
      <form action="#" method="POST">
        <img class="gx65yga-1-icon" alt="" src="./public/8gx65yga-1@2x.png" />

        <div class="appointment-child"></div>
        <input class="appointment-item" id="medicine-search" name="msearch" type="text" placeholder="Search Medicine" autocomplete="off"/>

        <!-- <button class="appointment-inner"></button> -->
        <input type="submit" class="appointment-inner" id="medsearch" value="Search">
        <div class="rectangle-div" id="medresult">

          <?php
          include 'medicinesearch.php';
          ?>




        
        </div>
        <b class="medicine-search">Medicine Search </b>
    </div>
    <div class="medicine">
      <div class="medicine-child"></div>
      <img class="icon" alt="" src="./public/7774236-3736765-1-2@2x.png" />

      </form>
      <div class="find-the-right-doctor-right-at-parent">
        <div class="find-the-right-container">
          <span class="at-baymax-we-container1">
            <p class="find-the-right">Find the Right Doctor Right At</p>
            <p class="find-the-right">Your Fingertips</p>
          </span>
        </div>
        <div class="baymax-is-an-container">
          <span class="at-baymax-we-container1">
            <p class="at-baymax-we">
              BayMax is an online software system that is designed to assist
              healthcare professionals and patients in managing
              healthcare-related activities. These applications can be used
              for a wide range of purposes, such as:
            </p>
            <p class="at-baymax-we">&nbsp;</p>
            <ul class="health-and-wellness-management">
              <li class="health-and-wellness">
                Health and wellness management: Medical web applications can
                provide users with access to health and wellness resources,
                such as diet and exercise trackers, symptom checkers, and
                medication reminders.
              </li>
              <li>
                Clinical decision support: Medical web applications can
                provide healthcare providers with decision support tools, such
                as drug interaction checkers and diagnostic support systems.
              </li>
            </ul>
          </span>
        </div>
        <div class="about">About</div>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript" src="suggestions.js"></script>
</body>

</html>