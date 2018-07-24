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
  <div class="inbox-ui-frame col-sm-2">
   <aside class="float-left">
     <div class="inbox-Logo">
       <h5><a href ="#">Danny's <br>BLACKMAIL</a></h5>
     </div>
     <ul class="other-buttons">
         <li><a href="outbox.php" class="btn-link">Outbox</a></li>
         <li><a href="#">Important</a></li>
         <li><a href="#">Drafts</a></li>
         <li><a href="#">Trash</a></li>
     </ul>
   </aside>
 </div>
<main class="container col-8">

    <div class="align-center message-ui-frame col-12">
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
                  <img src="uploadFiles/<?php echo $attachment; ?>" alt=""style="justify-content: center; height: 200px; width: auto">
              </div>
            </div>
            <button class="btn btn-danger" type="reset" onclick="javascript:location.href='/inbox.php'"> Delete and Share Image </button>
            <button class="btn btn-primary" type="submit" onclick="javascript:location.href='/inbox.php'">
              Accept and Pay $<?php echo $amount?>
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
