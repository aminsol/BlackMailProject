<?php
require_once "config.php";
$id = $_GET['id'];


$statement = "SELECT sender, receiver, subject, message, attachment, amount FROM messages WHERE id = $id";
$query = $db->prepare($statement);
$query->bind_result($sender, $receiver, $subject, $message, $attachment, $amount);
$result = $query->execute();
$query->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/styleInboxOutbox.css">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">


    <title>Message Detail Page</title>
</head>
<body>
<header class="navbar navbar-default">
    <div class="inbox-Logo align-center">
        <h5><a href="#">Danny's <br>BLACKMAIL</a></h5>
    </div>
</header>
<!-- Side Bar -->
<aside class="float-left col-2">
    <div class="align-center message-ui-frame col-12">
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-danger col-10" title="Compose" href="index.php">Compose</a>
        </div>
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-primary col-10" title="Inbox" href="inbox.php">Inbox</a>
        </div>
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-primary col-10" title="Outbox" href="inbox.php">Outbox</a>
        </div>
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-primary col-10" title="Important" href="inbox.php">Important</a>
        </div>
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-primary col-10" title="Drafts" href="inbox.php">Drafts</a>
        </div>
        <div class="compose-body col-10">
            <a class="btn btn-compose btn-primary col-10" title="Trash" href="inbox.php">Trash</a>
        </div>
    </div>
</aside>
<!-- End Side Bar-->
<main class="container">

    <div class="align-center message-ui-frame col-12">
        <h1 class="text-center">Please respond to your message:</h1>
        <div class="md_subject">
            <h3><label for="email-subject">Subject:</label></h3>
            <p name="from" rows="8" cols="80"><?php echo $subject; ?></p>
        </div>
        <div class="md_email">
            <h3><label for="email-address">Email</label></h3>
            <p name="from" rows="8" cols="80">From: <?php echo $sender; ?></p>
        </div>
        <div class="md_message">
            <h3><label for="email-body">Message:</label></h3>
            <p name="name" rows="8" cols="80"> <?php echo $message; ?></p>
        </div>
        <div>
            <div class="md_image_frame">
                <h3><label for="email-attachment" class="email-subject">This is the picture that was uploaded:</label>
                </h3>
                <img src="uploadFiles/<?php echo $attachment; ?>" alt=""
                     style="justify-content: center; height: 200px; width: auto">
            </div>
        </div>
        <button class="btn btn-danger" type="reset" onclick="javascript:location.href='/inbox.php'"> Delete and Share
            Image
        </button>
        <button class="btn btn-primary" type="submit" onclick="javascript:location.href='/inbox.php'">
            Accept and Pay $<?php echo $amount ?>
        </button>
    </div>
</main>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>


</body>
</html>
