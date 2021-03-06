<?php
/**
 * Project: Project1
 * Author: Amin Soltani
 * Date: 7/21/2018
 * Time: 5:40 PM
 */
require_once '../config.php';

if (isset($_POST['createMessage'])) {
    $statement = "insert into messages (sender, receiver, subject, message, amount, attachment) values (?, ?, ?, ?, ?, ?)";
    $query = $db->prepare($statement);
    $imageInfo = getimagesize($_FILES['attachment']['tmp_name']);
    if ($imageInfo !== false) {
        $imageName = uniqid() . image_type_to_extension($imageInfo[2]);
        if(move_uploaded_file($_FILES['attachment']['tmp_name'], '../uploadFiles/' . $imageName)) {
            $query->bind_param('ssssis', $_SESSION['user'], $_POST['receiver'], $_POST['subject'],
                $_POST['message'], $_POST['amount'], $imageName);
            if ($query->execute()) {
                $_SESSION['message'] = "Your message was successfully sent";
                $_SESSION['notify'] = "success";
            } else {
                $_SESSION['message'] = "There was a problem with creating your message in the database!";
                $_SESSION['message'] = $query->error;
                $_SESSION['notify'] = "error";
            }
        }
        else{
            $_SESSION['message'] = "We were unable to upload your file!";
            $_SESSION['notify'] = "error";
        }
    }

    header('Location: ../composeMessage.php');
    exit;
}