//copyright PTGOL - TODOS OS DIREITOS RESERVADOS
//PLÁGIO SUJEITO A COBRANÇA NA JUSTIÇA

var status_nerfar = 0;
var chutou = false;
var audio_gol = null;
var result = '';

// SISTEMA DE VALIDAÇÃO PARA FALTA - REPLICANDO COMPORTAMENTO DO PENALTI
// Variável global para controlar disponibilidade da falta
var falta_disponivel = false; // Começa como false (usuário logado, falta indisponível)

// Função para verificar se a falta está disponível antes de acessar
function verificarFaltaDisponivel() {
    if (!falta_disponivel) {
        console.log("🚫 Falta indisponível, redirecionando para página principal");
        return false; // Impede o acesso à falta
    }
    console.log("✅ Falta disponível, permitindo acesso");
    return true; // Permite o acesso à falta
}

// Função para liberar a falta (chamada quando cronômetro zera)
function liberarFalta() {
    console.log("🔄 DEBUG - Alterando falta_disponivel de", falta_disponivel, "para true");
    falta_disponivel = true;
    console.log("🔓 Falta liberada! Variável definida como:", falta_disponivel);
    console.log("📊 Status atual: falta_disponivel =", falta_disponivel);
}

// Função para bloquear a falta (chamada quando usuário chuta)
function bloquearFalta() {
    console.log("🔄 DEBUG - Alterando falta_disponivel de", falta_disponivel, "para false");
    falta_disponivel = false;
    console.log("🔒 Falta bloqueada após chute! Variável definida como:", falta_disponivel);
    console.log("📊 Status atual: falta_disponivel =", falta_disponivel);
}

// Função para verificar estado atual (debug)
function verificarEstadoFalta() {
    console.log("📊 Estado atual da falta:");
    console.log("falta_disponivel:", falta_disponivel);
    console.log("Tipo:", typeof falta_disponivel);
}

// Log automático do status inicial quando a página carrega
$(document).ready(function() {
    console.log("🚀 DEBUG - Página de falta carregada, status inicial:");
    console.log("📊 falta_disponivel =", falta_disponivel);
    console.log("📊 Tipo da variável:", typeof falta_disponivel);
    console.log("📊 Valor booleano:", Boolean(falta_disponivel));
    
    // Verificar se o cronômetro já está zerado e liberar a falta
    var tempo_restante_falta = document.getElementById('tempo_restante_falta');
    if (tempo_restante_falta) {
        var tempo_valor = tempo_restante_falta.value;
        console.log("⏰ Tempo restante da falta na inicialização:", tempo_valor);
        
        // Verificar se o tempo já zerou (formato "00:00" ou "0:0")
        if (tempo_valor === "00:00" || tempo_valor === "0:0" || tempo_valor === "0") {
            console.log("⏰ Cronômetro já zerado na inicialização! Liberando falta...");
            liberarFalta();
        }
    }
    
    try {
        audio_gol = document.getElementById('gol-audio');
        goleiro();
        
        // Configurar o status VIP
        status_nerfar = document.getElementById("status_nerfar") ? document.getElementById("status_nerfar").value : 0;
        console.log("Status VIP:", status_nerfar);
        
    } catch(e) {
        console.log("Erro na inicialização:", e);
    }
});

// Expor funções globalmente  
window.falta_esquerda = falta_esquerda;
window.falta_meio = falta_meio;
window.falta_direita = falta_direita;

// Expor funções de validação globalmente
window.verificarFaltaDisponivel = verificarFaltaDisponivel;
window.liberarFalta = liberarFalta;
window.bloquearFalta = bloquearFalta;
window.verificarEstadoFalta = verificarEstadoFalta;

function gol1_direita(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-direita');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function gol2_direita(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando_direita_2');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-direita-2');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function errou1_direita(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando_direita_3');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-direita-3');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 300);
}

function errou2_direita(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando_direita_4');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-direita-4');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 300);
}

