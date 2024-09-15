<html>
   <head>
      <meta charset="UTF-8">
      <script src="https://cdn.jsdelivr.net/npm/console-ban@4.1.0/dist/console-ban.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@clappr/player@latest/dist/clappr.min.js"></script>
      <!-- Google tag (gtag.js) -->
      <script src="https://player.twitch.tv/js/embed/v1.js"></script>
   </head>
   <body>
      <main>
         <div class="fullplayer">
            <div class="player">
               <!-- Players -->
               <div class="player" id="playerContainer"></div>
               <!-- JavaScript to control the visibility of video elements -->
               <script>
                  var clapprPlayer;
                  var twitchPlayer;
                  var activePlayer;
                  
                  function showPlayer(playerType, stream) {
                      if (activePlayer === "twitch" && twitchPlayer) {
                          twitchPlayer.pause();
                      } else if (activePlayer === "clappr" && clapprPlayer) {
                          clapprPlayer.stop();
                      }
                  
                      activePlayer = playerType;
                      var container = document.getElementById("playerContainer");
                  
                      if (playerType === "clappr") {
                          container.innerHTML = ""; // Clear container
                          clapprPlayer = new Clappr.Player({
                              source: stream,
                              parentId: "#playerContainer",
                              height: 360,
                              width: "100%",
                              disableVideoTagContextMenu: false,
                          });
                      } else if (playerType === "twitchalt2") {
                          container.innerHTML = '<iframe id="twitchPlayer" src="https://mcdn.mrgamingstreams.com/foxd.m3u8" frameborder="0" allow="autoplay" allowfullscreen="true" width="100%"></iframe>';
                      }
                      
                      
                  }
                  
                  // Automatically load the Clappr player on page load
                  window.onload = function() {
                      showPlayer('clappr', 'https://mcdn.mrgamingstreams.com/star.m3u8'); // Default stream
                  };
               </script>
            </div>
         </div>
      </main>
   </body>
</html>