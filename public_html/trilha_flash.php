<?php
// Página simples para incorporar a "trilha/tiro certo" em Flash via Ruffle
// Usamos passe_certo_v6.swf como equivalente de trilha
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Trilha (Flash)</title>
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
  width: 351px;
  height: 416px;
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
    player.style.width = '351px';
    player.style.height = '416px';
    // Alternativamente: 'swf/passe_certo_sorte_v6.swf'
    player.load('swf/passe_certo_v6.swf');
  </script>
</body>
</html>


