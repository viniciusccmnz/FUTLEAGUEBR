<?php
session_start();
include_once("../../paginas/conn.php");

// Verificar se o usuário está logado
if(!isset($_SESSION['ID'])) {
    header("Location: ../../index.php");
    exit;
}

// Buscar informações do usuário
$user_id = $_SESSION['ID'];
$query = DB::conn()->prepare("SELECT ID, Tempo_Trilha, trilha, bola3, hab_trilha, uso_bless_trilha FROM usuarios WHERE ID = ?");
$query->execute(array($user_id));
$user = $query->fetch();

// Verificar se pode jogar trilha
$pode_jogar = false;
if($user['trilha'] == 1) {
    $pode_jogar = true;
} else {
    // Verificar se o tempo já expirou
    $tempo_atual = time();
    $tempo_trilha = strtotime($user['Tempo_Trilha']);
    if($tempo_atual >= $tempo_trilha) {
        $pode_jogar = true;
    }
}

// Verificar se tem bless ativo
$bless_ativo = 0;
if($user['uso_bless_trilha'] && strtotime($user['uso_bless_trilha']) > time()) {
    $bless_ativo = 1;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilha - FutLeagueBR</title>
    <link rel="stylesheet" href="media/css/style3.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: transparent;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .game-wrapper {
            text-align: center;
        }
        .game-container {
            
        }
        .wait-message {
            color: #fff;
            font-size: 18px;
            margin: 20px;
            padding: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
        }
        .timer {
            color: #fff;
            font-size: 20px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="game-wrapper">
            <?php if($pode_jogar): ?>
                <div class="game-container">
                    <div id="ap_trilha">
                        <div id="f_trilha">
                            <div id="gol" style="display:none;">GOOOOL!!!</div>
                            <div id="errou" style="display:none;">ERROUU!!!</div>
                            
                            <!-- Zaga -->
                            <div id="fz1">
                                <div id="fundozaga">
                                    <div id="z1" onclick="z1();"></div>
                                </div>
                                <input type="hidden" name="acao" value="0" id="z1t">
                                <div class="b1" style="display:none;position:absolute;top:249px;left:21px;"></div>
                            </div>
                            
                            <div id="fz2">
                                <div id="fundozaga2">
                                    <div id="z2" onclick="z2();"></div>
                                </div>
                                <div class="b2" style="display:none;position:absolute;top:281px;left:77px;"></div>
                                <input type="hidden" value="0" id="z2t">
                            </div>
                            
                            <div id="fz3">
                                <div id="fundozaga3">
                                    <div id="z3" onclick="z3();"></div>
                                </div>
                                <div class="b3" style="display:none;position:absolute;top:281px;left:139px;"></div>
                                <input type="hidden" value="0" id="z3t">
                            </div>
                            
                            <div id="fz4">
                                <div id="fundozaga4">
                                    <div id="z4" onclick="z4();"></div>
                                </div>
                                <div class="b4" style="display:none;position:absolute;top:249px;left:195px;"></div>
                                <input type="hidden" value="0" id="z4t">
                            </div>
                            
                            <!-- Meio -->
                            <div id="fm1">
                                <div id="fundomeio">
                                    <div id="m1"></div>
                                </div>
                                <div class="b5" style="display:none;position:absolute;top:174px;left:21px;"></div>
                            </div>
                            
                            <div id="fm2">
                                <div id="fundomeio2">
                                    <div id="m2"></div>
                                </div>
                                <div class="b6" style="display:none;position:absolute;top:149px;left:77px;"></div>
                            </div>
                            
                            <div id="fm3">
                                <div id="fundomeio3">
                                    <div id="m3"></div>
                                </div>
                                <div class="b7" style="display:none;position:absolute;top:149px;left:140px;"></div>
                            </div>
                            
                            <div id="fm4">
                                <div id="fundomeio4">
                                    <div id="m4"></div>
                                </div>
                                <div class="b8" style="display:none;position:absolute;top:174px;left:195px;"></div>
                            </div>
                            
                            <!-- Área -->
                            <div id="fa1">
                                <div id="fundoarea">
                                    <div id="a1"></div>
                                </div>
                                <div class="b9" style="display:none;position:absolute;top:68px;left:49px;"></div>
                            </div>
                            
                            <div id="fa2">
                                <div id="fundoarea2">
                                    <div id="a2"></div>
                                </div>
                                <div class="b10" style="display:none;position:absolute;top:68px;left:167px;"></div>
                            </div>
                            
                            <div id="fa3">
                                <div id="fundoarea3">
                                    <div id="a3"></div>
                                </div>
                                <div class="b11" style="display:none;position:absolute;top:45px;left:108px;"></div>
                            </div>
                            
                            <!-- Tempo e Aguarde -->
                            <div class="time_trilha"></div>
                            <div class="aguarde" style="display:none;position:absolute;top:3px;left:91px;">Aguarde...</div>
                            
                            <!-- Jogador e Bola -->
                            <div id="player">
                                <div id="bola"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Campos hidden para dados do jogo -->
                <input type="hidden" id="ctrilha" value="1">
                <input type="hidden" id="habilidade_trilha" value="<?php echo $user['hab_trilha'] ?? 0; ?>">
                <input type="hidden" id="habilidade_t" value="<?php echo $user['hab_trilha'] ?? 0; ?>">
                <input type="hidden" id="bless_ativo" value="<?php echo $bless_ativo; ?>">
                
            <?php else: ?>
                <div class="wait-message">
                    <div>⏰ Aguarde para jogar trilha novamente!</div>
                    <?php if($user['Tempo_Trilha']): ?>
                        <div class="timer">
                            Próximo jogo em: <span id="countdown"></span>
                        </div>
                        <script>
                            // Countdown para o próximo jogo
                            var endTime = new Date("<?php echo $user['Tempo_Trilha']; ?>").getTime();
                            
                            var x = setInterval(function() {
                                var now = new Date().getTime();
                                var distance = endTime - now;
                                
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                
                                document.getElementById("countdown").innerHTML = 
                                    hours + "h " + minutes + "m " + seconds + "s";
                                
                                if (distance < 0) {
                                    clearInterval(x);
                                    location.reload();
                                }
                            }, 1000);
                        </script>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    
    <?php if($pode_jogar): ?>
        <script src="nova_trilha.js"></script>
        
        <script>
            // Função para redirecionar após animação completa
            function redirecionarAposAnimacao() {
                setTimeout(function() {
                    // Redirecionar para a página inicial após 3 segundos
                    window.parent.location.href = '../../index.php';
                }, 3000);
            }
            
            // Sobrescrever as funções de comemoração para adicionar redirecionamento
            $(document).ready(function() {
                // Interceptar quando a animação de gol ou erro é mostrada
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                            const addedNodes = Array.from(mutation.addedNodes);
                            addedNodes.forEach(function(node) {
                                // Verificar se é uma mensagem de gol ou erro
                                if (node.textContent && (node.textContent.includes('GOOOOL') || node.textContent.includes('ERROUU'))) {
                                    // Animação de gol ou erro foi mostrada, iniciar redirecionamento
                                    redirecionarAposAnimacao();
                                }
                            });
                        }
                    });
                });
                
                // Observar mudanças no documento
                observer.observe(document.body, { childList: true, subtree: true });
                
                // Também verificar mudanças de estilo nos elementos de gol/erro
                const observerStyle = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                            const gol = document.getElementById('gol');
                            const errou = document.getElementById('errou');
                            
                            if ((gol && gol.style.display !== 'none') || (errou && errou.style.display !== 'none')) {
                                // Gol ou erro foi mostrado, iniciar redirecionamento
                                redirecionarAposAnimacao();
                            }
                        }
                    });
                });
                
                const gol = document.getElementById('gol');
                const errou = document.getElementById('errou');
                
                if (gol) observerStyle.observe(gol, { attributes: true });
                if (errou) observerStyle.observe(errou, { attributes: true });
            });
        </script>
    <?php endif; ?>
</body>
</html>
