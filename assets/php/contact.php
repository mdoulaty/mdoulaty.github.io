<?php

    // Here we get all the information from the fields sent over by the form.
    $name = $_REQUEST['user-name'];
    $email = $_REQUEST['user-email'];
    $message = ( $_REQUEST['user-message'] ) ? $_REQUEST['user-message'] : '';

    $to = 'mortaza.doulaty@gmail.com';
    $message = 'Name: '.$name.'<br /> Email: '.$email.'<br />Message: '.$message;

    $subject = 'Subject';

    $headers = "From: Mrt WebSite <".$to.">". "\r\n" .
                  "Return-Path: Mortaza Doulaty <mortaza.doulaty@gmail.com>\r\n".
                  "Reply-To: Mrt WebSite <".$to.">" . "\r\n" .
                  "MIME-Version: 1.0\r\n".
                  "Content-type: text/html; charset=iso-8859-1\r\n".
                  "X-Priority: 3\r\n" .
                  'X-Mailer: PHP/' . phpversion();

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // shis line checks that we have a valid email address
        mail($to, $subject, $message, $headers); // this method sends the mail.
        echo "success"; // success message
        exit;
    }else{
        echo "error"; //error
    }

?>
