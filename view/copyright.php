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
        <p>This website contains copyrighted material, the use of which has not always been specifically authorized by the copyright owner. The content is provided for educational purposes to inform and educate visitors about our unofficial group and activities within the Minecraft community.</p>
        <p>We believe this constitutes "fair use" under copyright law as it is non-commercial, transformative, and intended to foster community engagement. All trademarks, logos, and copyrighted content remain the property of their respective owners.</p>
        <p>If you are the copyright owner of any material on this site and believe that its use does not comply with fair use principles, please contact us at support@nont123.nl. We are committed to promptly addressing concerns and, if necessary, removing the material in question.</p>
    </div>
</body>

</html>