// Funções principais de chute
function falta_direita() {
    // Bloquear a falta após o chute
    bloquearFalta();
    
    if (chutou) return;
    
    var habilidade = $("#habilidade").val();
    var habilidade_falta = $("#habilidade_falta").val();
    var type_c = Math.floor(Math.random() * 2);
    var Sorte = Math.floor(Math.random() * 10);
    
    if(habilidade == 5){
        if(habilidade_falta == 1){
            if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                gols01();
                if(type_c == 0){
                    gol1_direita();
                }else if(type_c == 1){
                    gol2_direita();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou1_direita();
                }else if(type_c == 1){
                    errou2_direita();
                }
            }
        }else{
            if(Sorte == 0 || Sorte == 1){
                gols01();
                if(type_c == 0){
                    gol1_direita();
                }else if(type_c == 1){
                    gol2_direita();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou1_direita();
                }else if(type_c == 1){
                    errou2_direita();
                }
            }
        }
    }
}

function falta_esquerda() {
    // Bloquear a falta após o chute
    bloquearFalta();
    
    if (chutou) return;
    
    var habilidade = $("#habilidade").val();
    var habilidade_falta = $("#habilidade_falta").val();
    var type_c = Math.floor(Math.random() * 2);
    var Sorte = Math.floor(Math.random() * 10);
    
    if(habilidade == 5){
        if(habilidade_falta == 1){
            if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                gols01();
                if(type_c == 0){
                    gol1_esquerda();
                }else if(type_c == 1){
                    gol2_esquerda();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou2_esquerda();
                }else if(type_c == 1){
                    errou2_esquerda();
                }
            }
        }else{
            if(Sorte == 0 || Sorte == 1){
                gols01();
                if(type_c == 0){
                    gol1_esquerda();
                }else if(type_c == 1){
                    gol2_esquerda();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou2_esquerda();
                }else if(type_c == 1){
                    errou2_esquerda();
                }
            }
        }
    }
}

function falta_meio() {
    // Bloquear a falta após o chute
    bloquearFalta();
    
    if (chutou) return;
    
    var habilidade = $("#habilidade").val();
    var habilidade_falta = $("#habilidade_falta").val();
    var type_c = Math.floor(Math.random() * 2);
    var Sorte = Math.floor(Math.random() * 10);
    
    if(habilidade == 5){
        if(habilidade_falta == 1){
            if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                gols01();
                if(type_c == 0){
                    gol1_meio();
                }else if(type_c == 1){
                    gol2_meio();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou1_meio();
                }else if(type_c == 1){
                    errou2_meio();
                }
            }
        }else{
            if(Sorte == 0 || Sorte == 1){
                gols01();
                if(type_c == 0){
                    gol1_meio();
                }else if(type_c == 1){
                    gol2_meio();
                }
            }else{
                errous01();
                if(type_c == 0){
                    errou1_meio();
                }else if(type_c == 1){
                    errou2_meio();
                }
            }
        }
    }
}

function gol1_esquerda(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    goleiro_perto();
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-esquerda');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-esquerda');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function gol2_esquerda(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    goleiro_perto();
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-esquerda-2');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-esquerda-2');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function errou1_esquerda(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    goleiro_perto();
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-esquerda-3');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-esquerda-3');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 300);
}

function errou2_esquerda(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    goleiro_perto();
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-esquerda-4');
    pular_barreira();
    if(goleiro) goleiro.classList.add('goleiro-pulando-esquerda-4');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 300);
}

function gol1_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio');
    if(goleiro) goleiro.classList.add('goleiro-parado');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function gol2_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio-2');
    if(goleiro) goleiro.classList.add('goleiro-parado');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function gol3_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio-3');
    if(goleiro) goleiro.classList.add('goleiro-parado');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function gol4_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio-4');
    if(goleiro) goleiro.classList.add('goleiro-parado');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    chutou = true;
    result = 'gol';
}

function errou1_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio-3');
    if(goleiro) goleiro.classList.add('goleiro-pulando-meio-3');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 100);
}

