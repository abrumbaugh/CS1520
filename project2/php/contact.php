<?php

include 'social-media.php';

?>

<!doctype html>

<html lang="en">
<head>
  <title>Contact</title>
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
                if (strcmp($key, 'Contact') == 0) {
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
        <h1 class="header">Contact Information</h1>
        <hr>
        <section id="contact-form">
          <p>
            If you would like to talk, contact me! I will do my best to get in touch as soon as I can.
          </p>
        <form name="form" method="post" action="contact-information.php" onsubmit="return validateForm()">
          <fieldset>
            <legend>Personal information:</legend>
            <?php
                echo("<label>First Name:</label>
                    <input type='text' name='firstname'><br>
                    <label>Last Name:</label>
                    <input type='text' name='lastname'><br>
                    <label>Email:</label>
                    <input type='email' name='email'><br>
                    <label>Phone:</label>
                    <input type='phone' name='phone'><br>");
            ?>
          </fieldset>
          <br>
          <fieldset>
            <legend>Message:</legend>
            <?php
                echo("<label for='subject'>Subject:</label>
                    <input type='text' name='messageSubject'><br><br>
                    <textarea name='message' rows='10' cols='20'></textarea>");
            ?>
        </fieldset>
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </form>
      </div>
      <div class="col-sm-2 sidenav">
      </div>
    </div>
  </div>

  <footer class="container-fluid text-center">
    <p>&copy; Alec Brumbaugh, 2017</p>
  </footer>

  <script src="../js/project2.js"></script>

</body>
</html>
