<div wire:loading.delay.longer>
    <div style="display: flex; justify-content:center; align-items:center; background-color:black;
    position:fixed; top: 0px; left: 0px; z-index: 9999; width:100%; height:100%; opacity: .55">
        <div class="la-ball-spin-clockwise-fade la-3x">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

@push('css')

<style>
    .la-ball-spin-clockwise-fade,
    .la-ball-spin-clockwise-fade > div {
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
                box-sizing: border-box;
    }
    .la-ball-spin-clockwise-fade {
        display: block;
        font-size: 0;
        color: #fff;
    }
    .la-ball-spin-clockwise-fade.la-dark {
        color: #333;
    }
    .la-ball-spin-clockwise-fade > div {
        display: inline-block;
        float: none;
        background-color: currentColor;
        border: 0 solid currentColor;
    }
    .la-ball-spin-clockwise-fade {
        width: 32px;
        height: 32px;
    }
    .la-ball-spin-clockwise-fade > div {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 8px;
        height: 8px;
        margin-top: -4px;
        margin-left: -4px;
        border-radius: 100%;
        -webkit-animation: ball-spin-clockwise-fade 1s infinite linear;
        -moz-animation: ball-spin-clockwise-fade 1s infinite linear;
            -o-animation: ball-spin-clockwise-fade 1s infinite linear;
                animation: ball-spin-clockwise-fade 1s infinite linear;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(1) {
        top: 5%;
        left: 50%;
        -webkit-animation-delay: -.875s;
        -moz-animation-delay: -.875s;
            -o-animation-delay: -.875s;
                animation-delay: -.875s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(2) {
        top: 18.1801948466%;
        left: 81.8198051534%;
        -webkit-animation-delay: -.75s;
        -moz-animation-delay: -.75s;
            -o-animation-delay: -.75s;
                animation-delay: -.75s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(3) {
        top: 50%;
        left: 95%;
        -webkit-animation-delay: -.625s;
        -moz-animation-delay: -.625s;
            -o-animation-delay: -.625s;
                animation-delay: -.625s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(4) {
        top: 81.8198051534%;
        left: 81.8198051534%;
        -webkit-animation-delay: -.5s;
        -moz-animation-delay: -.5s;
            -o-animation-delay: -.5s;
                animation-delay: -.5s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(5) {
        top: 94.9999999966%;
        left: 50.0000000005%;
        -webkit-animation-delay: -.375s;
        -moz-animation-delay: -.375s;
            -o-animation-delay: -.375s;
                animation-delay: -.375s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(6) {
        top: 81.8198046966%;
        left: 18.1801949248%;
        -webkit-animation-delay: -.25s;
        -moz-animation-delay: -.25s;
            -o-animation-delay: -.25s;
                animation-delay: -.25s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(7) {
        top: 49.9999750815%;
        left: 5.0000051215%;
        -webkit-animation-delay: -.125s;
        -moz-animation-delay: -.125s;
            -o-animation-delay: -.125s;
                animation-delay: -.125s;
    }
    .la-ball-spin-clockwise-fade > div:nth-child(8) {
        top: 18.179464974%;
        left: 18.1803700518%;
        -webkit-animation-delay: 0s;
        -moz-animation-delay: 0s;
            -o-animation-delay: 0s;
                animation-delay: 0s;
    }
    .la-ball-spin-clockwise-fade.la-sm {
        width: 16px;
        height: 16px;
    }
    .la-ball-spin-clockwise-fade.la-sm > div {
        width: 4px;
        height: 4px;
        margin-top: -2px;
        margin-left: -2px;
    }
    .la-ball-spin-clockwise-fade.la-2x {
        width: 64px;
        height: 64px;
    }
    .la-ball-spin-clockwise-fade.la-2x > div {
        width: 16px;
        height: 16px;
        margin-top: -8px;
        margin-left: -8px;
    }
    .la-ball-spin-clockwise-fade.la-3x {
        width: 96px;
        height: 96px;
    }
    .la-ball-spin-clockwise-fade.la-3x > div {
        width: 24px;
        height: 24px;
        margin-top: -12px;
        margin-left: -12px;
    }
    /*
    * Animation
    */
    @-webkit-keyframes ball-spin-clockwise-fade {
        50% {
            opacity: .25;
            -webkit-transform: scale(.5);
                    transform: scale(.5);
        }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1);
        }
    }
    @-moz-keyframes ball-spin-clockwise-fade {
        50% {
            opacity: .25;
            -moz-transform: scale(.5);
                transform: scale(.5);
        }
        100% {
            opacity: 1;
            -moz-transform: scale(1);
                transform: scale(1);
        }
    }
    @-o-keyframes ball-spin-clockwise-fade {
        50% {
            opacity: .25;
            -o-transform: scale(.5);
            transform: scale(.5);
        }
        100% {
            opacity: 1;
            -o-transform: scale(1);
            transform: scale(1);
        }
    }
    @keyframes ball-spin-clockwise-fade {
        50% {
            opacity: .25;
            -webkit-transform: scale(.5);
            -moz-transform: scale(.5);
                -o-transform: scale(.5);
                    transform: scale(.5);
        }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
                -o-transform: scale(1);
                    transform: scale(1);
        }
    }
</style>

@endpush