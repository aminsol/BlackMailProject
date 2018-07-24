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
  <div class= "col-sm-12">
    <ul class="other-buttons">
        <li><a href="inbox.php" class="btn-link">Inbox</a></li>
        <li><a href="outbox.php" class="btn-link">Outbox</a></li>
        <li><a href="#">Important</a></li>
        <li><a href="#">Drafts</a></li>
        <li><a href="#">Trash</a></li>
    </ul>
</div>
<div class="container">
  <h2>Don't let this be you!</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img1.jpg" target="_blank">
          <img src="img1.jpg" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img2" target="_blank">
          <img src="img2.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="img3.jpg" target="_blank">
          <img src="img3.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
