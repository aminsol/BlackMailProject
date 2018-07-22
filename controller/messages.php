<?php
/**
 * Project: Project1
 * Author: Amin Soltani
 * Date: 7/21/2018
 * Time: 5:40 PM
 */
require_once '../config.php';

if (isset($_POST['createMessage'])) {
    $statement = "insert into messages (sender, receiver, subject, message, amount) values (?, ?, ?, ?, ?)";
    $query = $db->prepare($statement);
    $query->bind_param('ssssi', $_SESSION['userEmail'], $_POST['receiver'], $_POST['subject'], $_POST['message'], $_POST['amount']);
    if ($query->execute()) {
        $_SESSION['message'] = "Your message was successfully sent";
        $_SESSION['notify'] = "Success";
        $imageInfo = getimagesize($_FILES['attachment']['tmp_name']);
        if ($imageInfo !== false) {
            $imageName = $query->insert_id . image_type_to_extension($imageInfo[2]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadFolder . $imageName);
        }
    } else {
        $_SESSION['message'] = "There was a problem with creating your message in the database! ";
        $_SESSION['notify'] = "Error";
    }
    header('Location: ../composeMessage.php');
    exit;
}