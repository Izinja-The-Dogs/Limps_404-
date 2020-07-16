<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title> Home Page</title>
	<link rel="stylesheet" href="css/home_style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="images/ccdu_logo.png">
</head>
<body>

  <header>
    <div class="container">
      <nav>
        <h1 class="brand"><a href="home.php"><span class="green">C</span><span class="blue">C</span><span class="green">D</span><span class="blue">U</span></a></h1>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="pages/post_offer.php">Services <i class="fa fa-chevron-down"></i></a>
            <div class="sub-menu">
              <ul>
                <li><a href="pages/post_offer.php">Post Offers</a></li>
                <li><a href = "pages/place_events.php">Place Events</a></li>
              </ul>
            </div>
          </li>
          <li><a href = "pages/pricing.php">Pricing</a></li>
          
          <li>
            <form action="php/Logout.inc.php" method="post">
              <a name="logout_in" class="sign-in-btn">Logout</a>
            </form>
          </li>
         
        </ul>
      </nav>
    </div>
    <h1 class="welcome-text">Wits Career Portal</h1>
  </header>

    <div class="follow-us">
      <a href="https://www.facebook.com/witsgraduaterecruitmentprogramme/"><i class="fa fa-facebook-f" style="font-size: 20px"></i></a><br><br>
      <a href="https://twitter.com/Wits_GRP?s=09"><i class="fa fa-twitter" style="font-size: 20px"></i></a><br><br>
      <a href="https://www.instagram.com/witsgrp/"><i class="fa fa-instagram" style="font-size: 20px"></i></a><br><br>
      <a href="https://www.youtube.com/channel/UCWXJSwdXtqEwnd0ab1mfdPQ"><i class="fa fa-youtube" style="font-size: 20px"></i></a><br><br>
      <a href="https://www.linkedin.com/in/wits-graduate-recruitment-programme-539627174"><i class="fa fa-linkedin" style="font-size: 20px"></i></a>
    </div>

    <div id="top_page">
      <div class="home-header-div" style="margin-left: 200px">
        <h2 class="home-header2-label" style="margin-top: 80px">01. <span class="home-header2" style="font-size: 30px">Home</span></h2>
        <hr>
      </div>
      <p class="welcome-text">Welcome to</p>
      <h1 class="portal-name">Wits Career Portal for Organizations</h1>

      <div class="border">
        <blockquote>
          A place to find your dream employees <br>and future leaders!
        </blockquote>
      </div>

      <h1 class="ccdu-name">Counselling and Careers Development Unit (CCDU)</h1>
      <h2 class="define-ccdu">The CCDU offers a welcoming and safe space for students, with a focus on well being,
        academic success and carrer readiness.<a href="#contacts_page"> Please contact us</a></h2>

      <form class="ccdu-activities">
        <h2 class="ccdu-form-header">CCDU</h2>
        <p class="ccdu-activities-list">
          CAREER RESOURCES<br>
          LIFE SKILLS DEVELOPMENT<br>
          THERAPY SERVICES<br>
          MENTORING<br>
          LIFE COUCHING<br>
          PEER EDUCATORS<br>
          GRADUATE RECRUITMENT PROGRAMME<br>
          JOURNEY TO EMPLOYABILITY
        </p><br>
        <a href="#">Learn more...</a>
      </form>
    </div>

    <div class="faq-page">
      <h1 class="faq-header">FAQ'S:</h1>
      <form class="faq-form">
        <h3 style="margin-left:0">How does an employer use CCDU Career Portal for Organizations?</h3>
        <p style="margin-left:0">
          CCDU Career Portal for Organizations allows employers to <a href="Pages/Post Offers/post_offer.html">post</a> jobs, internships, traineeships
          and commissions as well as <a href="Pages/place_events.html">placing events</a> to reach a high number of potential candidates from Wits
          University. Applications can be done via email or hyperlink for online applications. Events can be done in Wits campus, organization's preferred
          location or online.
        </p>
      </form>
      <form class="faq-form">
        <h3 style="margin-left:0">Does CCDU charge for offer postings and events?</h3>
        <p style="margin-left:0">
          Yes. CCDU does charge employers for both offer postings and events, regardless, the cost is set by a budget.<br><br>
          Get more information on <a href="Pages/pricing.html">pricing</a> page.
        </p>
      </form>

      <form class="faq-form">
        <h3 style="margin-left:0">How do I post an offer on CCDU Career Portal?</h3>
        <p style="margin-left:0">
          1. Go to post offers in the menu above.<br>
          2. Add details about your offer posting.<br>
          3. Review the offer posting.<br>
          4. Add your account information.<br>
          5. Submit for validation<br><br>
          Once your post is validated it will be visible in the Career Portal for Students.
        </p>
      </form>

      <form class="faq-form">
        <h3 style="margin-left:0">Is it free to attend an Event?</h3>
        <p style="margin-left:0">
          Yes. It is free for employers to attend the Postgraduate Welcome Day.<br><br>

          Go to <a href="Pages/pricing.html">pricing</a> for me information.
        </p>
      </form>
    </div>

    <div id="contacts_page">
      <h1>Contact us</h1><br>
      <h3>CCDU BRAAMFONTEIN CAMPUS WEST [Main Office]:</h3>
      <p class="contact-details-ccdu">
        CCDU Building, Braamfontein Campus West, Wits University<br>
        Closest Entrance: Gate 9, Enoch Sontonga Ave, Braamfontein.<br>
        Tel: +27 11 717-9170 (Reception) | Tel: +27 11 717-9859 (Direct) | Email: <a href="mailto:info.ccdu@wits.ac.za">info.ccdu@wits.ac.za</a>
      </p>
      <br><br>
      <h3>CCDU EDUCATION CAMPUS:</h3>
      <p class="contact-details-ccdu">
        M14 Ground Floor, Marang Block, Education Campus, Parktown<br>
        Tel: +27 11 717-9268 | Email: <a href="mailto:info.ccdu@wits.ac.za">info.ccdu@wits.ac.za</a>
      </p>

      <p style="margin-top: 20px">Both offices are open Monday-Friday 08H00-16H30</p>
    </div>

  </div>

  <!-- Modal -->
  <div class="modal-container">
    <div class="modal">
      <h1>CCDU team</h1>
      <hr><br>
      <p style="margin-left: 15px">
        The CCDU is a multi- disciplinary team who provide professional supportive services in a welcoming and safe space to Wits students.
        The team endeavor to facilitate, contribute to and enhance the well-being and self-empowerment of students, based on a an ethos of
        student-centeredness, inclusivity and human rights.
      </p>

      <form class="ccdu-team-activities">
        <h2 class="ccdu-form-header">The CCDU team offer students:</h2>
        <p class="ccdu-activities-list">
          • Individual and group counselling<br>
          • Career counselling and development<br>
          • Life coaching<br>
          • Psycho-educative workshops, training and advocacy programmes<br>
          • HIV education, advocacy and support<br>
          • Volunteer peer advocacy on social justice, mental health, and HIV<br>
          • Peer mentorship training<br>
          • Graduate recruitment <br>
          • The 'Journey to Employability'<br>
          • Professional internships
        </p><br>
      </form>

      <h2 style="margin: 30px 0px 0px 15px">Vision and Mission: Student Affairs</h2>
      <br>
      <p style="margin-left: 15px">
        Ensuring a Wits experience that is affirming, inclusive, intellectually stimulating and rooted in the Wits values and aspirations:
      </p>
      <p style="margin-left: 15px; margin-right: 20px; font-size: 20px; font-style: bold">
        We are Strategic Partners in Enabling Academic Success through Student Support and Development.
      </p><br>
      <p style="margin-left: 100px; font-size: 20px; font-style: italic; color: #fff">
        One Division. One Mission. Student Success
      </p>

      <h2 style="margin: 30px 0px 0px 15px">Values</h2><br>
      <p style="margin: 0px 0px 0px 15px; font-size: 20px; font-style: bold; color: #fff">
        The Counselling and Careers Development Unit (CCDU)
        is a Strategic Partner in Enabling Student  Success through Student Support and Development ,through the values of:
      </p>
      <p class="ccdu-activities-list" style="margin-left: 15px">
        • Integrity<br>
        • Compassion<br>
        • Respect<br>
        • Student Centeredness<br>
        • Service Excellence<br>
        • Diversity and Inclusivity
      </p><br>

      <hr><br>
      <p style="margin-left: 15px; margin-right: 20px; font-size: 15px; font-style: italic; color: #fff">
        Key operations and services at the CCDU will continue to be aligned to the:<br>
          Student Affairs Divisional Vision, Mission and values 2019-2022
        (June,2019)<br>
         and the priority objective of “Academic Excellence and the Wits Experience”
        (Wits Vision 2022).

      </p>
      <span class="model-close">x</span>
    </div>
  </div>

  <script type="text/javascript" src="js/home.js"></script>

</body>
</html>
