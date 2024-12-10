<!DOCTYPE html>
<html>
<title>SATURN/CONTACT</title>
<?php include '../head.php'; ?>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var noise = new Howl({
            src: ['/res/audio/bgm/login-start.ogg'],
            loop: false,
            volume: 0.5
        });

        var logindrone = new Howl({
            src: ['/res/audio/bgm/login-loop.ogg'],
            loop: true,
            volume: 0.5
        });

        var prompt = new Howl({
            src: ['/res/audio/sfx/prompt.wav'],
            loop: false,
            volume: 1
        });

        var accept = new Howl({
            src: ['/res/audio/sfx/accept.wav'],
            loop: false,
            volume: 1
        });

        var deny = new Howl({
            src: ['/res/audio/sfx/deny.wav'],
            loop: false,
            volume: 1
        });

        var hello = new Howl({
            src: ['/res/audio/sfx/hello.wav'],
            loop: false,
            volume: 1
        });

        var destroy = new Howl({
            src: ['/res/audio/sfx/destroy.wav'],
            loop: false,
            volume: 1
        });

        window.addEventListener("load", function(event) {
            noise.play();
            setTimeout(function() {
                logindrone.play();
            }, 19648);
        });

        $("#lain").removeClass("nope");
        $("#block").removeClass("nah");
        setTimeout(function() {
            $("#block").removeClass("nope");
        }, 1000);
        setTimeout(function() {
            $("#fadein").removeClass("nope");
        }, 2000);
        setTimeout(function() {
            Write("h1");
        }, 1900);
        setTimeout(function() {
            $("#eidcube").removeClass("nope");
        }, 2500);
        setTimeout(function() {
            Write("#eidh2");
        }, 2500);
        setTimeout(function() {
            $("#confirmcube").removeClass("nope");
        }, 4000);
        setTimeout(function() {
            $("#note").removeClass("nope");
        }, 4500);
    });
