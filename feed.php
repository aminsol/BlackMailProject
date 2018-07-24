<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Danny's Blackmail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>
<body>
<header class="navbar navbar-default">
    <div class="inbox-Logo align-center">
        <h5><a href="#">Danny's <br>BLACKMAIL</a></h5>
    </div>
</header>
<aside class="float-left col-2">
    <div class="align-center message-ui-frame col-12">

        <ul class="other-buttons">
            <li>
                <a class="btn btn-compose btn-danger col-12" title="Compose" href="index.php">Compose</a>
                <hr/>
            </li>
            <li>
                <a class="btn btn-compose btn-primary col-12" title="Inbox" href="inbox.php">Inbox</a>
            </li>
            <li><a class="btn btn-compose btn-primary col-12" href="outbox.php" class="btn-link">Outbox</a>
            </li>
            <li><a class="btn btn-compose btn-primary col-12" href="#">Important</a></li>
            <li><a class="btn btn-compose btn-primary col-12" href="#">Drafts</a></li>
            <li><a class="btn btn-compose btn-primary col-12" href="#">Trash</a></li>
        </ul>
    </div>
</aside>
<main class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img1.jpg" target="_blank">
                    <img src="img1.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img2.jpg" target="_blank">
                    <img src="img2.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img3.jpg" target="_blank">
                    <img src="img3.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img4.jpg" target="_blank">
                    <img src="img4.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img5.jpg" target="_blank">
                    <img src="img5.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img6" target="_blank">
                    <img src="uploadFiles/img6.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="uploadFiles/img7.jpg" target="_blank">
                    <img src="img7.jpg" style="width:100%">
                    <div class="caption">
                        <p class="text-black-50">Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>

</body>
</html>
