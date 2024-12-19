<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Simple form validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Prepare the email content
            $to = "your-email@example.com"; // Change to your email
            $subject = "New Contact Form Submission";
            $messageBody = "You have received a new message from the contact form:\n\n";
            $messageBody .= "Name: " . $name . "\n";
            $messageBody .= "Email: " . $email . "\n";
            $messageBody .= "Message:\n" . $message;

            // Headers for email
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            // Send email
            if (mail($to, $subject, $messageBody, $headers)) {
                echo "<p class='alert alert-success'>Thank you for contacting us! We will get back to you soon.</p>";
            } else {
                echo "<p class='alert alert-danger'>Sorry, something went wrong. Please try again later.</p>";
            }
        } else {
            echo "<p class='alert alert-danger'>Invalid email format. Please check your email address.</p>";
        }
    } else {
        echo "<p class='alert alert-danger'>All fields are required. Please fill in all the fields.</p>";
    }
}
?>
