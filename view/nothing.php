<!DOCTYPE html>
<html>

<head>
    <title>SATURN/THANK YOU</title>
    <?php include '../head.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var intro = new Howl({
                src: ['/res/audio/bgm/koronba-intro.ogg'],
                loop: false,
                volume: 0.5
            });

            var loop = new Howl({
                src: ['/res/audio/bgm/koronba.ogg'],
                loop: true,
                volume: 0.5
            });

            window.addEventListener('load', function() {
                intro.once('load', function() {
                    intro.play();
                    setTimeout(function() {
                        loop.play();
                    }, 42657);
                });
            });

            $("body").css("opacity", "1");

            setTimeout(function() {
                window.location.href = "/";
            }, 10000);
        });
    </script>
    <style>
        body {
            opacity: 0;
            transition: opacity 3s;
        }

        #image {
            position: fixed;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            transition: opacity 1s;
        }

        @font-face {
            font-family: CNT;
            src: url(/res/font/countdown.ttf);
        }

        #countdown {
            font-family: CNT;
            font-size: 3em;
            margin: 0;
            color: rgba(255, 255, 255, 0.2) !important;
            text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.5);
            position: fixed;
            left: 16px;
            top: 16px;
        }

        #r {
            font-family: Heading;
            font-size: 1em;
            margin: 0;
            color: rgba(255, 255, 255, 0.1) !important;
            text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.25);
            position: fixed;
            left: 16px;
            top: 4.5em;
        }
    </style>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <img id="image" src="/res/img/pageindex/logos/saturn.jpeg" />
</body>

</html>