function errou2_meio(){
    var chute = document.querySelectorAll('.chute');
    chute.forEach(function (element) {
        element.style.display = 'none';
    });
    var bola = document.querySelector('.bola');
    var goleiro = document.getElementById('goleiro');
    var audio = document.getElementById('chute-audio');
    var som_falta = $("#som_falta").val();
    
    if(som_falta == 1 && audio){
        audio.play();
    }
    
    setTimeout(function () {
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
    }, 300);
    
    if(bola) bola.src = 'img/rodando.gif';
    if(bola) bola.classList.add('chutando-meio-4');
    if(goleiro) goleiro.classList.add('goleiro-pulando-meio-4');
    if(bola) bola.addEventListener('animationend', stopAnimation);
    result = 'errou';
    chutou = true;
    
    setTimeout(function () {
        var goleiro = document.getElementById('goleiro');
        if(goleiro) goleiro.style.backgroundImage = "url('img/goleiro_pegou.png')";
    }, 100);
}

function gols01() {
    $.ajax({
        url: "retorno4.php",
        data: "id=1",
        type: "POST",
        cache: false,
        success: function(data) {
            // Success
        }
    });
    
    setTimeout(function() {
        $.ajax({
            url: "chutar_falta.php",
            data: "id=1",
            type: "POST",
            cache: false
        });
    }, 1500);
}

function errous01() {
    $.ajax({
        url: "retorno5.php", 
        data: "id=1",
        type: "POST",
        cache: false,
        success: function(data) {
            // Success
        }
    });
}

function stopAnimation(event) {
    var bola = event.target;
    var audio = document.getElementById('chute-audio');
    var fundo_gol = document.getElementById('goool');
    var fundo_f = document.getElementById('fundo_f');
    var goleiro = document.getElementById('goleiro');
    var fundo_gol_conteudo = document.getElementById('conteudo_gol');
    var tente = document.getElementById('tente');
    var novamente = document.getElementById('novamente');

    if (result === 'gol') {
        if(fundo_gol) fundo_gol.style.flexDirection = 'row';
        if(bola) bola.src = 'img/bola.png';
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
        if(fundo_f) fundo_f.style.display = 'none';
        if(fundo_gol) fundo_gol.style.display = 'flex';
        
        if(audio_gol) {
            audio_gol.currentTime = 6;
            audio_gol.volume = 0.5;
            audio_gol.play();
        }
        
        // Mensagem de gol igual ao penalti (imagem em vez de texto)
        if(fundo_gol_conteudo) {
            fundo_gol_conteudo.style.backgroundImage = "url('img/gol.gif')";
            fundo_gol_conteudo.style.backgroundSize = 'contain';
            fundo_gol_conteudo.style.backgroundRepeat = 'no-repeat';
            fundo_gol_conteudo.style.backgroundPosition = 'center';
            fundo_gol_conteudo.style.width = '100%';
            fundo_gol_conteudo.style.height = '100%';
        }
        
        parar_barreira();

        // Após mostrar o gol, voltar para a tela principal (igual ao penalti)
        setTimeout(() => {
            if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
            if(audio_gol) {
                audio_gol.pause();
                audio_gol.currentTime = 0;
            }
            
            // Voltar para a tela principal (igual ao penalti)
            if(fundo_gol) fundo_gol.style.display = 'none';
            if(fundo_f) fundo_f.style.display = 'block';
            
            // Resetar elementos do jogo
            if(bola) bola.className = 'bola';
            if(goleiro) {
                goleiro.className = '';
                goleiro.style.backgroundImage = "url(img/parado.gif)";
            }
            
            // Mostrar setas de chute novamente
            var chute = document.querySelectorAll('.chute');
            chute.forEach(function (element) {
                element.style.display = 'block';
            });
            
            // Resetar APENAS o cronômetro da falta (não afeta outros jogos)
            // resetarTempoChute(); // Removido
            chutou = false;
        }, 3000); // 3 segundos para mostrar o gol (igual ao penalti)

    } else if (result === 'errou') {
        var audio_vaia = document.getElementById('vaia');
        
        if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
        if(fundo_gol) fundo_gol.style.flexDirection = 'column';
        if(bola) bola.src = 'img/bola.png';
        if(audio) {
            audio.pause();
            audio.currentTime = 0;
        }
        if(fundo_f) fundo_f.style.display = 'none';
        if(fundo_gol) fundo_gol.style.display = 'flex';
        
        if(audio_vaia) {
            audio_vaia.volume = 0.5;
            audio_vaia.play();
        }
        
        // Mensagem de erro igual ao penalti (imagem em vez de texto)
        if(fundo_gol_conteudo) {
            fundo_gol_conteudo.style.backgroundImage = "url('img/errou.gif')";
            fundo_gol_conteudo.style.backgroundSize = 'contain';
            fundo_gol_conteudo.style.backgroundRepeat = 'no-repeat';
            fundo_gol_conteudo.style.backgroundPosition = 'center';
            fundo_gol_conteudo.style.width = '100%';
            fundo_gol_conteudo.style.height = '100%';
        }

        // Após mostrar o erro, voltar para a tela principal (igual ao penalti)
        setTimeout(() => {
            if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
            if(audio_vaia) {
                audio_vaia.pause();
                audio_vaia.currentTime = 0;
            }
            
            // Voltar para a tela principal (igual ao penalti)
            if(fundo_gol) fundo_gol.style.display = 'none';
            if(fundo_f) fundo_f.style.display = 'block';
            
            // Resetar elementos do jogo
            if(bola) bola.className = 'bola';
            if(goleiro) {
                goleiro.className = '';
                goleiro.style.backgroundImage = "url(img/parado.gif)";
            }
            
            // Mostrar setas de chute novamente
            var chute = document.querySelectorAll('.chute');
            chute.forEach(function (element) {
                element.style.display = 'block';
            });
            
            // Resetar APENAS o cronômetro da falta (não afeta outros jogos)
            // resetarTempoChute(); // Removido
            chutou = false;
        }, 3000); // 3 segundos para mostrar o erro (igual ao penalti)
    }
}