</script>
<style>
    canvas {
        position: fixed;
        width: 100%;
        height: 100%;
        z-index: -100;
        opacity: 0.5;
    }

    body {
        background: url(/res/img/auth/bg/login.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: 0px -100px;
        opacity: 1;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        z-index: -1;
    }

    #padder {
        height: 20vh;
    }

    #lain {
        margin-bottom: -18px;
        transition: 1s;
        text-align: center;
        position: relative;
        z-index: 1000;
    }

    #block {
        background-color: #000;
        width: 60em;
        padding: 1em;
        overflow-y: hidden;
        max-height: 100vh;
        transition: 1s;
        box-shadow: 0px 0px 256px rgba(255, 255, 0, 0.2);
        padding-bottom: 1.2em;
    }

    h1 {
        font-size: 2.5em !important;
        font-family: A;
        margin: 0;
    }

    h2 {
        font-family: A;
        color: #FF0;
        margin: 0;
        margin-top: 0.5em;
        text-align: left;
    }

    textarea {
        font-size: 1.5em;
        width: calc(100% - 2px);
        background-color: #000;
        border: 1px solid #FF0;
        color: white;
        font-family: Heading;
        text-align: left;
        box-shadow: 0px 4px #FF0;
    }

    .bad textarea {
        color: #F00;
        border: 1px solid #F00;
        box-shadow: 0px 4px #F00;
    }

    .good textarea {
        color: #0F0;
        border: 1px solid #0F0;
        box-shadow: 0px 4px #0F0;
    }

    .bad h2 {
        color: #F00;
    }

    .good h2 {
        color: #0F0;
    }

    .bad#block {
        box-shadow: 0px 0px 256px rgba(255, 0, 0, 0.3);
        transition: 0.1s;
    }

    .good#block {
        box-shadow: 0px 0px 256px rgba(0, 255, 0, 0.3);
        transition: 0.1s;
    }

    #confirm {
        font-size: 3em;
        width: 100%;
        background-color: #000;
        border: 1px solid #FF0;
        color: #FF0;
        text-align: center;
        margin-top: 0.4em;
        cursor: pointer;
        box-shadow: 0px 8px #FF0, 0px 8px 32px rgba(255, 255, 0, 0.3), inset 0px 8px 32px rgba(255, 255, 0, 0.3);
        font-family: A;
        position: relative;
        top: 0px;
    }

    .bad #confirm {
        color: #F00 !important;
        border: 1px solid #F00 !important;
        top: 6px !important;
        box-shadow: 0px 2px #F00, 0px 8px 64px rgba(255, 0, 0, 0.4), inset 0px 8px 64px rgba(255, 0, 0, 0.4) !important;
    }

    .good #confirm {
        color: #0F0 !important;
        border: 1px solid #0F0 !important;
        top: 6px !important;
        box-shadow: 0px 2px #0F0, 0px 8px 64px rgba(0, 255, 0, 0.4), inset 0px 8px 64px rgba(0, 255, 0, 0.4) !important;
    }

    #confirm:hover,
    .wait#confirm {
        color: #F80;
        border: 1px solid #F80;
        box-shadow: 0px 4px #F80, 0px 8px 64px rgba(255, 155, 0, 0.4), inset 0px 8px 64px rgba(255, 155, 0, 0.4);
        top: 4px;
    }

    .bad {
        animation: 0.25s shake infinite linear;
    }

    @keyframes shake {
        0% {
            position: relative;
            left: 0px;
            top: 0px;
        }

        10% {
            position: relative;
            left: -1px;
            top: -2px;
        }

        20% {
            position: relative;
            left: 2px;
            top: -1px;
        }

        30% {
            position: relative;
            left: 0px;
            top: -4px;
        }

        40% {
            position: relative;
            left: 2px;
            top: -1px;
        }

        50% {
            position: relative;
            left: -1px;
            top: 2px;
        }

        60% {
            position: relative;
            left: 4px;
            top: -3px;
        }

        70% {
            position: relative;
            left: -2px;
            top: 2px;
        }

        80% {
            position: relative;
            left: 4px;
            top: -2px;
        }

        90% {
            position: relative;
            left: -1px;
            top: 1px;
        }

        100% {
            position: relative;
            left: 0px;
            top: 0px;
        }
    }

    .hidden {
        display: none;
    }

    .blur {
        filter: blur(5px);
    }

    #c {
        background-color: #FF0;
        margin-top: 0.8em;
        color: #000;
    }

    #c img {
        width: 12.5em;
        border: 8px solid #000;
        margin-top: -8px;
        margin-bottom: -17px;
    }

    #c textarea {
        width: 6em;
        position: relative;
        top: -0.15em;
    }

    #c>div {
        display: inline-block;
        width: 45em;
    }

    #c a {
        font-size: 2em;
        position: relative;
        top: -0.5em;
        left: 0.5em;
        font-family: A;
    }

    .bad #c {
        background-color: #F00;
    }

    .good #c {
        background-color: #0F0;
    }

    #block.nope {
        max-height: 0px;
        padding-bottom: 0px;
        transition: 0.4s;
    }

    #block.nah {
        opacity: 0;
    }

    #lain.nope {
        opacity: 0;
    }

    #fadein {
        transition: 1s;
    }

    #fadein.nope {
        opacity: 0;
    }

    #note {
        text-align: center;
        transition: 1s;
    }

    #note span {
        color: #FF0;
    }

    .badd#note span {
        color: #F00;
    }

    .goodd#note span {
        color: #0F0;
    }

    #note.nope {
        opacity: 0;
    }

    #eidcube,
    #confirmcube {
        transition: 1s;
    }

    #eidcube.nope,
    #confirmcube.nope {
        opacity: 0;
    }
</style>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <?php include '../header.php'; ?>
    <canvas id="canvas"></canvas>
    <div id="padder"></div>
    <center>
        <img id="lain" class="nope" src="/res/img/headerbar/knobs/saturn_knob.png" />
        <div id="block" class="nope nah">
            <center id="fadein" class="nope">
                <h1>Contact</h1>
                <form action="/saturn6b6t/contact" method="post">
                    <div id="eidcube" class="nope">
                        <h2 id="eidh2">Message</h2>
                        <textarea id="message" name="message"></textarea>
                    </div>
                    <div id="confirmcube" class="nope">
                        <button id="confirm" type="submit">Send</button>
                    </div>
                </form>
            </center>
        </div>
    </center>
    <p class="nope" id="note"><span>NOTE: </span>Add your email or discord if you wish to hear a response!</p>
</body>

</html>