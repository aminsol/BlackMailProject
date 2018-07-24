<?php
require_once "config.php";
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

    <title>Compose a new message!</title>
</head>
<body>
<main class="container">
    <div class="align-middle message-ui-frame col-12">
        <h1 class="text-center">Message Your Victim</h1>
        <?php
        /*
        if ($result = $db->query("select * from users")) {
            var_dump($result->fetch_row());
        }
        else{
            echo $db->error;
        }
        */
        ?>
        <form id="message-form" method="post" action="controller/messages.php" enctype="multipart/form-data"
              class="col-12">
            <input type="hidden" name="createMessage" value="1">
            <?php if ($_SESSION['notify'] == 'error') { ?>
                <div class="alert alert-danger">
                    <span><?= $_SESSION['message'] ?></span>
                </div>
                <?php
            } elseif ($_SESSION['notify'] == 'success') {
                ?>
                <div class="alert alert-success">
                    <span><?= $_SESSION['message'] ?></span>
                </div>
                <?php
            }
            $_SESSION['notify'] = null;
            ?>
            <div class="form-group">
                <label for="email-subject">Subject</label>
                <input type="text" name="subject" class="form-control" id="email-subject"
                       placeholder="Write a virtuous subject">
                <small id="subjectHelp" class="form-text text-muted">Help them to trust you.</small>
            </div>
            <div class="form-group">
                <label for="email-address">Email</label>
                <input type="email" name="receiver" class="form-control" id="email-subject"
                       placeholder="Type Their email address">
                <small id="subjectHelp" class="form-text text-muted">Give us email of that poor guy!</small>
            </div>
            <div class="form-group">
                <label for="email-address">Extortion</label>
                <input type="number" name="amount" class="form-control" id="email-amount"
                       placeholder="$$$">
                <small id="subjectHelp" class="form-text text-muted">How much you want form them!</small>
            </div>
            <div class="form-group">
                <label for="email-attachment" class="d-block">Upload all the dirty stuff</label>
                <label for="email-attachment">
                    <span class="btn btn-success">Upload Your Image</span>
                </label>
                <input id="email-attachment" name="attachment" type="file" class="d-none" required>
            </div>
            <div class="form-group">
                <label for="email-body">Your innocent message:</label>
                <textarea class="form-control" form="message-form" name="message" id="email-body"
                          placeholder=" Delight them with a lighting heart attack"></textarea>
                <small id="subjectHelp" class="form-text text-muted">Describe the mess that they are in!</small>
            </div>
            <button class="btn btn-danger" type="reset"> Reset</button>
            <button class="btn btn-primary" type="submit"> Send</button>
        </form>
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
