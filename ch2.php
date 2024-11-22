<html>
<head>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@clappr/player@latest/dist/clappr.min.js"></script>

    <style type="text/css">
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }

        #player-wrapper {
            position: relative;
            width: 100%;
            max-width: 100%;
            padding-top: 56.25%; /* Mantener relación de aspecto 16:9 */
        }

        #player {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #poster-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://d10xsoss226fg9.cloudfront.net/5Sd1MnfA80X5idhqrOnT6vs8wR2ebedj/B05C552148D643158A8AD703B26331CC/il/dbc8bbe6cee8426c987103b0dc0d3346/play-1696001250042.png') no-repeat center center;
            background-size: cover;
            z-index: 10;
            cursor: pointer; /* Aparece como un botón */
        }

        .unauthorized-message {
            font-size: 24px;
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="player-wrapper">
        <div id="poster-overlay" onclick="playVideo()"></div> <!-- Hacer clic para iniciar video -->
        <div id="player"></div>
    </div>
    <div class="unauthorized-message" id="unauthorized-message" style="display:none;">Acceso no autorizado.</div>

    <script>
        var allowedDomain = "golbolivia.com";
        var referrer = document.referrer;
        var player;

        if (!referrer.includes(allowedDomain)) {
            document.getElementById('unauthorized-message').style.display = 'block';
            
            setTimeout(function() {
                window.location.href = 'https://golbolivia.com';
            }, 0000);
        } else {
            // Inicializar el reproductor sin autoPlay
            player = new Clappr.Player({
                source: "https://customer-k3o6smjhdflbzrpt.cloudflarestream.com/1328b4d889948c59ebc51790f9d5acfc/manifest/video.m3u8",
                parentId: "#player",
                width: '100%',
                height: '100%',
                autoPlay: false,
                mute: true
            });
        }

        // Función para ocultar el póster y reproducir el video
        function playVideo() {
            document.getElementById('poster-overlay').style.display = 'none'; // Ocultar el póster
            player.play(); // Reproducir el video
        }
    </script>
</body>
</html>
