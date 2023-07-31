<?php
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Create a new PHPMailer instance
$mail = new PHPMailer\PHPMailer\PHPMailer();
// Function to sanitize input data
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Retrieve form data
$name = sanitize($_POST['name']);
$mobile = sanitize($_POST['mobile']);
$email = sanitize($_POST['email']);
$subject = sanitize($_POST['subject']);
$message = sanitize($_POST['message']);

// Create a new PHPMailer instance
//$mail = new PHPMailer();

// Set up SMTP configuration
$mail->isSMTP();
$mail->Host = 'webmail.copodigital.com';
$mail->Port = 25;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = 'tls'; 
$mail->Username = 'info@copodigital.com';
$mail->Password = 'Password@copodigital.com';
$mail->setFrom($email, $name);
$mail->addAddress('info@copodigital.com','Copo Digital Services');


$mail->isHTML(true);
$mail->Subject = 'Contact Form Submission';
$mail->Body = "<p><b>Name:</b> $name<br><b>Email:</b> $email<br><b>Mobile No:</b> $mobile</p><p><b>Subject:</b> $subject</p><br><b></b>Message:</b><p>$message</p><br><br>Best Regards,<br>$name";


// Send the email
if ($mail->send()) {
    // echo 'Email sent successfully';
} else {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}

// Store contact information in the database
// Replace with your database credentials and table name

require 'config.php';


// Check for connection errors
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

// Prepare SQL statement to insert contact information
$stmt = $conn->prepare("INSERT INTO contact (name, mobile, email,subject, message) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $mobile, $email, $subject ,$message);

// Execute the prepared statement
if ($stmt->execute()) {
    echo "<script>
    alert('Contact form Submition Successfully!'); </script>
    <script>document.location.href='contact-us.php';  
      </script>";
    
} else {
    echo 'Error storing contact information: ' . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>
