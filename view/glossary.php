<!DOCTYPE html>
<html>
<title>SATURN/GLOSSARY</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var noise = new Howl({
            src: ["/res/audio/ambience/7.ogg"],
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
        <h2>Glossary <a href="/contact">(missing something?)</a></h2>
        <h1>Saturn</h1>
        <p>Umbrella term for all Saturn branches including but not limited too Saturn 6b6t, Lambda, Saturn Empire</p>
    </div>
</body>

</html>