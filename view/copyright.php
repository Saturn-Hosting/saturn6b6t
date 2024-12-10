<!DOCTYPE html>
<html>
<title>SATURN/COPYRIGHT</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var noise = new Howl({
            src: ["/res/audio/ambience/5.ogg"],
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
        <h1>Copyright</h1>
    </div>
</body>

</html>