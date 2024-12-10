<div id="contentloader">
    <img id="loadsaturn" src="/res/img/loader/loadsaturn.png" />
    <img id="loadspin" src="/res/img/loader/loadspin.png" />
</div>
<style>
    #contentloader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: #000;
        z-index: 10000;
        transition: 0.2s;
    }

    #loadsaturn {
        position: absolute;
        left: calc(50% - 48px);
        top: calc(50% - 48px);
    }

    #loadspin {
        position: absolute;
        left: calc(50% - 46px);
        top: calc(50% - 47px);
        animation: LoaderSpin 2s infinite linear;
    }

    @keyframes LoaderSpin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .destroyedloader {
        opacity: 0;
        pointer-events: none;
        transition: 0.5s !important;
    }

    .destroyedloader #loadsaturn {
        top: calc(50% - 100px);
        transition: 0.5s ease-in !important;
    }

    .destroyedloader #loadspin {
        top: calc(50% - 100px);
        transition: 0.5s ease-in !important;
    }
</style>
<script>
    window.addEventListener("load", function(event) {
        document.getElementById("contentloader").className = "destroyedloader";
        document.getElementById("loadspin").src = "/res/img/loader/loadfinish.png";
    });

    window.onbeforeunload = function() {
        document.getElementById("contentloader").classList.remove("destroyedloader");
        document.getElementById("loadspin").src = "/res/img/loader/loadspin.png";
    }
</script>