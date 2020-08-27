<?php

    require_once("../../../wp-load.php");

    if (isset($_POST['name']) && isset($_POST['email'])){
        
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $attachmentUrl = isset($_POST['attach_file']) ? $_POST['attach_file'] : '';
        $attachmentPath = explode('uploads', $attachmentUrl)[1];

        $result = false;

        if(!empty($name) && !empty($email) && !empty($attachmentUrl)){
            
            $to = $email;
            $subject = 'Received Document';
            $headers = 'From: TASC Outsourcing <wp.tasc@gmail.com>';

            $message = "Hello ". $name .",\n\n";
            $message .= "Please find attached file.\n";

            $attachment = array (WP_CONTENT_DIR.'/uploads/'.$attachmentPath);
           
            $result = wp_mail( $to, $subject, $message, $headers, $attachment);

        }

        echo json_encode($result);
        exit;
    }

?>