<?php
require('Mailin.php');
function maildetails($frommail, $fromname, $tomail, $toname, $subject, $body, $bccmailto = false)
{
    $mailin = new Mailin('https://api.sendinblue.com/v2.0', 'Nf7m2LY4pjCwcBdD');
    $data = array(
        "to" => array($tomail => $toname),
        "cc" => array(),
        "from" => array($frommail, $fromname),
        "replyto" => array(),
        "subject" => $subject,
        "text" => "",
        "html" => $body,
        "attachment" => array(),
        "headers" => array("Content-Type" => "text/html; charset=iso-8859-1", "X-param1" => "value1", "X-param2" => "value2", "X-Mailin-custom" => "my custom value", "X-Mailin-IP" => "102.102.1.2", "X-Mailin-Tag" => "My tag"),
        "inline_image" => array()
    );
    $mailin->send_email($data);
}
