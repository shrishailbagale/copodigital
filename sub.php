<?php
// Include the PHPMailer library

// Establish a database connection
require 'config.php';

// Get the email address from the Ajax request
$email = $_POST['email'];

// Prepare a SQL statement to check if the email exists
$stmt = $conn->prepare('SELECT id FROM subscribers WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$stmt->store_result();

// If the email exists, display a message
if ($stmt->num_rows > 0) {
  echo "<script>alert('Email is already subscribed.')</script> <script>document.location.href='Index.php';  
  </script>";
} else {
  // If the email does not exist, insert it into the subscribers table
  $insertStmt = $conn->prepare('INSERT INTO subscribers (email) VALUES (?)');
  $insertStmt->bind_param('s', $email);
  $insertStmt->execute();

  if ($insertStmt->affected_rows > 0) {
    // Email subscription successful, send a confirmation email
    // Send a confirmation email (using a library like PHPMailer)
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

    // Configure PHPMailer
    // $mail = new PHPMailer;
  // paste in message body 
  $mail->isSMTP();
  $mail->Host = 'webmail.copodigital.com';
  $mail->Port = 25;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls'; 
  $mail->Username = 'info@copodigital.com';
  $mail->Password = 'Password@copodigital.com';
  $mail->setFrom('info@copodigital.com', 'Copo Digital Services');
  $mail->addAddress($email);
  $mail->Subject = 'Subscription Confirmation';
  $mail->isHTML(true);
  $mail->Body ='<h4>Dear Subscriber</h4>
                <p>Thank you for subscribing to our event newsletter!</p><br> 
                <a href="https://copodigital.com">
                <button style="padding:6px; background-color: #008CBA;color:#FFF;">Confirm Subscribe</button>
                </a>
                <p>More details</p>
                <p>visit: <a href="https://exhicongroup.com/">https://exhicongroup.com/</a></p>
                <p>visit: <a href="https://copodigital.com/">https://copodigital.com/</a></p><br>
                <p>Regards Exhicon Group</p>
                <img src="https://copodigital.com/logos/Exhicon-Events.png" alt="logo" style="width:50%; height:auto;">';

    // Attempt to send the email
    if ($mail->send()) {
      echo "<script>alert('Thank you for Subscribe!');</script>  
      <script>document.location.href='Index.php';  
      </script>";
    } else {
        echo "<script>alert('Email subscribed successfully, but failed to send confirmation email.');</script>  
        <script>document.location.href='Index.php';  
        </script>";     
      echo 'Error: ' . $mail->ErrorInfo;
    }
  } else {
    echo "<script>alert('Failed to subscribe email.');</script>";
   
  }

  $insertStmt->close();
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
