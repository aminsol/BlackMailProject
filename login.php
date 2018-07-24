<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danny's Blackmail</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="stylesheet/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheet/stylesheet.css">

</head>
<body>
<header class="navbar navbar-default">
    <div class="inbox-Logo align-center">
        <h5><a href="#">Danny's <br>BLACKMAIL</a></h5>
    </div>
</header>
<div class="container">
    <div class="login-form">
        <form action="controller/login.php" method="post">
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
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email@domain.com" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-primary" name="logIn">Login</button>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#signUp">
                Sign Up</button>
            <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="signUpLabel">Sign Up</h1>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="controller/login.php" method="post">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="John">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Doe">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
