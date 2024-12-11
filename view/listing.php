<!DOCTYPE html>
<html>
<title>SATURN/LISTING</title>
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
    table {
        border: 1px solid #FFF;
    }

    th,
    td {
        border: 1px solid #888;
    }

    td span {
        filter: blur(5px);
    }

    .codeimage {
        height: 2em;
        max-width: 3em;
    }

    .imgtd {
        line-height: 0;
    }

    .codeimage.expanded {
        height: initial;
        max-height: 90vh;
        max-width: 50vw;
    }

    .pages {
        margin-top: 2em;
    }

    .page {
        width: 1em;
        height: 1em;
        border: 1px solid #FFF;
        margin-right: 0.25em;
        margin-left: 0.25em;
        margin-top: 0.25em;
        background-color: #000;
        box-shadow: 3px 3px #FFF;
        font-size: 2em;
        padding: 0.25em;
        display: inline-block;
    }

    .thispage {
        color: #000;
        background-color: #FFF;
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
        <center>
            <h1>Members of Saturn</h1>
            <table>
                <tbody>
                    <tr>
                        <th>Joindate</th>
                        <th>Username</th>
                        <th>MC</th>
                        <th>Image</th>
                    </tr>
                    <tr>
                        <td>May 2022</td>
                        <td>azedev</td>
                        <td>azedev</td>
                        <td class="imgtd"><img src="/res/img/azedev.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>May 2022</td>
                        <td>Emilsen</td>
                        <td>Emilsen2152</td>
                        <td class="imgtd"><img src="/res/img/Emilsen2152.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>May 2022</td>
                        <td>Wildy</td>
                        <td>W1ldy</td>
                        <td class="imgtd"><img src="/res/img/W1ldy.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>May 2022</td>
                        <td>Fulgur</td>
                        <td>Havikje12</td>
                        <td class="imgtd"><img src="/res/img/Havikje12.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>May 2022</td>
                        <td>Attacker</td>
                        <td>???</td>
                        <td class="imgtd"><img src="/res/img/Steve.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>June 2023</td>
                        <td>Aster</td>
                        <td>deeznuts69</td>
                        <td class="imgtd"><img src="/res/img/Steve.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>June 2023</td>
                        <td>7mWale</td>
                        <td>7mWale</td>
                        <td class="imgtd"><img src="/res/img/7mWale.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>January 2024</td>
                        <td>bd71legend</td>
                        <td>bd71legend</td>
                        <td class="imgtd"><img src="/res/img/Steve.png" class="codeimage"></td>
                    </tr>
                    <tr>
                        <td>February 2024</td>
                        <td>MX</td>
                        <td>Maximum4923</td>
                        <td class="imgtd"><img src="/res/img/Maximum4923.png" class="codeimage"></td>
                    </tr>
                </tbody>
            </table>
        </center>
        <br><br><br><br>
    </div>
</body>

</html>