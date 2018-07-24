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
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <title>Danny's Blackmail</title>
</head>
<body>
<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>
<main class="container">
    <div class="inbox-ui-frame col-12">
        <div class="top-column">
            <h3>Outbox</h3>
        </div>
        <div class="inbox-body">
            <table class="table table-hover">
                <?php

                if ($result = $db->query("select id, last_name, first_name, receiver, subject, message, amount from messages join users u on messages.receiver = u.email")) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr class="message-rows">

                            <td class="inbox-message text-left"><?php echo $row['last_name'] . ', ' . $row['first_name'] ?></td>
                            <td class="inbox-message text-left"><?php echo $row['subject'] ?></td>
                            <td class="inbox-message-message text-left"> <?php echo $row['message'] ?></td>
                            <td class="inbox-message text-left">  <?php echo '$' . $row['amount'] ?></td>
                            <td><a class="btn btn-outline-primary" role="button"
                                   href="message-detail.php?id=<?php echo $row['id']; ?>"</a>View more
                            </td>

                        </tr>
                        <?php
                    }
                } else {
                    echo $db->error;
                }
                ?>
            </table>
        </div>
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