
//copyright PTGOL - TODOS OS DIREITOS RESERVADOS
function ajaxGet(url,_expr,_cache){fetch(url).then(r=>r.text()).then(html=>{try{if(url.indexOf('get_info')!==-1){var t=document.getElementById('base_user');if(t)t.innerHTML=html;}else{var e=document.getElementById('base_extras');if(e)e.innerHTML=html;}}catch(_e){}}).catch(()=>{});}    

// Variáveis globais
var chutou = false; // Variável para controlar se o chute já foi dado
var status_nerfar = 0;
var audio_gol = null;
var result = '';
var habilidade = 5;
var som_falta = 0;
var cfalta = 2973;
var habilidade_falta = 0;

// Força reset inicial
setTimeout(function() { chutou = false; }, 100);

// Inicialização após DOM carregar
document.addEventListener('DOMContentLoaded', function() {
    status_nerfar = (document.getElementById("status_nerfar")||{}).value || 0;
    audio_gol = document.getElementById('gol-audio');
    var habilidadeEl = document.getElementById("habilidade");
    var somFaltaEl = document.getElementById("som_falta");
    var cfaltaEl = document.getElementById("cfalta");
    var habilidadeFaltaEl = document.getElementById("habilidade_falta");
    
    if (habilidadeEl) habilidade = habilidadeEl.value;
    if (somFaltaEl) som_falta = somFaltaEl.value;
    if (cfaltaEl) cfalta = cfaltaEl.value;
    if (habilidadeFaltaEl) habilidade_falta = habilidadeFaltaEl.value;
});

// FUNÇÕES GLOBAIS DE CHUTE
function falta_esquerda() {
    console.log("Clicou esquerda, chutou:", chutou);
    if (chutou) {
        console.log("Chute bloqueado");
        return;
    }
    chutou = true;
    console.log("Executando falta_esquerda");
    alert("Falta esquerda funcionou!");
    setTimeout(function() { chutou = false; }, 2000);
}

function falta_meio() {
    console.log("Clicou meio, chutou:", chutou);
    if (chutou) {
        console.log("Chute bloqueado");
        return;
    }
    chutou = true;
    console.log("Executando falta_meio");
    alert("Falta meio funcionou!");
    setTimeout(function() { chutou = false; }, 2000);
}

