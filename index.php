<html>

    <head>
        <title>QRCode decode</title>
        <style type="text/css">
            body{
                width:100%;
                text-align:center;
            }
            img{
                border:0;
            }
            #main{
                margin: 15px auto;
                background:white;
                overflow: auto;
                width: 100%;
            }
            #header{
                background:white;
                margin-bottom:15px;
            }
            #mainbody{
                background: white;
                width:100%;
                display:none;
            }
            #footer{
                background:white;
            }
            #v{
                width:320px;
                height:240px;
            }
            #qr-canvas{
                display:none;
            }
            #qrfile{
                width:320px;
                height:240px;
            }
            #mp1{
                text-align:center;
                font-size:35px;
            }
            #imghelp{
                position:relative;
                left:0px;
                top:-160px;
                z-index:100;
                font:18px arial,sans-serif;
                background:#f0f0f0;
                margin-left:35px;
                margin-right:35px;
                padding-top:10px;
                padding-bottom:10px;
                border-radius:20px;
            }
            .selector{
                margin:0;
                padding:0;
                cursor:pointer;
                margin-bottom:-5px;
            }
            #outdiv
            {
                width:320px;
                height:240px;
                border: solid;
                border-width: 3px 3px 3px 3px;
            }
            #result{
                border: solid;
                border-width: 1px 1px 1px 1px;
                padding:20px;
                width:70%;
            }

            ul{
                margin-bottom:0;
                margin-right:40px;
            }
            li{
                display:inline;
                padding-right: 0.5em;
                padding-left: 0.5em;
                font-weight: bold;
                border-right: 1px solid #333333;
            }
            li a{
                text-decoration: none;
                color: black;
            }

            #footer a{
                color: black;
            }
            .tsel{
                padding:0;
            }
        </style>
        <script type="text/javascript" src="webqr.js"></script>
        <script type="text/javascript" src="llqrcode.js"></script>
        <script type="text/javascript">
            function timedMsg()
                {
                setwebcam();
                var t=setTimeout("timedMsg()",3000);
                }       
        </script>
    </head>

    <body onload="timedMsg()">

        <div id="main">
            <p id="mp1">QRCode Decode</p>
            <div id="mainbody" style="display: inline;">
                <table class="tsel" border="0" width="100%">
                    <tbody>
                        <tr>
                            <td valign="top" align="center" width="50%">
                                <table class="tsel" border="0">
                                    <tbody>
                                        <tr>
                                            <td><img class="selector" id="webcamimg" src="vid.png" onclick="setwebcam()" align="left" style="opacity: 1;"></td>
                                            <td><img class="selector" id="qrimg" src="cam.png" onclick="setimg()" align="right" style="opacity: 0.2;"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center"><div id="outdiv"><video id="v" autoplay=""></video></div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <div id="result">- scanning -</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
        </div>

        <canvas id="qr-canvas" width="800" height="600" style="width: 800px; height: 600px;"></canvas>
        <script type="text/javascript">load();</script>
    </body>
</html>










