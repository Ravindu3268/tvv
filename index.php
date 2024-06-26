<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dist/shaka-player.ui.js"></script>
    <link rel="stylesheet" type="text/css" href="dist/controls.css">
    <script defer src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>
     <script disable-devtool-auto src="https://cdn.jsdelivr.net/npm/disable-devtool@latest"></script> 

    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #1c1c1e;
    }

    #videoContainer {
        position: relative;
        width: 100%;
        height: 100vh;
        background-color: #1c1c1e;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

    }


    #scrubber {
        position: absolute;
        height: 100%;
        background-color: #3498db;
        width: 0;
    }

    #video {
        width: 100%;
        height: 100%;
        display: block;
    }

    #logo {
        position: absolute;
        bottom: 10px;
        right: 10px;
    }

    #logo img {
        max-width: 100px;
        max-height: 50px;
    }
    </style>
</head>

<body>
    <div data-shaka-player-container id="videoContainer">
        <video autoplay data-shaka-player id="video"></video>
        <div id="logo">
            <img src="https://cyberyakku.com/wp-content/uploads/2022/07/r-logo31.png" alt="CyberYakku">
        </div>
    </div>
</body>

</html>

<script>
function _0x1175(){const _0x1fb5df=['application/json','detail','code','rewind','2950839RmHXzr','playTime','stringify','video','rgb(255,\x20255,\x20255)','videoUrl','parse','4IGZjfM','rgba(255,\x20255,\x20255,\x200.54)','stream','Unable\x20to\x20load\x20the\x20UI\x20library!','126869RjaGia','shaka-ui-loaded','location','3381525cOAsAY','POST','object','8dagRmS','volume','addEventListener','875LtQHyg','fullscreen','https://tv.uvaceylonagro.com','load','width','getControls','then','36510bBNOtc','268994dBEFda','backend.php','configure','error','quality','log','shaka-ui-load-failed','get','height','statistics','player','play_pause','rgba(255,\x20255,\x20255,\x200.3)','130956axBzrv','270yQAqEb','space','video-container','fast_forward','708300zxAPWR','requestFullscreen'];_0x1175=function(){return _0x1fb5df;};return _0x1175();}const _0x3ac36a=_0x3a74;(function(_0x29196f,_0x3d03d0){const _0x485874=_0x3a74,_0x346d29=_0x29196f();while(!![]){try{const _0x29c1e1=parseInt(_0x485874(0x173))/0x1*(-parseInt(_0x485874(0x16f))/0x2)+parseInt(_0x485874(0x15d))/0x3+parseInt(_0x485874(0x162))/0x4+parseInt(_0x485874(0x176))/0x5+parseInt(_0x485874(0x183))/0x6*(parseInt(_0x485874(0x17c))/0x7)+-parseInt(_0x485874(0x179))/0x8*(parseInt(_0x485874(0x168))/0x9)+parseInt(_0x485874(0x15e))/0xa*(-parseInt(_0x485874(0x184))/0xb);if(_0x29c1e1===_0x3d03d0)break;else _0x346d29['push'](_0x346d29['shift']());}catch(_0x18d659){_0x346d29['push'](_0x346d29['shift']());}}}(_0x1175,0x6582e));const urlParams=new URLSearchParams(window[_0x3ac36a(0x175)]['search']),videoUrl=urlParams[_0x3ac36a(0x157)](_0x3ac36a(0x16d));async function init(){const _0x2e5b7d=_0x3ac36a,_0x4d0aa8=document['getElementById'](_0x2e5b7d(0x160)),_0x5e1fb5=document['getElementById'](_0x2e5b7d(0x16b)),_0x1e787c=_0x5e1fb5['ui'],_0x1b620f=_0x1e787c[_0x2e5b7d(0x181)](),_0x2bae57=_0x1b620f['getPlayer'](),_0x5cea70={'displayChapters':!![],'seekBarColors':{'chapterMarks':'rgb(27,\x2027,\x2027)','chapterLabels':_0x2e5b7d(0x16c)},'seekBarColors':{'base':_0x2e5b7d(0x15c),'buffered':_0x2e5b7d(0x170),'played':_0x2e5b7d(0x16c)},'controlPanelElements':[_0x2e5b7d(0x167),_0x2e5b7d(0x15b),_0x2e5b7d(0x161),_0x2e5b7d(0x15f),'mute',_0x2e5b7d(0x17a),_0x2e5b7d(0x154),_0x2e5b7d(0x17d)],'playbackRates':[0.5,0.75,0x1,1.25,1.5,1.75,0x2],'fastForwardRates':[0x2,0x4,0x8,0x1],'rewindRates':[-0x1,-0x2,-0x4,-0x8],'customContextMenu':!![],'contextMenuElements':[_0x2e5b7d(0x159)],'statisticsList':[_0x2e5b7d(0x180),_0x2e5b7d(0x158),_0x2e5b7d(0x169),'bufferingTime']};_0x1e787c[_0x2e5b7d(0x186)](_0x5cea70);const _0x3df09f={'vidId':videoUrl};fetch(_0x2e5b7d(0x185),{'method':_0x2e5b7d(0x177),'headers':{'Content-Type':_0x2e5b7d(0x164),'X-Website-Origin':_0x2e5b7d(0x17e)},'body':JSON[_0x2e5b7d(0x16a)](_0x3df09f)})[_0x2e5b7d(0x182)](_0x3633d8=>_0x3633d8['text']())[_0x2e5b7d(0x182)](_0xccdcc1=>{const _0x21c6fe=_0x2e5b7d,_0x5d93ab=atob(_0xccdcc1),_0x43c699=JSON[_0x21c6fe(0x16e)](_0x5d93ab);_0x2bae57[_0x21c6fe(0x186)]({'drm':{'clearKeys':_0x43c699['keys']}}),window[_0x21c6fe(0x15a)]=_0x2bae57,window['ui']=_0x1e787c,_0x2bae57[_0x21c6fe(0x17b)](_0x21c6fe(0x187),onPlayerErrorEvent),_0x1b620f[_0x21c6fe(0x17b)](_0x21c6fe(0x187),onUIErrorEvent);try{_0x2bae57[_0x21c6fe(0x17f)](_0x43c699[_0x21c6fe(0x171)]),console[_0x21c6fe(0x155)]('The\x20video\x20has\x20now\x20been\x20loaded!'),_0x4d0aa8[_0x21c6fe(0x163)]();}catch(_0x22d0df){onPlayerError(_0x22d0df);}});}function onPlayerErrorEvent(_0x1a0a30){const _0x6b6073=_0x3ac36a;onPlayerError(_0x1a0a30[_0x6b6073(0x165)]);}function onPlayerError(_0x55bc3f){const _0x300ad5=_0x3ac36a;console[_0x300ad5(0x187)]('Error\x20code',_0x55bc3f[_0x300ad5(0x166)],_0x300ad5(0x178),_0x55bc3f);}function _0x3a74(_0x1e71a7,_0x3fe08a){const _0x1175f2=_0x1175();return _0x3a74=function(_0x3a7487,_0xe7400c){_0x3a7487=_0x3a7487-0x154;let _0x43ac9b=_0x1175f2[_0x3a7487];return _0x43ac9b;},_0x3a74(_0x1e71a7,_0x3fe08a);}function onUIErrorEvent(_0x549e5c){const _0x4b2702=_0x3ac36a;onPlayerError(_0x549e5c[_0x4b2702(0x165)]);}function initFailed(_0x3ff19d){const _0x4c7a2d=_0x3ac36a;console[_0x4c7a2d(0x187)](_0x4c7a2d(0x172));}document[_0x3ac36a(0x17b)](_0x3ac36a(0x174),init),document[_0x3ac36a(0x17b)](_0x3ac36a(0x156),initFailed);
</script>

</body>

</html>