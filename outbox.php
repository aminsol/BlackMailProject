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
    <title>Danny's Blackmail</title>
</head>
<body>
<main class="container">
    <div class="inbox-ui-frame">
        <aside class="left-row">
            <div class="inbox-Logo">
                <h5><a href ="#">Danny's BLACKMAIL</a></h5>
            </div>

            <div class="compose-body">
                <!-- link compose to Amin page -->
                <a class="btn btn-compose" title="Compose">Compose</a>
            </div>
            <ul class="other-buttons">
                <li class="active"><a href="#"><!-- link to the right-->
                        Inbox<label class="label-danger pull-right">
                        </label></a>
                </li>
                <li><a href="#">Sent Mail</a></li>
                <li><a href="#">Important</a></li>
                <li><a href="#">Drafts</a></li>
                <li><a href="#">Trash</a></li>
            </ul>
        </aside>
        <aside class="right-row">
            <div class="top-column">
                <h3>Outbox</h3>
            </div>
            <div class="inbox-body">
                <table class="table table-hover">


                    <tr class="message-rows">
                        <td class="checkbox">
                            <input type="checkbox" class="mail-mini-box" title="">
                        </td>
                        <td class="inbox-message">HELLO</td>
                        <td class="inbox-message text-left">From other world.</td>
                        <td class="inbox-message text-right">2 months ago</td>
                    </tr>


                    </tbody>
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