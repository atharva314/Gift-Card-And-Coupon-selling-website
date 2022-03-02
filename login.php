<?php
session_start();
?>
<html>
    <head>
        <title>Login/register</title>
        <link rel="stylesheet" type="text/css" href="style1.css"></link>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"></link>
    </head>

    <body style="background: url(loginbg.jpg);">
        <div class="head-line"><h1 style="text-align:center">GIFTCARD AND COUPONS</h1></div>
        <div style="text-align:center; color:red;">
        <h2>
        <?php 
            if(isset($_SESSION['status'])){
                echo $_SESSION['status'];
                unset($_SESSION['status']);
            }
        ?>
        </h2>
        </div>
        <div class="container">
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2>LOGIN HERE</h2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label>USERNAME</label>
                                <input type="text" name="user" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="password" class="form-control" required></input>
                            </div>
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </form>
                    </div>

                    <div class="col-md-6 login-right">
                        <h2>REGISTER HERE</h2>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>USERNAME</label>
                                <input type="text" name="user" class="form-control" required></input>
                            </div>
                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="password" class="form-control" required></input>
                            </div>
                            <button type="submit" class="btn btn-primary">REGISTER</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        =
    </body>
</html>