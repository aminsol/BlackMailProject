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

  <aside class="float-left">
      <div class="inbox-Logo">
          <h5><a href ="#">Danny's <br>BLACKMAIL</a></h5>
      </div>
      <div class="compose-body col-sm-12">
          <a class="btn btn-compose btn-danger col-sm-12" title="Compose" href="index.php">Compose</a>
      </div>
      <div class="compose-body col-sm-12">
          <a class="btn btn-compose btn-primary col-sm-12" title="Inbox" href="inbox.php">Inbox</a>
      </div>
      <ul class="other-buttons">
          <!--<li><a href="inbox.php" class="btn btn-primary col-sm-9">Inbox</a></li>-->
          <li><a href="outbox.php" class="btn-link">Outbox</a></li>
          <li><a href="#">Important</a></li>
          <li><a href="#">Drafts</a></li>
          <li><a href="#">Trash</a></li>
      </ul>
  </aside>

<div class="container">
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
        <a href="img2" target="_blank">
          <img src="uploadFiles/img2.jpg" style="width:100%">
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
  </div>
</div>

</body>
</html>
