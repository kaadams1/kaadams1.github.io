
<?php
// Get data from form 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
 
$to = "kaadams1@gmail.com";
$subject = "Inquiry from portfolio site";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Subject = user entered subject
// Message = user entered message
$txt = "Name = ". $name 
. "\r\n  Email = ". $email 
. "\r\n  Subject = ". $subject 
. "\r\n Message = " . $message;
 
$headers = "From: noreply@kathyadamsswe.com";

if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:index.html");
?>