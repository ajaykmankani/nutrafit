<?php
include('../variables.php');
$msg = "";
foreach ($_POST as $key => $data) {
    $msg .= "$key:  $data | ";
};

// the message
// $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg, 70);

// send email
if (mail($email, "Enquiry form your website", $msg)) {
?><script>
        alert("Mail Sent Successfully");
        location.href = "../thankyou.php";
    </script><?php
            } else {
                ?><script>
        alert("No Mail Sent");
        location.href = "../index.php";
    </script><?php
            }
