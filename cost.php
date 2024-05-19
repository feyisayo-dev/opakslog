<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cost of dispatch</title>
    <link rel="stylesheet" href="css/all.min.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/sweetalert2@10.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 0%;
            }

            50% {
                background-position: 100% 100%;
            }

            100% {
                background-position: 0% 0%;
            }
        }

        .wave {
            background: rgb(255 255 255 / 25%);
            border-radius: 1000% 1000% 0 0;
            position: fixed;
            width: 200%;
            height: 12em;
            animation: wave 10s -3s linear infinite;
            transform: translate3d(0, 0, 0);
            opacity: 0.8;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .wave:nth-of-type(2) {
            bottom: -1.25em;
            animation: wave 18s linear reverse infinite;
            opacity: 0.8;
        }

        .wave:nth-of-type(3) {
            bottom: -2.5em;
            animation: wave 20s -1s reverse infinite;
            opacity: 0.9;
        }

        @keyframes wave {
            2% {
                transform: translateX(1);
            }

            25% {
                transform: translateX(-25%);
            }

            50% {
                transform: translateX(-50%);
            }

            75% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(1);
            }
        }

        .container {
            margin: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: absolute;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        select,
        input[type="text"],
        input[type="number"],
        .submit {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .submit {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <div class="container">
        <h1>Cost of dispatch</h1>
        <div id="pollingForm">
            <div class="mt-3 sm:mt-0 form__field">
                <div class="has-feedback" id="Pickup-slga1" style="display: none;">
                    <div class="input-group has-feedback">
                        <label for="Pickup-Slga">
                            LGA
                            <span data-required="true" aria-hidden="true"></span>
                        </label>
                        <select name="Pickup-Slga" id="Pickup-Slga" placeholder="State LGA">
                        </select>
                        <span class="input-group-addon"><i class="fa fa-flag-checkered"></i></span>
                    </div>
                    <span class="help-block" id="help-Pickup-Slga"></span>
                </div>
            </div>


            <div class="form-group">
                <label for="votes">Votes:</label>
                <input type="number" id="votes" name="votes" required>
            </div>

            <input type="submit" class="submit" value="Submit">
        </div>
    </div>
</body>
<script>
    var Submit = document.querySelector('.submit');
</script>

</html>