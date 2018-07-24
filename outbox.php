<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/styleInboxOutbox.css">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <title>Danny's Blackmail</title>
</head>
<body>
<main class="container col-12">
    <div class="inbox-ui-frame col-12">
        <aside class="left-row">
            <div class="inbox-Logo">
                <h5><a href ="#">Danny's BLACKMAIL</a></h5>
            </div>

            <div class="compose-body col-sm-12">
                <!-- link compose to Amin page -->
                <a class="btn btn-compose btn-danger col-sm-12" title="Compose" href="composeMessage.php">Compose</a>
            </div>
            <div class= "col-sm-12">
                <ul class="other-buttons">
                    <li><a href="inbox.php" class="btn-link">Inbox</a></li>
                    <li><a href="outbox.php" class="btn btn-primary col-sm-9">Outbox</a></li>
                    <li><a href="#">Important</a></li>
                    <li><a href="#">Drafts</a></li>
                    <li><a href="#">Trash</a></li>
                </ul>
            </div>

        </aside>

        <aside class="right-row">
            <div class="top-column">
                <h3>Outbox</h3>
            </div>
            <div class="inbox-body">
                <table class="table table-hover">
                    <?php

                    if ($result = $db->query("select id, last_name, first_name, receiver, subject, message, amount from messages join users u on messages.receiver = u.email")) {
                        while($row=$result->fetch_assoc()){
                            ?>
                            <tr class="message-rows">

                                <td class ="inbox-message text-left"><?php echo $row['last_name']. ', '.$row['first_name']?></td>
                                <td class="inbox-message text-left"><?php echo $row['subject'] ?></td>
                                <td class="inbox-message-message text-left"> <?php echo $row['message'] ?></td>
                                <td class="inbox-message text-left">  <?php echo '$'.$row['amount']?></td>
                                <td><a class="btn" role="button" href="message-detail.php?id=<?php echo $row['id']; ?>"</a>View more</td>

                            </tr>
                            <?php
                        }
                    }
                    else{
                        echo $db->error;
                    }

                    ?>
                </table>
            </div>
        </aside>

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
<script src="/js/bootstrap.bundle.js"></script>
</body>
</html>