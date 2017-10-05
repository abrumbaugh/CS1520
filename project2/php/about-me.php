<?php

include 'social-media.php';

?>

<!doctype html>

<html lang="en">
<head>
  <title>About Me</title>
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
                if (strcmp($key, 'About Me') == 0) {
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
        <h1>About Me</h1>
        <hr>
        <section id="aboutMe">
            <p>I'm from the Pittsburgh area (Canonsburg, to be more exact), and I attended Canon-McMillan High School.
            At Canon Mac I played soccer, ran track (for 1 year), and bowled in a bowling league.
            Fun fact: I was part of the first men's soccer team to win a district title for soccer in Canon Mac's history.
            I'm currently a Senior studying Computer Science at the University of Pittsburgh.
            I studied at Robert Morris University for two years, then transferred to Pitt after
            my Sophomore year. At RMU, I studied Software Engineering and I played on the Division
            1 Men's Soccer team. Sports have been a huge part of my life and I have
            played different sports ever since I was young. Soccer is my favorite sport, but I also love bowling, basketball, and hockey.
            My highest game in bowling was a 298... still chasing that 300! I continue to play soccer in my free time on intramural and adult league teams,
            and I bowl in leagues and tournaments. 
            <div>Favorite soccer team: Manchester United</div>
            <div>Favorite movie: Star Wars</div>
            <div>Favorite show: Game of Thrones or Mr. Robot</div>
            <div>Favorite video game: FIFA or Legend of Zelda</div></p>
        </section>
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
