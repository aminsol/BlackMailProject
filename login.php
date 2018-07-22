<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Danny's Blackmail</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
      .login-form{
      	margin: 20px;
      }
  </style>
  <style>
    .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white;
      text-align: center;
      font-size: 30px;
    }
    .modal-footer {
      background-color: #f9f9f9;
    }
  </style>
</head>
  <body>
    <h1>Danny's Blackmail</h1>
  <div class="container">
  <div class="login-form">
      <form action="/examples/actions/confirmation.php" method="post">
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" if="email" id="emailAddr" placeholder="email@domain.com" required>
          </div>
          <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
          </div>

          <button type="submit" class="btn btn-primary">Login</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUp">
            Sign Up</button>

          <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title" id="signUpLabel">Sign Up</h1>
                </div>
                <div class="modal-body">
                  <form role="form" action="" method="post">
                      <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="fName" placeholder="John">
                      </div>
                      <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lName" placeholder="Doe">
                      </div>
                      <div class="form-group">
                        <label for="emial">Email Address</label>
                        <input type="text" class="form-control" id="newEmail" placeholder="email@domain.com">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="pword" placeholder="Enter password">
                      </div>

                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary">Register</button>
                </div>
              </div>
            </div>
          </div>
      </form>
    </div>
  </div>
  </body>
</html>
