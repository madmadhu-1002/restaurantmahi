<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bookings@restaurant.com";
    $subject = "Table Booking Request";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $guests = $_POST["guests"];
    $message = "Table booking request details:\n\nDate: $date\nTime: $time\nNumber of guests: $guests\n";
    $message .= "Guest name: $name\nEmail: $email\nPhone: $phone\n";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Thank you for your table booking request. We will be in touch shortly to confirm your booking.</p>";
    } else {
        echo "<p>There was a problem submitting your booking request. Please try again later.</p>";
    }
}
?>
