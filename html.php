<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Name Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        .box {
            width: 320px;
            background-color: #C4C4C4;
            border: 2px grey;
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
        }
        label {
            color: #fff;
            display: block;
            margin-bottom: 8px;
        }
        #username {
            font-size: 18px;
            width: 100%;
            padding: 6px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: white;
            border-radius: 10px;


        }
        #submitButton {
            font-size: 18px;
            background-color: #4CAF50;
            color: #fff;
            border: 2px white;
            border-radius: 10px;
            padding: 8px 16px;
            cursor: pointer;
        }
        #message {
            font-size: 17px;
            margin-top: 15px;
            font-weight: bold;
        }
        .default {
            color: #4CAF50;
        }
        .verified {
            color: #4CAF50;
        }
        .error {
            color: #FF2E2E;
        }
    </style>
</head>
<body>

<div class="box">
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username">
    <button id="submitButton" type="button">Submit</button>
    <div id="message" class="default">Key in username and click submit</div>
</div>

<script src="verify_ajax.js"></script>
</body>
</html>