<?php
// Placeholder para Falta (Flash)
// Não há swf de falta no projeto atual. Se for adicionado (ex.: swf/falta_vX.swf), basta trocar o player.load abaixo.
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Falta (Flash)</title>
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
.warn{font-family: Arial, Helvetica, sans-serif; color:#333; font-size:14px;}
</style>
</head>
<body>
  <div class="wrap">
    <div id="player" class="warn">Nenhum arquivo de Falta em Flash foi encontrado no projeto.</div>
  </div>
  <script>
    // Quando houver um SWF de falta, descomente abaixo e aponte para o caminho correto
    // window.RufflePlayer = window.RufflePlayer || {};
    // const ruffle = window.RufflePlayer.newest();
    // const player = ruffle.createPlayer();
    // const host = document.getElementById('player');
    // host.innerHTML = '';
    // host.appendChild(player);
    // player.style.width = '450px';
    // player.style.height = '338px';
    // player.load('swf/falta_v1.swf');
  </script>
</body>
</html>


