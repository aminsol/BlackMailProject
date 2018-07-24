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

  <?php include "header.php"; ?>
  <?php include "sidebar.php"; ?>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="uploadFiles/img1.jpg" target="_blank">
          <img src="img1.jpg" style="width:100%">
          <div class="caption">
            <p class="text-black-50">Chris Meneses</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
          <a href="uploadFiles/img2.jpg" target="_blank">
            <img src="img2.jpg" style="width:100%">
              <div class="caption">
                <p class="text-black-50">Keenan Holder</p>
              </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="uploadFiles/img3.jpg" target="_blank">
            <img src="img3.jpg" style="width:100%">
              <div class="caption">
                <p class="text-black-50">Kader Ustun</p>
              </div>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="uploadFiles/img3.jpg" target="_blank">
            <img src="img3.jpg" style="width:100%">
              <div class="caption">
                <p class="text-black-50">Amin Soltani</p>
              </div>
          </a>
        </div>
      </div>

  </div>
</div>

</body>
</html>
