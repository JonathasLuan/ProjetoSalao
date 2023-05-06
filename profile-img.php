<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
            position: relative;
            width: 10%;
            border-radius: 50%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
            border-radius: 50%;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .container:hover .image {
            opacity: 0.3;
        }

        .container:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #04AA6D;
            color: white;
            padding: 0px 0px;
            cursor: pointer;
            border-radius: 50%;
        }

        .text button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 15px;
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="img/img_avatar.png" alt="Avatar" class="image" style="width:100%">
        <div class="middle">
            <div class="text"><button><i class="fa fa-eye"></i></button></div>
        </div>
    </div>
</body>

</html>