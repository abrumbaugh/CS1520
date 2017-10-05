<?php

if (isset($_POST['firstname'])) {

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $messageSubject = htmlspecialchars($_POST['messageSubject']);
    $message = htmlspecialchars($_POST['message']);

    $db_host = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'contact_form';

    mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
    mysql_select_db($db_name);


    $result = mysql_query("INSERT INTO contact_information (fname, lname, email,
                                                            phone, message_subject, message)
                            VALUES ('$firstname', '$lastname', '$email',
                                    '$phone', '$messageSubject', '$message')") or die(mysql_error());

    if ($result) {
        echo("<h2>Contact information has been submitted!</h2>
            <hr>
            <p>Thank you for contacting me. I will get back to you as soon as I can!</p>
            <p>Click <a href=contact.php>here</a> to go back to the website.</p>");
    }
    else {
        echo("<h2>Contact Information NOT Sent!</h2><br />
            <hr>
            <p>Sorry, something went wrong!</p>");
        echo mysql_error($result);
    }
}

?>
