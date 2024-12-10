<!DOCTYPE html>
<html>
<title>SATURN/NEWS</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var noise = new Howl({
            src: ["/res/audio/ambience/1.ogg"],
            loop: true,
            volume: 0.5
        });
        window.addEventListener("load", function(event) {
            noise.play();
        });
    });
</script>

<style>
    .blogpane {
        background-color: #000;
        padding: 0.5em;
        margin-bottom: 1em;
    }

    .blogpane h1 {
        text-align: center;
    }

    .blogpane h2 {
        text-align: center;
        font-size: 8px;
        font-family: "Paragraph";
        margin-top: -1.5em;
    }

    .padded {
        background-color: #000;
        background-image: url(/res/img/bg/index.png);
        background-attachment: fixed;
        background-position: center;
    }
</style>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <?php include '../header.php'; ?>
    <?php include '../nav.php'; ?>
    <div class="seperator"></div>
    <div class="padded seethru">
        <br><br>
        <div class="pane blogpane">
            <h1 class="post-title">New Saturn website</h1>
            <h2 class="post-date">10.12.24 from Saturn Hosting</h2>
            <p>We have launched a new website for Saturn</p>
        </div>
    </div>
</body>

</html>