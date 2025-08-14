//copyright PTGOL - TODOS OS DIREITOS RESERVADOS
//PLÁGIO SUJEITO A COBRANÇA NA JUSTIÇA

var status_nerfar = 0;
var chutou = false;
var audio_gol = null;
var result = '';

$(document).ready(function() {
    try {
        status_nerfar = document.getElementById("status_nerfar") ? document.getElementById("status_nerfar").value : 0;
        audio_gol = document.getElementById('gol-audio');
        goleiro();
        setInterval(function() { chutou = false; }, 3000);
    } catch(e) {
        console.log("Erro na inicialização:", e);
    }
});

// Expor funções globalmente  
window.falta_esquerda = falta_esquerda;
window.falta_meio = falta_meio;
window.falta_direita = falta_direita;

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
    if (chutou) return;
    gols01();
    gol1_esquerda();
}

function falta_meio() {
    if (chutou) return;
    gols01();
    gol1_meio();
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
        
        var text = 'GOOOOOL';
        if(tente) tente.innerHTML = '';
        if(novamente) novamente.innerHTML = '';
        if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
        
        parar_barreira();
        
        text.split('').forEach((letter, index) => {
            var span = document.createElement('span');
            span.textContent = letter;
            span.style.animationDelay = `${index * 0.1}s`;
            if(fundo_gol_conteudo) fundo_gol_conteudo.appendChild(span);
        });

        setTimeout(() => {
            if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
            if(audio_gol) {
                audio_gol.pause();
                audio_gol.currentTime = 0;
            }
            if(fundo_gol) fundo_gol.style.display = 'none';
            if(fundo_f) fundo_f.style.display = 'block';
            if(bola) bola.className = 'bola';
            if(goleiro) {
                goleiro.className = '';
                goleiro.style.backgroundImage = "url(img/parado.gif)";
            }
            
            var chute = document.querySelectorAll('.chute');
            chute.forEach(function (element) {
                element.style.display = 'block';
            });
            chutou = false;
        }, 2000);

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
        if(novamente) novamente.style.display = 'flex';
        
        if(audio_vaia) {
            audio_vaia.volume = 0.5;
            audio_vaia.play();
        }
        
        if(tente) tente.innerHTML = '';
        if(novamente) novamente.innerHTML = '';
        
        var text2 = 'ERROOOOU';
        var text3 = 'TENTE NOVAMENTE';
        
        text2.split('').forEach((letter, index) => {
            var span = document.createElement('span');
            span.textContent = letter;
            span.style.animationDelay = `${index * 0.1}s`;
            if(tente) tente.appendChild(span);
            });
        
        text3.split('').forEach((letter, index) => {
            var span = document.createElement('span');
            span.textContent = letter;
            span.style.animationDelay = `${index * 0.1}s`;
            if(novamente) novamente.appendChild(span);
        });

        setTimeout(() => {
            if(fundo_gol_conteudo) fundo_gol_conteudo.innerHTML = '';
            if(audio_vaia) {
                audio_vaia.pause();
                audio_vaia.currentTime = 0;
            }
            if(fundo_gol) fundo_gol.style.display = 'none';
            if(fundo_f) fundo_f.style.display = 'block';
            if(bola) bola.className = 'bola';
            if(goleiro) {
                goleiro.className = '';
                goleiro.style.backgroundImage = "url(img/parado.gif)";
            }
            
            var chute = document.querySelectorAll('.chute');
            chute.forEach(function (element) {
                element.style.display = 'block';
            });
            chutou = false;
        }, 2000);
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
