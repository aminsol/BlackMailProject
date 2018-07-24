<?php
require_once "config.php";
$id = $_GET['id'];


$statement = "SELECT sender, receiver, subject, message, amount FROM messages WHERE id = $id";
$query = $db->prepare($statement);
$query->bind_result($sender, $receiver, $subject, $message, $amount);
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
    <link rel="stylesheet" href="stylesheet/stylesheet.css">

    <title>Message Detail Page</title>
</head>
<body>
<main class="container">
    <div class="align-middle message-ui-frame col-12">
        <h1 class="text-center">Please respond to your message:</h1>
            <div class="md_subject">
                <h3><label for="email-subject">Subject:</label></h3>
                <p name="from" rows="8" cols="80"><?php echo $subject;?></p>
            </div>
            <div class="md_email">
                <h3><label for="email-address">Email</label></h3>
                <p name="from" rows="8" cols="80">From: <?php echo $sender;?></p>
            </div>
            <div class="md_message">
                <h3><label for="email-body">Message:</label></h3>
                <p name="name" rows="8" cols="80"> <?php echo $message; ?></p>
            </div>
            <div >
              <div class="md_image_frame">
                    <h3><label for="email-attachment" class="email-subject">This is the picture that was uploaded:</label></h3>
                  <img src="images/mainbg.jpg" alt=""style="justify-content: center; height: 200px; width: auto">
              </div>
            </div>
            <button class="btn btn-danger" type="reset"> Delete and Share Image </button>
            <button class="btn btn-primary" type="submit"> Accept and Pay $<?php echo $amount?></button>
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