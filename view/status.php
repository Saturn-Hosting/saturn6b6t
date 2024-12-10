<!DOCTYPE html>
<html>
<title>SATURN/STATUS</title>
<?php include '../head.php'; ?>
<script>
    function toFixed(x) {
        if (Math.abs(x) < 1.0) {
            var e = parseInt(x.toString().split("e-")[1]);
            if (e) {
                x *= Math.pow(10, e - 1);
                x = "0." + (new Array(e)).join("0") + x.toString().substring(2);
            }
        } else {
            var e = parseInt(x.toString().split("+")[1]);
            if (e > 20) {
                e -= 20;
                x /= Math.pow(10, e);
                x += (new Array(e + 1)).join("0");
            }
        }
        return x;
    }

    document.addEventListener("DOMContentLoaded", function(event) {
        var music = new Howl({
            src: ["/res/audio/bgm/status.ogg"],
            loop: true,
            volume: 0.5
        });

        window.addEventListener("load", function(event) {
            music.play();
        });
    });
</script>
<style>
    @font-face {
        font-family: CNT;
        src: url(/res/font/countdown.ttf);
    }

    .layer {
        padding: 4em;
    }

    #slots {
        background-image: url(/res/img/status/new/shootingstars.png);
        background-size: cover;
        background-position: center;
    }

    #linked {
        background-image: url(/res/img/status/new/cables.png);
        background-size: cover;
        background-position: center;
    }

    #aurora {
        background-image: url(/res/img/status/new/auroraleft.png);
        background-size: cover;
        background-position: center;
    }

    #usage {
        background-image: url(/res/img/status/new/usage.png);
        background-size: cover;
        background-position: center;
    }

    #gate {
        background-image: url(/res/img/status/new/gates.png);
        background-size: cover;
        background-position: center;
    }

    #recruit {
        background-image: url(/res/img/status/new/recruit.png);
        background-size: cover;
        background-position: center;
    }

    #destruction {
        background-image: url(/res/img/status/new/destruction.png);
        background-size: cover;
        background-position: center;
    }

    h1 {
        text-align: center;
        font-family: CNT;
        font-size: 5vw;
        text-shadow: 0px 8px #AAA, 0px 8px 32px #FFF;
        line-height: 1.5;
        margin: 0;
    }

    h2 {
        text-align: center;
        font-family: Heading;
        font-size: 2.5vw;
        margin: 0;
    }

    h4 {
        text-align: center;
        font-family: Heading;
        font-size: 2vw;
        margin: 0;
    }

    #ms {
        font-family: Heading;
        vertical-align: center;
        font-size: 0.6em;
    }

    .append {
        font-family: Heading;
        vertical-align: center;
        font-size: 0.3em;
    }

    .decimal {
        font-family: CNT;
        vertical-align: center;
        font-size: 0.7em;
        width: 42vw;
        display: inline-block;
        text-align: left;
    }

    .extralarge {
        font-size: 15vw;
        text-shadow: 0px 32px #AAA, 0px 32px 32px #FFF, 0px 32px 256px #FFF;
    }
</style>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <?php include '../header.php'; ?>

    <div class="layer" id="slots">
        <h1 class="extralarge"><?php echo $members; ?></h1>
        <h4>Members</h4>
        <h2><?php echo $slots; ?> slots</h2>
    </div>
    <div class="seperate"></div>
    <div class="layer" id="aurora">
        <h2>SATURN 6B6T</h2>
        <h4>REMAINING</h4>
    </div>
    <div class="seperate"></div>
    <div class="layer" id="usage">
        <h2>SATURN EMPIRE</h2>
        <h4>CANCELLED</h4>
    </div>
    <div class="seperate"></div>
    <div class="layer" id="gate">
        <h2>LAMBDA</h2>
        <h4>REMAINING</h4>
    </div>
    <div class="seperate"></div>
    <div class="layer" id="recruit">
        <h2>MISSION 1: RECRUITING NEW MEMBERS</h2>
        <h1>ON COURSE</h1>
        <h4>now RECRUITING</h4>
    </div>
    <div class="seperate"></div>
    <div class="layer" id="destruction">
        <h2>MISSION 2: DESTROY 6B6T</h2>
        <h1>ON COURSE</h1>
        <h4>now WAITING FOR MORE MEMBERS</h4>
    </div>
    <div class="seperator"></div>
    <?php include '../nav.php'; ?>
</body>

</html>