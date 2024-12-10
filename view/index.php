<!DOCTYPE html>
<html lang="en">

<head>
    <title>SATURN</title>
    <?php include '../head.php'; ?>

    <style>
        @font-face {
            font-family: CNT;
            src: url(/res/font/countdown.ttf);
        }

        #countdown {
            font-family: CNT;
            font-size: 3em;
            margin: 0;
            text-shadow: 0px 0px 16px #FF0;
        }

        #count h3 {
            font-size: 16px;
            margin: 0;
            color: #888;
        }

        #slots h4 {
            font-size: 24px;
            margin: 0;
            margin-top: 0.5em;
        }

        #slots h3 {
            font-size: 16px;
            margin: 0;
            color: #888;
            margin-bottom: 1em;
        }

        #belief h4 {
            font-size: 24px;
            margin: 0;
            margin-top: 0.5em;
        }

        #belief h3 {
            font-size: 16px;
            margin: 0;
            color: #888;
            margin-bottom: 1em;
        }

        #flyer {
            width: 100%;
            height: 0px;
            background-color: #000;
            background-image: url(/res/img/bg/home.png);
            background-attachment: fixed;
            background-position: center;
            transition: height 5s, opacity 5s;
        }


        #wallpaper {
            width: 100%;
            height: 70vh;
            background-color: #000;
            background-image: url(/res/img/bg/home.png);
            background-attachment: fixed;
            background-position: center;
        }

        #wallpaper #lain {
            position: absolute;
            top: calc(70vh - 456px);
            left: 10vw;
            transition: top 0s;
        }

        #wallpaper h1 {
            position: absolute;
            left: calc(10vw + 450px);
            top: calc(70vh - 380px);
            font-family: Heading;
            font-size: 3vw;
            text-shadow: 3px 6px #000, 0px -1px #000, 0px 1px #000, -1px 0px #000, 1px 0px #000, -1px -1px #000, 1px 1px #000, -1px 1px #000, 1px -1px #000;
            transition: top 0s;
        }

        #register-button {
            color: #FFFF00;
        }

        #register-button:hover {
            color: #FF0000;
            text-shadow: 0px 0px 10px #FF0000;
        }

        @keyframes typeHeat {
            0% {
                text-shadow: 0px 0px 0px #FFF;
                color: #FFF;
            }

            100% {
                text-shadow: 0px 0px 100px #FFF, 0px 0px 20px #FFF, 0px 0px 10px #FFF;
                color: #AAA;
            }
        }

        #back {
            background-color: rgba(0, 0, 0, 1);
            border: 1px solid #FFF;
            box-shadow: 0px 6px #7859CC, 0px 0px 16px #7859CC;
            width: 10em;
            font-family: Heading;
            font-size: 2em;
            cursor: pointer;
            position: absolute;
            left: calc(19vw + 450px);
            top: calc(90vh - 380px);
            transition: 0.5s;
            text-align: left;
        }

        #back:hover {
            box-shadow: 0px 2px #7859CC, 0px 0px 64px #7859CC;
            top: calc(90vh - 375px);
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var noise = new Howl({
                src: "/res/audio/ambience/7.ogg",
                loop: true,
                volume: "0.8"
            });

            var bgm = new Howl({
                src: "/res/audio/bgm/superbgm.ogg",
                loop: true,
                volume: "0.5"
            });

            $("#lain").click(function() {
                $("#flyer").css("height", "200vh");
                $("#wallpaper #lain").css("top", "calc(70vh - 456px + 200vh)");
                $("#wallpaper #lain").css("transition", "top 5s");

                $("#wallpaper h1").css("top", "calc(70vh - 380px + 200vh)");
                $("#wallpaper h1").css("transition", "top 5s");

                $("#header").hide(2000);
                $("#flyer").css("opacity", "0");
                $("html").css("overflow", "hidden");
                bgm.fade(0.2, 0, 8000);
                noise.fade(0.5, 0, 8000);
                setTimeout(function() {
                    window.location = "nothing";
                }, 10000);
            });
        });
    </script>
</head>

<body>
    <?php include '../contentloader.php'; ?>
    <?php include '../header.php'; ?>
    <div id="flyer"></div>
    <div id="wallpaper">
        <img id="lain" src="/res/img/others/lain.png" />
        <h1>Join <span style="color:yellow"><a href="https://discord.gg/ajm7CSRBZY">SATURN</a></span> now!</h1>
    </div>
    <div class="seperator"></div>
    <div class="padded">
        <h1>Welcome to Saturn</h1>
        <p>This webpage has been made to facilitate the broadcasting of all Saturn messages and to allow interaction
            between all members and those interested. A simple summary of Saturn can be read below.</p>
    </div>
    <div class="seperate"></div>
    <div class="padded">
        <center>
            <div id="stats">
                <a id="regs" href="/listing">
                    <h1><span style="color: yellow"><?php echo $members; ?></span> members</h1>
                </a>
                <h3>Join our <a href="https://discord.gg/ajm7CSRBZY" class="discord">discord</a> and apply to join
                    Saturn now</h3>
                <style>
                    .discord:hover {
                        color: yellowgreen;
                    }

                    .discord {
                        color: yellow;
                    }
                </style>
                <h4><span id="slotsremaining" style="color: yellow"><?php echo $slots - $members; ?></span> slots remaining</h4>
            </div>
        </center>
    </div>
    <!-- <div class="seperate"></div>
    <div class="padded">
        <center>
            <a href="/news">
                <h2 class="post-title"></h2>
                <h3 class="post-date"></h3>
            </a>
        </center>
    </div> -->
    <div class="seperate"></div>
    <div class="padded">
        <h1>Saturn</h1>
        <p>In early 2022 <span style="color:yellow">azedev</span> founded Saturn Empire which over the next few years
            branched off into multiple different servers and iterations. Originally a community for <span
                style="color:yellow">azedev</span> to share and sell his games, now a community of close friends
            spreading the "brand" of Saturn everywhere they go. Saturn Empire was mainly ran by <span
                style="color:yellow">Emilsen</span>.</p>
        <h1>Saturn 6b6t</h1>
        <p>Founded on 30 may 2023, a clan on the Minecraft anarchy server 6b6t with the main members being <span
                style="color:yellow">azedev</span>, <span style="color:yellow">Fulgur</span> and <span
                style="color:yellow">Wildy</span> growing up to 20 members before Saturn 6b6t self griefed their own
            bases and became inactive on 6b6t, Saturn 6b6t became active again in december 2024. Saturn 6b6t is focused
            on absolute loyalty to Saturn and it's community.
        </p>
        <h1>Lambda</h1>
        <p>Lambda is a group recognizable by having a lambda in their PFP or the lambda symbol in their pronouns on
            discord, it's a group made mainly to indicate loyalty to eachother.</p>
    </div>
    <div class="seperate"></div>
    <?php include '../nav.php'; ?>
    <center>
        <a class="link" href="/copyright">&copy; 2022 - 2024 nont123.nl</a>
    </center>
</body>

</html>