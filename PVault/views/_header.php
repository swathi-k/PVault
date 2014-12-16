<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="300;url=index.php?logout">
    <title>PVault</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
    <style type="text/css">
        /* just for the demo */
        
        /*Global styling for all elements*/
        body, content {
            font-family: 'Raleway', sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
            color: black;
        }



        /*Start hmenu styling.  This is just the navigation bar.*/
        #hmenu {
            background-color: #ededed;
            margin: 0 0 0 0;
            padding: 20 20 20 20;
            width: 95%;
            height: 50px;
            color: white;
            text-transform: uppercase;
        }
        #hmenu ul {
            display: ;
            list-style-type: none;
            text-align: right;
        }
        #hmenu li {
            display: inline;
            text-transform: uppercase;
            font-size: 24px;
        }
        #hmenu a:link, a:visited, a:hover {
            color: white;
            text-decoration: none;
            padding: 29 5 25 5;
        }
        #hmenu a:hover {
            background-color: #e4e4e4;
        }
        /*End of hmenu styling */

        #left, #right {
            display: inline;
            padding: 15px;
            color: black;
        }
        #left {
            float: left;
            width: 40%;
        }
        #right {
            width: auto;
            float: right;
            padding-right: 20px;
        }
        #external-links a:link {
            text-transform: uppercase;
            text-decoration: none;
            color: black;
        }
        #external-links a:hover {
            color: e4e4e4;
            text-transform: uppercase;
            padding: 0;
        }
        input[type=text],
        input[type=password],
        input[type=submit],
        input[type=email] {
            display: block;
            margin-bottom: 15px;
        }
        input[type=checkbox] {
            display:inline;
            margin-bottom: 15px;
        }
        #registration_form {
            padding: 20px;
        }
        #logged_in {
            padding: 40px;
        }
    </style>
    <script src="scripts/popup.js"></script>
    <script src="scripts/confirmationpopup.js"></script>
</head>
<body id="content">

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
