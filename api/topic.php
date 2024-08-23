<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic media</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        #head {
            text-align: center;
        }

        #nav {
            padding: 0px 20px;
            background-color: blue;
            display: flex;
            justify-content: right;
        }

        #searchBox {
            margin: 10px 0px;
            background-color: white;
            padding: 2px;
            display: flex;
            align-items: center;
            justify-content: left;
        }

        #searchBtn {
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            border-radius: 15px;
            box-shadow: 0 8px #999;
            margin: 2px 0px;
            border: none;
            background-color: rgb(50, 219, 228);
        }

        #searchBtn:hover {
            background-color: aqua
        }

        #searchBtn:active {
            background-color: aqua;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        #topic {
            text-align: center;
            background-color: blue;
            background: linear-gradient(blue, black);
            color: white;
            padding: 20px;
        }

        #message {
            text-align: center;
            color: white;
            background-color: blue;
            padding: 10px;
        }

        .dialogueBox {
            background-color: white;
            border-radius: 15px 0px;
            color: black;
            margin: 20px 0px;
        }

        .dialogueImg {
            position: relative;
            bottom: 0px;
            left: 2px;
        }
    </style>
</head>

<body>

    <div id="topic">
        <h4>
            Topic: A voice to link your Subjects through social networking
        </h4>
    </div>
    <div id="message">
        <div class="dialogueBox">
            <h3>1. At the very top of the topic
                output squares, Place banner as
                shown, reading: One-Liner
                Messaging.</h3>
            <a href="#"> Visit: Yes, </a>
            <span>Name: lorem, App: Buy, Lorem: ipsum dolor sit amet consectetur adipisicing elit. Eaque et asperiores magni! </span> <br>
            <a href="https://github.com/HarsikaKumari">https://github.com/HarsikaKumari</a>
            <!-- <img class="dialogueImg" src="./assets/images/thumbsUp.png" alt="Like">
            <img class="dialogueImg" src="./assets/images/thumbsDown.png" alt="Like">
            <img class="dialogueImg" src="./assets/images/share.png" alt="Like"> -->
        </div>
        <div class="dialogueBox">
            <h3>1. At the very top of the topic
                output squares, Place banner as
                shown, reading: One-Liner
                Messaging.</h3>
            <a href="#"> Visit: Yes, </a>
            <span>Name: lorem, App: Buy, Lorem: ipsum dolor sit amet consectetur adipisicing elit. Eaque et asperiores magni! </span> <br>
            <a href="https://github.com/HarsikaKumari">https://github.com/HarsikaKumari</a>
        </div>
    </div>
    <script>
        var sound = new Audio("/assets/sounds/mouseClick.wav");
    </script>
</body>

</html>