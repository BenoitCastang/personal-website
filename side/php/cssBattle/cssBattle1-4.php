<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Battle 1-4</title>
</head>
<body>
    <div id="div1"></div>
    <div id="div2"></div>
    <div id="div3"></div>
    <style>
        body {
            background-color: #62306d;
        }
        div {
            position: absolute;
            background-color: #f7ec7d;
        }
        #div1 {
            left: 12.25%;
            top: 50%;
            width: 25%;
            height: 33.33%;
            border-radius: 0 0 50% 50%;
        }
        #div2 {
            left: 37.25%;
            bottom: 50%;
            width: 25.5%;
            height: 33.33%;
            border-radius: 50% 50% 0 0;
        }
        #div3 {
            right: 12.25%;
            top: 50%;
            width: 25%;
            height: 33.33%;
            border-radius: 0 0 50% 50%;
        }
    </style>
</body>
</html>