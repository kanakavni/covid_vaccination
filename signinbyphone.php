<?php
require "connection.php";
function sendOTP($mobile)
{
    echo '<script>alert("hello");</script>';
    $url = 'https://cdndemo-api.co-vin.in/api/v2/auth/generateOTP';
        $query_fields = [
            'mobile'=> '7004504651',
            "secret" => "3sjOr2rmM52GzhpMHjDEE1kpQeRxwFDr4YcBEimi" 
        ];

        $curl = curl_init($url . '?' . http_build_query($query_fields));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, [
        //     'X-RapidAPI-Host: contextualwebsearch-websearch-v1.p.rapidapi.com',
        //     'X-RapidAPI-Key: 7xxxxxxxxxxxxxxxxxxxxxxxxxxx'
        //]);
        $response = json_decode(curl_exec($curl), true);
        curl_close($curl);
        foreach($response as $res){
            echo $$res . "\n";
        }
}

if (isset($_POST['btn_signinbyphone'])) {
    $mobile = $_POST['mobile'];
    sendOTP($mobile);
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

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>


</head>

<body>

    <div class="container" style="height: 100%;display: flex;justify-content: center;align-items: center;">
        <div class="row">
            <div class="col-6">
                <div id="logbox">
                    <form id="signup" method="post" action="#">
                        <h1>Account login</h1>
                        <input name="mobile" type="tel" placeholder="Enter Registered Mobile Number" class="input pass" required="required" />
                        <input type="submit" value="Send OTP" class="inputButton" name="btn_signinbyphone" />
                        <div class="text-center">
                            <input name="otp" type="number" placeholder="Enter One Time Passcode" length="6" class="input pass" required="required" />
                            <input type="button" value="Verify" class="inputButton" name="btn_signinbyphone" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>