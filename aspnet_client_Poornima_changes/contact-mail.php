<?php
include('sendmail.php');

$error = '';
$success = '';

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LeOxdcZAAAAAFsV7KFcwIGHmNI7p4Z93bXsWGpH';
$recaptcha_response = $_POST['recaptcha_response'];

// Make and decode POST request:
$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
$recaptcha = json_decode($recaptcha);

// Take action based on the score returned:
if ($recaptcha->score >= 0.5 && $recaptcha->action == "contact") {
    $subject = "Message from Website - goldenarch.co.in";
    $tomail = "goldenarch2004@gmail.com";
    $toname = "Golden Arch Website";
    $frommail = "goldenwebsite40@gmail.com";
    $fromname = "Golden Arch Website";
    $body = "<b style='font-size:18px'>You have a new message from website</b><table>";
    $body .= "<tr>";
    $body .= "<td style='padding:5px 20px 5px 5px'>Name :</td>";
    $body .= "<td style='padding:5px 20px 5px 5px'>" . $_POST['name'] . "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td style='padding:5px 20px 5px 5px'>Mobile :</td>";
    $body .= "<td style='padding:5px 20px 5px 5px'>" . $_POST['mobile'] . "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td style='padding:5px 20px 5px 5px'>Email :</td>";
    $body .= "<td style='padding:5px 20px 5px 5px'>" . $_POST['email'] . "</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td colspan='2' style='padding:5px 20px 5px 5px'>Message :</td>";
    $body .= "</tr>";
    $body .= "<tr>";
    $body .= "<td colspan='2' style='padding:5px 20px 5px 5px'>" . $_POST['message'] . "</td>";
    $body .= "</tr>";
    $body .= "</table>";
    maildetails($frommail, $fromname, $tomail, $toname, $subject, $body);
    $success = "Your message sent successfully";
} else {
    $error = "Something went wrong. Please try again later";
}
$output['error'] = $error;
$output['success'] = $success;
echo json_encode($output);
