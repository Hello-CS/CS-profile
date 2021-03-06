<?php
if($_POST["submit"]) {
    $recipient="mrlamchensian@gmail.com"; //Enter your mail address
    $subject=$_POST["subject"]; //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    echo "Thank you! Your form has been sent!"
    header("Location:http://hello-cs.github.io/CS-profile"); // Set here redirect page or destination page
}
?>
