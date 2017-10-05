<!doctype html>
<html lang="en";>
<head>
    <title>Alec Brumbaugh Quiz 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/quiz2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h2 class="header">Friend Application</h2>
    <hr>
    <section id="contact-form">
      <p>
        Fill out this form if you would like to become my friend. No guarentees that I will accept your application,
        but I will consider your request. Thank you, have a good day!
      </p>
      <form class="form" method="post" action="register.php">
          <fieldset>
              <legend>Information:</legend>
    <?php
        if (!isset($_COOKIE['email'])) {
            echo "<label>First Name:</label>";
            echo "<input type='text' name='first_name'><br>";
            echo "<label>Last Name:</label>";
            echo "<input type='text' name='last_name'><br>";
            echo "<label>Email:</label>";
            echo "<input type='text' name='email'><br>";
            echo "<input type='submit' value='Submit'>";
        }
        else {
            echo "Hi " . $_COOKIE['first_name'] . ", you recently signed up with the email address: " . $_COOKIE['email'] . ", thank you!";
        }
    ?>
        </fieldset>

</body>
</html>
