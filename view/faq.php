<!DOCTYPE html>
<html>
<title>SATURN/FAQ</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var noise = new Howl({
            src: ["/res/audio/ambience/2.ogg"],
            loop: true,
            volume: 0.5
        });
        window.addEventListener("load", function(event) {
            noise.play();
        });
    });
</script>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <?php include '../header.php'; ?>
    <?php include '../nav.php'; ?>
    <div class="seperator"></div>
    <div class="padded seethru">
        <br><br>
        <h2>FAQ <a href="/contact">(missing something?)</a></h2>
        <h1>What is this?</h1>
        <p>This is a website where you can read things I shitpost about Saturn.</p>
        <h1>Who are you?</h1>
        <p>I am Fulgur</p>
        <h1>How may I contact you?</h1>
        <p>Please contact us at our <span style="color:yellow"> <a href="/contact">contact page</a></span>.</p>
    </div>
</body>

</html>