function goleiro() {
    var goleiro = document.getElementById('goleiro');
    if(!goleiro) return;
    
    var goleiro_parado = false;
    var interval = setInterval(function () {
        if (goleiro_parado) {
            goleiro.style.backgroundImage = "url(img/DEFESA-MEIO.gif)";
            goleiro_parado = false;
        } else {
            goleiro.style.backgroundImage = "url(img/lacanco.gif)";
            goleiro_parado = true;
        }
    }, 2000);

    if(goleiro) {
        goleiro.addEventListener('animationstart', function () {
            clearInterval(interval);
        });

        goleiro.addEventListener('animationend', function () {
            interval = setInterval(function () {
                if (goleiro_parado) {
                    goleiro.style.backgroundImage = "url(img/DEFESA-MEIO.gif)";
                    goleiro_parado = false;
                } else {
                    goleiro.style.backgroundImage = "url(img/lacanco.gif)";
                    goleiro_parado = true;
                }
            }, 2000);
        });
    }
}

function pular_barreira() {
    var barreira = document.getElementById('barreira');
    if(barreira) barreira.style.backgroundImage = "url(img/barreira.gif)";
}

function parar_barreira() {
    var barreira = document.getElementById('barreira');
    if(barreira) barreira.style.backgroundImage = "url('img/barreira_parado.png')";
}

function goleiro_perto() {
    var goleiro = document.getElementById('goleiro');
    if(goleiro) goleiro.style.backgroundImage = "url(img/lacanco.gif)";
}

function ajaxGet(arquivo, funcaoRetorno, assincrono) {
    $.ajax({
        url: arquivo,
        type: "GET",
        cache: false,
        async: assincrono,
        success: function(data) {
            eval(funcaoRetorno + " = '" + data + "'");
        }
    });
}


