<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "speight-kyle@outlook.com";
    $subject = "Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $body);
    echo "Form submitted successfully!";
  }
?>