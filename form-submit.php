<?php
// Get the form data
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Send an email to the restaurant's management team
$to = 'madhumahidhar1002@gmail.com'; //management email
$subject = 'Table Booking Request';
$message = "Date: $date\nTime: $time\nNumber of guests: $guests\nName: $name\nPhone: $phone\nEmail: $email";
$headers = "From: $name <$email>";

if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your reservation. We will contact you shortly to confirm your booking.';
} else {
    echo 'Sorry, there was an error processing your reservation request. Please try again later.';
}
?>