function falta_direita() {
    console.log("Clicou direita, chutou:", chutou);
    if (chutou) {
        console.log("Chute bloqueado");
        return;
    }
    chutou = true;
    console.log("Executando falta_direita");
    alert("Falta direita funcionou!");
    setTimeout(function() { chutou = false; }, 2000);
}
        var audio_gol = document.getElementById('gol-audio'); // Áudio do gol
        var result = '';

        var habilidade = $("#habilidade").val();
        var som_falta = $("#som_falta").val();
        var cfalta     = $("#cfalta").val();
        var habilidade_falta     = $("#habilidade_falta").val();

        function gol1_direita(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando'); // Adiciona a classe de animação de chute
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-direita'); // Goleiro pula para a direita
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'gol';
        }
        function gol2_direita(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando_direita_2'); // Adiciona a classe de animação de chute
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-direita-2'); // Goleiro pula para a direita
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'gol';
        }
        function errou1_direita(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando_direita_3'); // Adiciona a classe de animação de chute
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-direita-3'); // Goleiro pula para a direita
                    document.querySelector('.bola')?.classList.add('a-frente');
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    result = 'errou';
                    chutou = true; // Define que o chute foi dado
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 300); // Troca a imagem após 2 segundos

        }
        function errou2_direita(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando_direita_4'); // Adiciona a classe de animação de chute
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-direita-4'); // Goleiro pula para a direita
                    document.querySelector('.bola')?.classList.add('a-frente');
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    result = 'errou';
                    chutou = true; // Define que o chute foi dado
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 300); // Troca a imagem após 2 segundos

                
        }

        function gol1_esquerda (){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    goleiro_perto(); // Troca a imagem do goleiro para "lacanco"
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-esquerda'); // Adiciona a classe de animação de chute para a esquerda
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-esquerda'); // Goleiro pula para a esquerda
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'gol';
        }
        function gol2_esquerda (){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    goleiro_perto(); // Troca a imagem do goleiro para "lacanco"
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-esquerda-2'); // Adiciona a classe de animação de chute para a esquerda
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-esquerda-2'); // Goleiro pula para a esquerda
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'gol';
        }
        function errou1_esquerda (){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-esquerda-3'); // Adiciona a classe de animação de chute para a esquerda
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-esquerda'); // Goleiro pula para a esquerda
                    document.querySelector('.bola')?.classList.add('a-frente');
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'errou';
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 250); // Troca a imagem após 2 segundos
        }
        function errou2_esquerda (){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-esquerda-4'); // Adiciona a classe de animação de chute para a esquerda
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-esquerda-4'); // Goleiro pula para a esquerda
                    document.querySelector('.bola')?.classList.add('a-frente');
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'errou';
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 250); // Troca a imagem após 2 segundos
        }

        function gol1_meio(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-meio'); // Adiciona a classe de animação de chute para o meio
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-meio'); // Goleiro pula para o meio
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    chutou = true; // Define que o chute foi dado
                    result = 'gol';
        }
        function gol2_meio(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    goleiro_perto(); // Troca a imagem do goleiro para "lacanco"
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-meio-2'); // Adiciona a classe de animação de chute para o meio
                    pular_barreira(); // Inicia a animação da barreira
                    goleiro.classList.add('goleiro-pulando-meio-2'); // Goleiro pula para o meio
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    result = 'gol';
                    chutou = true; // Define que o chute foi dado
        }
        function errou1_meio(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    goleiro_perto(); // Troca a imagem do goleiro para "lacanco"
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-meio-3'); // Adiciona a classe de animação de chute para o meio
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-meio-3'); // Goleiro pula para o meio
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    result = 'errou';
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 250); // Troca a imagem após 2 segundos
                    chutou = true; // Define que o chute foi dado
        }
        function errou2_meio(){
            var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'none'; // Desabilita o clique nos elementos de chute
                    });
                    goleiro_perto(); // Troca a imagem do goleiro para "lacanco"
                    var bola = document.querySelector('.bola'); // Seleciona a bola
                    var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                    var audio = document.getElementById('chute-audio'); // Áudio do chute
                    if(som_falta == 1){
                        audio.play(); // Toca o áudio do chute
                    }
                    setTimeout(function () {
                        audio.pause(); // Pausa o áudio do chute após 2 segundos
                        audio.currentTime = 0; // Reinicia o áudio do chute
                    }, 300); // Define o tempo de 2 segundos
                    bola.src = 'falta/rodando.gif'; // Troca a imagem da bola para rodando
                    bola.classList.add('chutando-meio-4'); // Adiciona a classe de animação de chute para o meio
                    pular_barreira(); // Inicia a animação da barreira
                    document.querySelector('.bola')?.classList.add('a-frente');
                    goleiro.classList.add('goleiro-pulando-meio-4'); // Goleiro pula para o meio
                    bola.addEventListener('animationend', stopAnimation); // Adiciona evento para parar a animação
                    result = 'errou';
                    setTimeout(function () {
                        var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                        goleiro.style.backgroundImage = "url(falta/goleiro_pegou.png)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    }, 250); // Troca a imagem após 2 segundos
                    chutou = true; // Define que o chute foi dado
        }
        function falta_direita() {

            if (chutou) {
                return; // Se já chutou, não faz nada
            } else {
                
                function errous01(){
                    //computar errou

           $.ajax({

                method: "POST",

                url: "retorno21.php",

                data: { c:cfalta }

                }).done(function() {

                  ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);
                setTimeout( function(){
                    chutou = true;
                    redrect();
		        }, 400 );

                });

                }

                function gols01(){
                    //computar gols

           $.ajax({

                method: "POST",

                url: "retorno20.php",

                data: { c:cfalta }

                }).done(function() {

                  ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);

                setTimeout( function(){
                    chutou = true;
                    redrect();
		        }, 400 );

                });

                //fim computar gols
                }
                function redrect(){
                    setTimeout( function(){
                    chutou = true;
                    ajaxGet('chutar_extra.php',"document.getElementById('hidden').innerHTML", false);
		        }, 400 );
                }
                
                 //programação
                var type_c = Math.floor(Math.random() * 2);
                var Sorte  = Math.floor(Math.random() * 9); 
                
                if(habilidade == 1){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            gols01();
                           
                            //gol
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }else if(habilidade == 2){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                } else if(habilidade == 3){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }  else if(habilidade == 4){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 5){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }
                else if(habilidade == 6){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 7){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 8){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 9){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 10){
                    if(status_nerfar == 1){
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6 || Sorte == 7){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }
                    }else{
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6 || Sorte == 7){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_direita();
                            }else if(type_c == 1){
                                errou2_direita();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_direita();
                            }else if(type_c == 1){
                                gol2_direita();
                            }

                        }else{
                            //errou
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
                //fim habilidades
            }
        }

        function falta_esquerda() {
            if (chutou) {
                return; // Se já chutou, não faz nada
            } else {

                function errous01(){
                    //computar errou

           $.ajax({

                method: "POST",

                url: "retorno21.php",

                data: { c:cfalta }

                }).done(function() {

                ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);
                setTimeout( function(){
                                redrect();
		        }, 400 );

                });

                }

                function gols01(){
                    //computar gols

           $.ajax({

                method: "POST",

                url: "retorno20.php",

                data: { c:cfalta }

                }).done(function() {

                ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);

                setTimeout( function(){
                  redrect();
		        }, 400 );

                });

                //fim computar gols
                }
                function redrect(){
                  ajaxGet('chutar_extra.php',"document.getElementById('hidden').innerHTML", false);
                }
                
                 //programação
                var type_c = Math.floor(Math.random() * 2);
                var Sorte  = Math.floor(Math.random() * 9); 
                
                if(habilidade == 1){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            gols01();
                           
                            //gol
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }else if(habilidade == 2){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                } else if(habilidade == 3){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }  else if(habilidade == 4){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 5){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }
                else if(habilidade == 6){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 7){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 8){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 9){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 10){
                    if(status_nerfar == 1){
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                    }else{
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6 || Sorte == 7){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_esquerda();
                            }else if(type_c == 1){
                                gol2_esquerda();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_esquerda();
                            }else if(type_c == 1){
                                errou2_esquerda();
                            }
                        }
                    }
                    }
                    
                   


                }  
                //fim habilidades
                
            }
        }

        function falta_meio() {
            if (chutou) {
                return; // Se já chutou, não faz nada
            } else {
                function errous01(){
                    //computar errou

           $.ajax({

                method: "POST",

                url: "retorno21.php",

                data: { c:cfalta }

                }).done(function() {

                ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);
                setTimeout( function(){
                                redrect();
		        }, 400 );

                });

                }

                function gols01(){
                    //computar gols

           $.ajax({

                method: "POST",

                url: "retorno20.php",

                data: { c:cfalta }

                }).done(function() {

                ajaxGet('chute_e.php',"document.getElementById('base_extras').innerHTML", false);

                ajaxGet('get_info.php',"document.getElementById('base_user').innerHTML", false);

                setTimeout( function(){
                                redrect();
		        }, 400 );

                });

                //fim computar gols
                }
                function redrect(){
                    ajaxGet('chutar_extra.php',"document.getElementById('hidden').innerHTML", false);
                }
                
                 //programação
                var type_c = Math.floor(Math.random() * 2);
                var Sorte  = Math.floor(Math.random() * 9); 
                
                if(habilidade == 1){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            gols01();
                           
                            //gol
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }else if(habilidade == 2){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                } else if(habilidade == 3){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }  else if(habilidade == 4){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 5){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }
                else if(habilidade == 6){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 7){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }   
                else if(habilidade == 8){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 9){
                    //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                   


                }  
                else if(habilidade == 10){
                    if(status_nerfar == 1){
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 ){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }
                    }else{
                        //verificar bless
                    if(habilidade_falta == 1){
                        //gol = 1 2 3 4
                        
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6 || Sorte == 7){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
                            errous01();
                            if(type_c == 0){
                                errou1_meio();
                            }else if(type_c == 1){
                                errou2_meio();
                            }
                        }
                    }else{
                        //sem bless
                        if(Sorte == 0 || Sorte == 1 || Sorte == 2 || Sorte == 3 || Sorte == 4 || Sorte == 5 || Sorte == 6){
                            //gol
                            gols01();
                            if(type_c == 0){
                                gol1_meio();
                            }else if(type_c == 1){
                                gol2_meio();
                            }

                        }else{
                            //errou
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
                //fim habilidades
            }
        }

        function stopAnimation(event) {
            var bola = event.target; // Seleciona a bola
            var audio = document.getElementById('chute-audio'); // Áudio do chute
            var fundo_gol = document.getElementById('goool'); // Tela de "GOOOOOL"
            var fundo_f = document.getElementById('fundo_f'); // Fundo da falta
            var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
            var fundo_gol_conteudo = document.getElementById('conteudo_gol'); // Seleciona o conteúdo do fundo do gol
            var tente = document.getElementById('tente'); // Seleciona o elemento "Tente"
            var novamente = document.getElementById('novamente'); // Seleciona o elemento "Novamente"

            if (result === 'gol') {
                fundo_gol.style.flexDirection = 'row'; // Define a direção do flexbox como coluna
                bola.src = 'falta/bola.png'; // Troca a imagem da bola para a original
                if(audio){ audio.pause(); audio.currentTime = 0; }
                fundo_f.style.display = 'none'; // Esconde o fundo da falta
                fundo_gol.style.display = 'flex'; // Exibe o fundo do gol
                if(audio_gol){ audio_gol.currentTime = 6; audio_gol.volume = 0.5; audio_gol.play(); }
                var text = 'GOOOOOL'; // Texto de "GOOOOOL"
                tente.innerHTML = ''; // Limpa o conteúdo anterior
                novamente.innerHTML = ''; // Limpa o conteúdo anterior
                fundo_gol_conteudo.innerHTML = ''; // Limpa o conteúdo anterior
                console.log(fundo_gol_conteudo);
                parar_barreira(); // Para a animação da barreira
                text.split('').forEach((letter, index) => {
                    var span = document.createElement('span'); // Cria um elemento <span> para cada letra
                    span.textContent = letter; // Define o texto do <span>
                    span.style.animationDelay = `${index * 0.1}s`; // Define o atraso da animação para cada letra
                    fundo_gol_conteudo.appendChild(span); // Adiciona o <span> ao fundo do gol
                });

                setTimeout(() => {
                    fundo_gol_conteudo.innerHTML = ''; // Limpa o conteúdo anterior
                    if(audio_gol){ audio_gol.pause(); audio_gol.currentTime = 0; }
                    fundo_gol.style.display = 'none'; // Esconde o fundo do gol
                    fundo_f.style.display = 'block'; // Exibe o fundo da falta novamente
                    bola.className = 'bola'; // Remove todas as classes de animação da bola
                    bola.classList.remove('a-frente');
                    goleiro.className = ''; // Remove as classes de animação do goleiro
                    var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'block'; // habilita o clique nos elementos de chute
                    });
                    chutou = false; // Permite outro chute
                }, 2000);

            } else if (result === 'errou') {
                var bola = event.target; // Seleciona a bola
                var audio = document.getElementById('chute-audio'); // Áudio do chute
                var fundo_gol = document.getElementById('goool'); // Tela de "GOOOOOL"
                var fundo_f = document.getElementById('fundo_f'); // Fundo da falta
                var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
                var tente = document.getElementById('tente'); // Seleciona o elemento "Tente"
                var novamente = document.getElementById('novamente'); // Seleciona o elemento "Novamente"
                var fundo_gol_conteudo = document.getElementById('conteudo_gol'); // Seleciona o conteúdo do fundo do gol
                var audio_vaia = document.getElementById('vaia'); // Áudio da vaia
                fundo_gol_conteudo.innerHTML = ''; // Limpa o conteúdo anterior
                fundo_gol.style.flexDirection = 'column'; // Define a direção do flexbox como coluna
                bola.src = 'falta/bola.png'; // Troca a imagem da bola para a original
                if(audio){ audio.pause(); audio.currentTime = 0; }
                fundo_f.style.display = 'none'; // Esconde o fundo da falta
                fundo_gol.style.display = 'flex'; // Exibe o fundo do gol
                novamente.style.display = 'flex'; // Exibe o fundo do gol
                if(audio_vaia){ audio_vaia.volume = 0.5; audio_vaia.play(); }
                tente.innerHTML = ''; // Limpa o conteúdo anterior
                novamente.innerHTML = ''; // Limpa o conteúdo anterior
                var text2 = 'ERROOOOU'; // Texto com "Tente" em cima e "Novamente" embaixo
                var text3 = ''; // Texto com "Tente" em cima e "Novamente" embaixo
                parar_barreira(); // Para a animação da barreira
                text2.split('').forEach((letter, index) => {
                    var span = document.createElement('span'); // Cria um elemento <span> para cada letra
                    span.textContent = letter; // Define o texto do <span>
                    span.style.animationDelay = `${index * 0.1}s`; // Define o atraso da animação para cada letra
                    tente.appendChild(span); // Adiciona o <span> ao fundo do gol
                });
                text3.split('').forEach((letter, index) => {
                    var span = document.createElement('span'); // Cria um elemento <span> para cada letra
                    span.textContent = letter; // Define o texto do <span>
                    span.style.animationDelay = `${index * 0.1}s`; // Define o atraso da animação para cada letra
                    novamente.appendChild(span); // Adiciona o <span> ao fundo do gol
                });

                setTimeout(() => {
                    fundo_gol_conteudo.innerHTML = ''; // Limpa o conteúdo anterior
                    if(audio_vaia){ audio_vaia.pause(); audio_vaia.currentTime = 0; }
                    fundo_gol.style.display = 'none'; // Esconde o fundo do gol
                    fundo_f.style.display = 'block'; // Exibe o fundo da falta novamente
                    bola.className = 'bola'; // Remove todas as classes de animação da bola
                    bola.classList.remove('a-frente');
                    goleiro.className = ''; // Remove as classes de animação do goleiro
                    goleiro.style.backgroundImage = "url(falta/parado.gif)"; // Troca a imagem do goleiro para "goleiro_pegou"
                    var chute = document.querySelectorAll('.chute'); // Seleciona todos os elementos de chute
                    chute.forEach(function (element) {
                        element.style.display = 'block'; // habilita o clique nos elementos de chute
                    });
                    chutou = false; // Permite outro chute
                }, 2000);
            }
        }

        function goleiro() {
            var g = document.getElementById('goleiro'); // Seleciona o goleiro
            if (!g) return; // elemento ainda não existe
            var goleiro_parado = false; // Controle do estado do goleiro
            var interval = setInterval(function () {
                if (!g) return; // segurança
                if (goleiro_parado) {
                    g.style.backgroundImage = "url(falta/DEFESA-MEIO.gif)"; // Troca para a imagem de defesa
                    goleiro_parado = false; // Atualiza o estado
                } else {
                    g.style.backgroundImage = "url(falta/lacanco.gif)"; // Troca para a imagem de "lacanco"
                    goleiro_parado = true; // Atualiza o estado
                }
            }, 2000); // Alterna a cada 2 segundos

            g.addEventListener('animationstart', function () {
                clearInterval(interval); // Para a alternância durante a animação
            });

            g.addEventListener('animationend', function () {
                interval = setInterval(function () {
                    if (!g) return; // segurança
                    if (goleiro_parado) {
                        g.style.backgroundImage = "url(falta/DEFESA-MEIO.gif)"; // Troca para a imagem de defesa
                        goleiro_parado = false; // Atualiza o estado
                    } else {
                        g.style.backgroundImage = "url(falta/lacanco.gif)"; // Troca para a imagem de "lacanco"
                        goleiro_parado = true; // Atualiza o estado
                    }
                }, 2000); // Reinicia a alternância após a animação
            });
        }

        function pular_barreira() {
            var barreira = document.getElementById('barreira'); // Seleciona a barreira
            barreira.style.backgroundImage = "url(falta/barreira.gif)"; // Troca a imagem da barreira para a animação
        }

        function parar_barreira() {
            var barreira = document.getElementById('barreira'); // Seleciona a barreira
            barreira.style.backgroundImage = "url(falta/barreira_parado.png)"; // Troca a imagem da barreira para parada
        }

        function goleiro_perto() {
            var goleiro = document.getElementById('goleiro'); // Seleciona o goleiro
            goleiro.style.backgroundImage = "url(falta/lacanco.gif)"; // Troca a imagem do goleiro para "lacanco"
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', goleiro);
        } else {
            goleiro();
        }

        // Reset chutou periodicamente para garantir que não trave
        setInterval(function() {
            if (chutou) {
                console.log('Resetando chutou para debug');
                chutou = false;
            }
        }, 3000);

        // Expor funções globalmente
        window.falta_esquerda = falta_esquerda;
        window.falta_meio = falta_meio;
        window.falta_direita = falta_direita;