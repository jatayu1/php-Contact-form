<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $message = $_POST['message'];

    if (!empty($email) && !(empty($message))){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $receiver = "dakash682@gmail.com";
            $subject = "Form: $name <$email>";
            $body = "Name: $name\nEmail: $email\nPhone: $phone\nwebsite: $website\nmessage: $message\n";
            $sender = "From: $email";
            if(mail($receiver, $subject, $body, $sender)){
                echo "Your message has been sent";
            }else{
                echo "Sorry, failed to send message!";
            }
        }else{
            echo "Enter a valid Email Address!";
        }
    }else{
        echo "Email and message field is required!";
    }
?>