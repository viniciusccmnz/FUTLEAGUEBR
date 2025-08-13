<?php
// Página simples para incorporar o pênalti em Flash via Ruffle
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Penalty (Flash)</title>
<script src="https://unpkg.com/@ruffle-rs/ruffle"></script>
<style>
html, body {
  margin: 0;
  padding: 0;
  background: transparent;
  height: 100%;
}
.wrap {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
#player {
  width: 450px;
  height: 338px;
}
</style>
</head>
<body>
  <div class="wrap">
    <div id="player"></div>
  </div>
  <script>
    window.RufflePlayer = window.RufflePlayer || {};
    const ruffle = window.RufflePlayer.newest();
    const player = ruffle.createPlayer();
    document.getElementById('player').appendChild(player);
    player.style.width = '450px';
    player.style.height = '338px';
    player.load('swf/penalti_v6.swf');
  </script>
</body>
</html>


