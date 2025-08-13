<?php
$alterar_status = DB::conn()->prepare("UPDATE usuarios SET Status ='0',ip2 = '', Tempo_Auto = '0000/00/00 00:00:00',Tempo_Penalti = '0000/00/00 00:00:00', Tempo_Falta = '0000/00/00 00:00:00', penalti = 0, falta = 0, bola1 = 0, bola2 = 0 WHERE ID = ?");
$alterar_status->execute(array($_SESSION['ID']));

unset($_SESSION['ID']);
unset($_SESSION['Usuario']);
session_destroy();
echo '<script>location.href="index.php?pr=index"</script>';

?>