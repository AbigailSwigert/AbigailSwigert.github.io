<?php
    if (isset($_POST["submit"])) {   
        $emailTo = "abigail.r.swigert@gmail.com";
        $subject = "Swigert Designs Email";
        $body = "Name: " . $_POST["name"] . "\r\n";
        $body .= "Email: " . $_POST["email"] . "\r\n";
        $body .= "Message: " . $_POST["message"];
        $headers = "From: ahbay514@gmail.com";
        $success = mail($emailTo, $subject, $body, $headers);
    }

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
?>
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <style type="text/css">
        body {
            padding-top: 45vh;
            text-align: center;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php if (isset($success) && $success) { ?>
        <h1>Thank you!</h1>
        <p>Your response has been sent.</p>
    <?php } else { ?>
        <h1>Oops!</h1>
        <p>Something went wrong, the response was not sent. Please try again or contact Abigail directly.</p>
    <?php } ?>
</body>
