<?php
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $arrival_date = $_POST['arrival_date'];
  $departure_date = $_POST['departure_date'];
  $message = $_POST['requirement'];

  // Set up the email
  $to = "spain@indiasinvitation.com";
  $subject = "New Request from Website";
  $headers = "From: $email";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nArrival Date: $arrival_date\nDeparture Date: $departure_date\n\nMessage:\n$message";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully, redirect to thank.html
    header("Location: thankyou.html");
    exit;
  } else {
    // Email failed to send
    echo "There was a problem sending your request. Please try again later.";
  }
}
?>
