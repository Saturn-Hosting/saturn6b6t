<!DOCTYPE html>
<html>
<title>SATURN/AUTH REJECTED</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var ogg = new Howl({
            src: ['/res/audio/bgm/500.ogg'],
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
        background-image: url(/res/img/error/bg/500.png);
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
</style>
</head>

<body>
    <?php include '../contentloader.php'; ?>

    <center>
        <div style="height: 20vh;"></div>
        <img src="/res/img/error/500.png" />
        <h1>Unauthorized access</h1>
        <div style="height: 20vh;"></div>
        <div id="back">Return</div>
    </center>
</body>

</html>