<?php
require "connection.php";
if (isset($_POST['btn_signin'])) {
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php require 'base.php'; ?>
    <style>
        ::selection {
            background-color: #b5e2e7;
        }

        ::-moz-selection {
            background-color: #8ac7d8;
        }

        body {
            background: #3CC;
        }

        .container {
            display: -webkit-flex;
            display: flex;
            height: 100%;
        }

        #logbox {
            padding: 10px;
            margin: 50px auto;
            width: 340px;
            background-color: #fff;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        }

        h1 {
            text-align: center;
            font-size: 175%;
            color: #757575;
            font-weight: 300;
        }

        h1,
        input {
            font-family: "Open Sans", Helvetica, sans-serif;
        }

        .input {
            width: 75%;
            height: 50px;
            display: block;
            margin: 0 auto 15px;
            padding: 0 15px;
            border: none;
            border-bottom: 2px solid #ebebeb;
        }

        .input:focus {
            outline: none;
            border-bottom-color: #3CC !important;
        }

        .input:hover {
            border-bottom-color: #dcdcdc;
        }

        .input:invalid {
            box-shadow: none;
        }

        .pass:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 1000px white inset;
        }

        .inputButton {
            position: relative;
            width: 85%;
            height: 50px;
            display: block;
            margin: 30px auto 30px;
            color: white;
            background-color: #3CC;
            border: none;
            -webkit-box-shadow: 0 5px 0 #2CADAD;
            -moz-box-shadow: 0 5px 0 #2CADAD;
            box-shadow: 0 5px 0 #2CADAD;
        }

        .inputButton:hover {
            top: 2px;
            -webkit-box-shadow: 0 3px 0 #2CADAD;
            -moz-box-shadow: 0 3px 0 #2CADAD;
            box-shadow: 0 3px 0 #2CADAD;
        }

        .inputButton:active {
            top: 5px;
            box-shadow: none;
        }

        .inputButton:focus {
            outline: none;
        }
    </style>
    <script type="text/javascript">
      function navigate(){
        window.location.href = "signinbyphone.php";
      }
    </script>

</head>

<body>

    <div class="container" style="height: 100%;display: flex;justify-content: center;align-items: center;">
        <!-- <div class="col-md-6">
            <div id="logbox">
                <form id="signup" method="post" action="/signup">
                    <h1>create an account</h1>
                    <input name="user[name]" type="text" placeholder="What's your username?" pattern="^[\w]{3,16}$" autofocus="autofocus" required="required" class="input pass" />
                    <input name="user[password]" type="password" placeholder="Choose a password" required="required" class="input pass" />
                    <input name="user[password2]" type="password" placeholder="Confirm password" required="required" class="input pass" />
                    <input name="user[email]" type="email" placeholder="Email address" class="input pass" />
                    <input type="submit" value="Sign me up!" class="inputButton" />
                    <div class="text-center">
                        already have an account? <a href="#" id="login_id">login</a>
                    </div>
                </form>
            </div>
        </div> -->
        <!--col-md-6-->
        <div class="row">
            <div class="col-6">
                <div id="logbox">
                    <form id="signup" method="post" action="#">
                        <h1>Account login</h1>
                        <input name="username" type="text" placeholder="Enter Username" class="input pass" required="required" />
                        <input name="password" type="password" placeholder="Enter Password" required="required" class="input pass" />
                        <input type="submit" value="Sign me in!" class="inputButton" name="btn_signin" />
                        <button class="inputButton" id="btn_signinphone" onclick="navigate();">Sign In by Mobile Number</button>
                        <div class="text-center"">
                    <a href=" #" id="">Create an account</a> - <a href="#" id="">Forgot password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>