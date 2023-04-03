<?php
if(isset($_POST['send'])){
    if(!empty($_POST['name'])){
        if(!empty($_POST['email'])){
                $to = 'miccoc@kean.edu';
                $message = $_POST['body'];
                $name = $_POST['name'];
                $subject = "Webpage Contact Form Submitted By: $name";
                $email=$_POST['email'];
                $header = "From: $email";
                if(mail($to,$subject,$message,$header)){
                    echo "Email sent successfully!";
                }
                else{
                    echo "Error: Email could not be sent!";
                }
            }
        else {
            echo "Error: Email not set!";
        }
    }
    else {
        echo "Error: Name not set!";        
    }
}
else{
    echo "Error: Something went wrong!";
}
?>