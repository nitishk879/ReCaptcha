<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/4/17
 * Time: 9:28 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>Google recaptcha Testing </title>
    <!--    access google recaptcha using this tag-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body class="bg-success">
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2 mt-5">
            <h2 class="text-warning text-center mr-3">Contact Us</h2>
            <h6 class="text-danger mr-2 text-center">Hi, please fill all the form values</h6>
            <?php
            if (isset($_GET['CaptchaPass'])){
                ?>
                <!-- Success tag goes here-->
                <div class="alert alert-success" role="alert">
                    <strong>Well done!</strong> You successfully submitted your form. Stay in touch with us. Thank you.
                </div>
                <?php
            }
            if (isset($_GET['CaptchaFail'])){
                ?>
                <!-- Danger/ warning Tag Goes from here-->
                <div class="alert alert-danger" role="alert">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="send-data.php" class="bg-success" name="contact-form">
                <div class="form-group">
                    <label for="exampleInputName">Full Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Full Name" required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputPhone" placeholder="Phone" >
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Example textarea</label>
                    <textarea class="form-control" name="message" id="exampleTextarea" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="your-secret-key"></div>
                </div>
                <button type="submit" class="btn btn-warning" name="contact-form">Submit</button>
            </form>
        </div>
    </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
