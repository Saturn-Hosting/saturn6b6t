<!DOCTYPE html>
<html>

<head>
    <title>SATURN/???</title>
    <?php include '../head.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var ogg = new Howl({
                src: ['/res/audio/bgm/404.ogg'],
                loop: true,
                volume: 1
            });
            ogg.play();
            $("#back").click(function() {
                window.history.back();
            });
        });
    </script>
    <style>
        body {
            min-height: 100vh;
            width: 100%;
            background-image: url(/res/img/error/bg/snow.png);
            background-size: cover;
            background-position: center;
            position: absolute;
            left: 0;
            top: 0;
        }

        #back {
            background-color: rgba(0, 0, 0, 0.5);
            border: 1px solid #FFF;
            box-shadow: 0px 6px #FFF, 0px 0px 16px #FFF;
            width: 10em;
            font-family: Heading;
            font-size: 2em;
            cursor: pointer;
            position: relative;
            top: 0px;
            transition: 0.5s;
            text-align: center;
        }

        #back:hover {
            box-shadow: 0px 2px #FFF, 0px 0px 64px #FFF;
            top: 4px;
        }

        #snow {
            background: none;
            background-image: url('/res/img/error/misc/s1.png'), url('/res/img/error/misc/s2.png'), url('/res/img/error/misc/s3.png');
            height: 100%;
            left: 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1;
            -webkit-animation: snow 100s linear infinite;
            animation: snow 100s linear infinite;
            pointer-events: none;
        }

        @keyframes snow {
            0% {
                background-position: 0px 0px, 0px 0px, 0px 0px;
            }

            50% {
                background-position: 5000px 5000px, 1000px 2000px, -1000px 1500px;
            }

            100% {
                background-position: 5000px 10000px, 2000px 4000px, -1000px 3000px;
            }
        }

        @-webkit-keyframes snow {
            0% {
                background-position: 0px 0px, 0px 0px, 0px 0px;
            }

            50% {
                background-position: 5000px 5000px, 1000px 2000px, -1000px 1500px;
            }

            100% {
                background-position: 5000px 10000px, 2000px 4000px, -1000px 3000px;
            }
        }
    </style>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <div id="snow"></div>
    <center>
        <div style="height: 20vh;"></div>
        <img src="/res/img/error/saturn.png">
        <h1>File not found</h1>
        <div style="height: 20vh;"></div>
        <div id="back">Return</div>
    </center>
</body>

</html>