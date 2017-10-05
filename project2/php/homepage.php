<?php

include 'social-media.php';

?>

<!doctype html>

<html lang="en">
<head>
  <title>Home</title>
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
                if (strcmp($key, 'Home') == 0) {
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
    <div class="row content">
      <div class="col-sm-2 sidenav">
        <h4>Social Media</h4>
        <?php
            foreach ($socialMediaLinks as $key => $value) {
                echo '<p><a href="' . $value . '">' . $key . '</a></p>';
            }
        ?>
      </div>
      <div class="col-sm-8 text-left">
        <h1>Welcome</h1>
        <hr>
        <div class="headshot-image">
            <?php
                foreach ($images as $key => $value) {
                    if (strcmp($key, 'Headshot') == 0) {
                        echo '<img src="' . $value . '">';
                    }
                }
            ?>
            <p>
              Hi, I'm Alec Brumbaugh!
              <br><br>
              On my website you will find information about myself, links to my social media
              accounts, my resume, projects I have worked on, and a contact form
              if you would like to get in touch with me.
              <br><br>
              I will continue to update this site as I gain more experience and knowledge from
              school, and work on new projects.
            </p>
        </div>
        <br>
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
