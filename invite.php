<?php
    if (isset($_POST["submit"])) {   
        $emailTo = "ahbay514@gmail.com";
        $subject = "Invite Response";
        $body = "Name: " . $_POST["name"] . "\r\n";
        $body .= "Attending: " . $_POST["attend"] . "\r\n";
        $body .= "Comments: " . $_POST["comments"];
        $headers = "From: rsvp@abigails-invitation.com";
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
        @media only screen and (max-width: 450px) {
            h1 {
                font-size: 50 vw;
            }
            
            p {
                font-size: 50 vw;
            }
        }
        body {
            padding-top: 200px;
            background-color: black;
            text-align: center;
            color: #B19340;
            font-family: serif;
        }
        a, a:visited {
           color: #B19340; 
           text-decoration: underline;
        }
        a:hover {
            color: rgb(95, 79, 35);
        }
    </style>
</head>
<body>
    <?php if (isset($success) && $success) { ?>
        <h1>Thank you!</h1>
        <p>Your response has been sent.</p>
        <a href="index.html">Go back</a>
    <?php }?>
</body>
