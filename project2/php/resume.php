<?php

include 'social-media.php';

?>

<!doctype html>

<html lang="en">
<head>
  <title>Resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/project2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <?php
            foreach ($pageLinks as $key => $value) {
                if (strcmp($key, 'Resume') == 0) {
                    echo '<li class="active"><a href="' . $value . '">' . $key . '</a></li>';
                }
                else {
                    echo '<li><a href="' . $value . '">' . $key . '</a></li>';
                }
            }
        ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid text-center">
    <div class="row content" style = "height: 1200px;">
      <div class="col-sm-2 sidenav">
        <h4>Social Media</h4>
        <?php
            foreach ($socialMediaLinks as $key => $value) {
                echo '<p><a href="' . $value . '">' . $key . '</a></p>';
            }
        ?>
      </div>
      <div class="col-sm-8 text-left">
        <h1 class="header">Resume</h1>
        <hr>
        <p>
          Here is my work experience, along with education, relevant courses
          I have taken, extracurricular and volunteer activites, and other information.
          This will be an informal resume.
          I will continue to update this page as I progress through college and gain
          more work experience.
        </p>
        <?php
            foreach ($images as $key => $value) {
                if (strcmp($key, 'Resume') == 0) {
                    echo '<p>You can download a PDF version of my actual resume <a href="' . $value . '">here</a></p>';
                }
            }
        ?>
        <br>
        <div class="resume">
          <fieldset>
            <div>
              <h3 class="resumeHeader">Education</h3>
              <section id="resume">
                <p>
                  University of Pittsburgh
                <br>
                  Bachelor of Science in Computer Science
                <br>
                  GPA: 3.29/4.00
                <br><br>
                  Robert Morris University
                <br>
                  Bachelor of Science in Software Engineering
                <br>
                  GPA: 3.51/4.00
                </p>
                <ul>
                  <li>Dean's List, NSCS</li>
                  <li>Division 1 Men's Soccer Team</li>
                </ul>
              </section>
            </div>
            <div>
              <h3 class="resumeHeader">Related Courses</h3>
              <section id="resume">
                <p>
                  Data Structures and Abstractions with Java
                  <br>
                  Intro to Systems Software
                  <br>
                  Algorithm Implementation
                  <br>
                  Programming Language for Web Applications
                  <br>
                  Formal Methods in Computer Science
                </p>
              </section>
            </div>
            <div>
              <h3 class="resumeHeader">Programming Languages</h3>
              <section id="resume">
                <p>Java, C++, C, Python, HTML, CSS, JavaScript</p>
              </section>
            </div>
            <div>
              <h3 class="resumeHeader">Work Experience</h3>
              <section id="resume">
                <p>Software Engineering Co-op at Zoll LifeVest (First Rotation)</p>
                  <ul>
                    <li>Work with Git to utilize source control.</li>
                    <li>Participate on a Scrum team in Agile Software Development.</li>
                    <li>Complete various projects and present the code to my Scrum team.</li>
                  </ul>
                <p>Sales Associate at Polo Ralph Lauren Factory Store</p>
                  <ul>
                    <li>Communicate with co-workers and customers, share complaints with my manager
                      to help make improvements, and manage requests while multitasking.</li>
                    <li>Manage the cash register of at least $500.00.</li>
                    <li>Provide effective and respectful customer service.</li>
                  </ul>
                <p>Greenskeeper at Valley Brook Country Club</p>
                  <ul>
                    <li>Accomplished personal task each day in alotted time given by manager.</li>
                    <li>Assisted and worked in small groups with other co-workers to complete certain tasks.</li>
                    <li>Quickly learned how to operate new machinery.</li>
                  </ul>
              </section>
            </div>
            <div>
              <h3 class="resumeHeader">Extracurricular and Volunteer Activities</h3>
              <section id="resume">
                <p>SNPJ Activities</p>
                  <ul>
                    <li>Volunteer for Men's 200 Club, Duck Race, Slovenefest, holiday parties and events.</li>
                    <li>Attend Young Adult Conference and Teen Experience Leadership Workshops</li>
                  </ul>
              </section>
            </div>
          </fieldset>
        </div>
      </div>

      <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>&copy; Alec Brumbaugh, 2017</p>
  </footer>

</body>
</html>
