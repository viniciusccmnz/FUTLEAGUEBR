//copyright PTGOL - TODOS OS DIREITOS RESERVADOS 2023/2024

//PLÁGIO SUJEITO A COBRANÇA NA JUSTIÇA

var ctrilha     = $("#ctrilha").val();
var habilidade_trilha = $("#habilidade_trilha").val();
var habilidade = $("#habilidade_t").val();

(function($) {

         $.rand = function(arg) {

             if ($.isArray(arg)) {

                 return arg[$.rand(arg.length)];

             } else if (typeof arg == "number") {

                 return Math.floor(Math.random() * arg);

             } else {

                 return 4;  // chosen by fair dice roll

             }

         };

       })(jQuery);



function gol(){

         //computar gols

         $.ajax({

           method: "POST",

           url: "retorno16.php",

           data: { c:ctrilha }

         });

         //fim computar gols
         
         // Bloquear trilha após gol
         if (typeof window.parent.bloquearTrilha === 'function') {
             window.parent.bloquearTrilha();
         }

       }

       

       function errou(){

         //computar errou

         $.ajax({

           method: "POST",

           url: "retorno17.php",

           data: { c:ctrilha }

         });

         //fim computar errou
         
         // Bloquear trilha após erro
         if (typeof window.parent.bloquearTrilha === 'function') {
             window.parent.bloquearTrilha();
         }

       }

function z1(){



   const sorte_zaga  = [1,2,3,4];// so erra 1 numero dos 4

   var type_z   = $.rand(sorte_zaga);



   $(".b1").show();

   $(".b2").hide();

   $(".b3").hide();

   $(".b4").hide();

   

   $("#fundozaga2").html('<div id="z2"></div>');

   $("#fundozaga3").html('<div id="z3"></div>');

   $("#fundozaga4").html('<div id="z4"></div>');



   var bless = 1;



   if(type_z == 1 || type_z == 2 || type_z == 4){

    //acertou a zaga

    $("#fundomeio").html('<div id="m1" onClick="m1();"></div>');

    $("#fundomeio2").html('<div id="m2" onClick="m2();"></div>');

    $("#fundomeio3").html('<div id="m3" onClick="m3();"></div>');

    $("#fundomeio4").html('<div id="m4" onClick="m4();"></div>');



    $("#z1").fadeOut(600);

    $("#z4").fadeOut(600);

    $("#z2").fadeOut(600);

   }else{

    errou();

    //errou na zaga

    //computar errou

   $.ajax({

     method: "POST",

     url: "retorno17.php",

     data: { c:ctrilha }

   });

    $("#errou").show();

    $("#z3").fadeOut(700);

    $("#z4").fadeOut(700);

    $("#z2").fadeOut(700);

   }



   $("#player").animate({ 

     marginTop:  "-78px",

     marginLeft: "-85px"}, 1050, function() {



   });

   //FIM EFEITO



   return false;

}

function z2(){



  const sorte_zaga  = [1,2,3,4];// so erra 1 numero dos 4

  var type_z   = $.rand(sorte_zaga);



  $(".b1").hide();

  $(".b2").show();

  $(".b3").hide();

  $(".b4").hide();



  $("#fundozaga1").html('<div id="z1"></div>');

  $("#fundozaga3").html('<div id="z3"></div>');

  $("#fundozaga4").html('<div id="z4"></div>');



  if(type_z == 1 || type_z == 2 || type_z == 3){

    //acertou

  $("#fundomeio").html('<div id="m1" onClick="m1();"></div>');

  $("#fundomeio2").html('<div id="m2" onClick="m2();"></div>');

  $("#fundomeio3").html('<div id="m3" onClick="m3();"></div>');

  $("#fundomeio4").html('<div id="m4" onClick="m4();"></div>');



  $("#z2").fadeOut(700);

  $("#z4").fadeOut(700);

  $("#z1").fadeOut(700);

  }else{

    //errou

    errou();

    $("#errou").show();

    $("#z3").fadeOut(700);

    $("#z4").fadeOut(700);

    $("#z1").fadeOut(700);

  }   



   $("#player").animate({ 

     marginTop:  "-45px",

     marginLeft: "-29.5px"}, 1050, function() {

    });

}

function z3(){

  const sorte_zaga  = [1,2,3,4];// so erra 1 numero dos 4

  var type_z   = $.rand(sorte_zaga);



  $(".b1").hide();

  $(".b2").hide();

  $(".b3").show();

  $(".b4").hide();



  $("#fundozaga2").html('<div id="z2"></div>');

  $("#fundozaga1").html('<div id="z1"></div>');

  $("#fundozaga4").html('<div id="z4"></div>');



  if(type_z == 2 || type_z == 4 || type_z == 3){

    //acertou

  $("#fundomeio").html('<div id="m1" onClick="m1();"></div>');

  $("#fundomeio2").html('<div id="m2" onClick="m2();"></div>');

  $("#fundomeio3").html('<div id="m3" onClick="m3();"></div>');

  $("#fundomeio4").html('<div id="m4" onClick="m4();"></div>');



  $("#z3").fadeOut(600);

  $("#z1").fadeOut(600);

  $("#z4").fadeOut(600);

  }else{

    //errou

   errou(); 

  $("#errou").show();    

  $("#z2").fadeOut(700);

  $("#z1").fadeOut(700);

  $("#z4").fadeOut(700);

  }  



  $("#player").animate({ 

     marginTop:  "-45px",

     marginLeft: "33px"}, 1050, function() {

    });



}

function z4(){

  const sorte_zaga  = [1,2,3,4];// so erra 1 numero dos 4

  var type_z   = $.rand(sorte_zaga);



  $(".b1").hide();

  $(".b2").hide();

  $(".b3").hide();

  $(".b4").show();



  $("#fundozaga2").html('<div id="z2"></div>');

  $("#fundozaga3").html('<div id="z3"></div>');

  $("#fundozaga1").html('<div id="z1"></div>');



  if(type_z == 1 || type_z == 2 || type_z == 3){

    //acertou

  $("#fundomeio").html('<div id="m1" onClick="m1();"></div>');

  $("#fundomeio2").html('<div id="m2" onClick="m2();"></div>');

  $("#fundomeio3").html('<div id="m3" onClick="m3();"></div>');

  $("#fundomeio4").html('<div id="m4" onClick="m4();"></div>');



  $("#z4").fadeOut(600);

  $("#z1").fadeOut(600);

  $("#z3").fadeOut(600);

  }else{

    //errou

   errou(); 

  $("#errou").show();  

  $("#z2").fadeOut(700);

  $("#z1").fadeOut(700);

  $("#z3").fadeOut(700);

  }  



  $("#player").animate({ 

     marginTop:  "-76px",

     marginLeft: "89.5px"}, 1050, function() {

  });

}



function m1(){

  var bless = document.getElementById('bless_ativo').value;
  var sorte_meio  = [1,2,3,4];// so erra 3 numero dos 4 sem bless
  var type_m   = $.rand(sorte_meio);

  const sorte_meio_bless  = [2,3,4];// so erra 3 numero dos 4 sem bless
  var type_m_bless   = $.rand(sorte_meio_bless);



  $(".b5").show();

  $(".b6").hide();

  $(".b7").hide();

  $(".b8").hide();



  $("#fundomeio2").html('<div id="m2"></div>');

  $("#fundomeio3").html('<div id="m3"></div>');

  $("#fundomeio4").html('<div id="m4"></div>');



  if(bless == 1){

    //bless ativo

    if(habilidade_trilha == 1){
      if(type_m == 1 || type_m == 3 || type_m == 2){

        $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

        $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

        $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

        //abre m1
        $("#m1").fadeOut(600);
        //abre o bless
        $("#m"+type_m_bless).fadeOut(600);
        //abre o bless trilha
       
         if(habilidade_trilha == 1){
              //abre +1
              if(type_m_bless == 2){

                $("#m3").fadeOut(700);

              }else if(type_m_bless == 3){

                $("#m4").fadeOut(700);

              }else if(type_m_bless == 4){

                $("#m2").fadeOut(700);

              }
         }

    }else{

      errou();

        $("#errou").show();

        if(type_m_bless == 2){

          $("#m3").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m4").fadeOut(700);

        }

        if(type_m_bless == 4){

          $("#m2").fadeOut(700);

        }

        $("#m"+type_m_bless).fadeOut(700);

        if(habilidade_trilha == 1){
              //abre +1
            if(type_m_bless == 2){

              $("#m4").fadeOut(700);

            }else if(type_m_bless == 3){

              $("#m2").fadeOut(700);

            }else if(type_m_bless == 4){

              $("#m3").fadeOut(700);

            }
        }

    }

    }else{
      if(type_m == 1 || type_m == 3){

        $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

        $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

        $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

        //abre m1
        $("#m1").fadeOut(600);
        //abre o bless
        $("#m"+type_m_bless).fadeOut(600);
        //abre o bless trilha
       
         if(habilidade_trilha == 1){
              //abre +1
              if(type_m_bless == 2){

                $("#m3").fadeOut(700);

              }else if(type_m_bless == 3){

                $("#m4").fadeOut(700);

              }else if(type_m_bless == 4){

                $("#m2").fadeOut(700);

              }
         }

    }else{

      errou();

        $("#errou").show();

        if(type_m_bless == 2){

          $("#m3").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m4").fadeOut(700);

        }

        if(type_m_bless == 4){

          $("#m2").fadeOut(700);

        }

        $("#m"+type_m_bless).fadeOut(700);

        if(habilidade_trilha == 1){
              //abre +1
            if(type_m_bless == 2){

              $("#m4").fadeOut(700);

            }else if(type_m_bless == 3){

              $("#m2").fadeOut(700);

            }else if(type_m_bless == 4){

              $("#m3").fadeOut(700);

            }
        }

    }

    }

    
  }else{

    //sem bless

    if(type_m == 1 || type_m == 3){

        $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

        $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

        $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');



        $("#m1").fadeOut(600);

        if(habilidade_trilha == 1){
          //abre +1
            $("#m"+type_m_bless).fadeOut(600); 
         }

    }else{

      errou();

        $("#errou").show();

        if(habilidade_trilha == 1){
          //abre +1
            $("#m"+type_m_bless).fadeOut(600); 
         }

         if(type_m_bless == 2){

          $("#m3").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m4").fadeOut(700);

        }

        if(type_m_bless == 4){

          $("#m2").fadeOut(700);

        }

    }

  }



  $("#player").animate({ 

     marginTop: "-153px",marginLeft: "-85px"}, 1050, function() {

  });



}

function m2(){

  var bless = document.getElementById('bless_ativo').value;
  var sorte_meio  = [1,2,3,4];// so erra 3 numero dos 4 sem bless
  var type_m   = $.rand(sorte_meio);
  const sorte_meio_bless  = [1,3,4];// so erra 3 numero dos 4 sem bless

  var type_m_bless   = $.rand(sorte_meio_bless);



  $(".b5").hide();

  $(".b6").show();

  $(".b7").hide();

  $(".b8").hide();



  $("#fundomeio").html('<div id="m1"></div>');

  $("#fundomeio3").html('<div id="m3"></div>');

  $("#fundomeio4").html('<div id="m4"></div>');



  if(bless == 1){

   if(habilidade_trilha == 1){
     //bless ativo

     if(type_m == 2 || type_m == 4 || type_m == 3){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');


      $("#m2").fadeOut(600);
      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m3").fadeOut(700);

      }
  }

      

    }else{

      errou();

      $("#errou").show();

        if(type_m_bless == 1){

          $("#m3").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m4").fadeOut(700);

        }

        if(type_m_bless == 4){

          $("#m1").fadeOut(700);

        }

        $("#m"+type_m_bless).fadeOut(700);

        if(habilidade_trilha == 1){
          //abre +1
        if(type_m_bless == 1){
  
          $("#m4").fadeOut(700);
  
        }else if(type_m_bless == 3){
  
          $("#m1").fadeOut(700);
  
        }else if(type_m_bless == 4){
  
          $("#m3").fadeOut(700);
  
        }
    }

    }
   }else{
     //bless ativo

     if(type_m == 2 || type_m == 4){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');


      $("#m2").fadeOut(600);
      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m3").fadeOut(700);

      }
  }

      

    }else{

      errou();

      $("#errou").show();

        if(type_m_bless == 1){

          $("#m3").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m4").fadeOut(700);

        }

        if(type_m_bless == 4){

          $("#m1").fadeOut(700);

        }

        $("#m"+type_m_bless).fadeOut(700);

        if(habilidade_trilha == 1){
          //abre +1
        if(type_m_bless == 1){
  
          $("#m4").fadeOut(700);
  
        }else if(type_m_bless == 3){
  
          $("#m1").fadeOut(700);
  
        }else if(type_m_bless == 4){
  
          $("#m3").fadeOut(700);
  
        }
    }

    }
   }

  }else{

    //sem bless

    if(type_m == 2 || type_m == 4){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');



      $("#m2").fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
          $("#m"+type_m_bless).fadeOut(600); 
       }

    }else{

      errou();

      $("#errou").show();

      if(habilidade_trilha == 1){
        //abre +1
          $("#m"+type_m_bless).fadeOut(600); 
       }
       
       if(type_m_bless == 1){

        $("#m3").fadeOut(700);

      }

      if(type_m_bless == 3){

        $("#m4").fadeOut(700);

      }

      if(type_m_bless == 4){

        $("#m1").fadeOut(700);

      }

    }

  }    



  $("#player").animate({ 

     marginTop: "-179px",marginLeft: "-29.5px"}, 1050, function() {

  });



}

function m3(){

  var bless = document.getElementById('bless_ativo').value;
  var sorte_meio  = [1,2,3,4];// so erra 3 numero dos 4 sem bless
  var type_m   = $.rand(sorte_meio);

  const sorte_meio_bless  = [1,2,4];// so erra 3 numero dos 4 sem bless
  var type_m_bless   = $.rand(sorte_meio_bless);



  $(".b5").hide();

  $(".b6").hide();

  $(".b7").show();

  $(".b8").hide();



  $("#fundomeio").html('<div id="m1"></div>');

  $("#fundomeio2").html('<div id="m2"></div>');

  $("#fundomeio4").html('<div id="m4"></div>');



  if(bless == 1){

    if(habilidade_trilha == 1){
      //bless ativo

    if(type_m == 3 || type_m == 4 || type_m == 2){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

      

      $("#m3").fadeOut(600);

      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m2").fadeOut(700);

      }
  }

    }else{

      errou();

      $("#errou").show();

      if(type_m_bless == 1){

        $("#m2").fadeOut(700);

      }

      if(type_m_bless == 2){

        $("#m4").fadeOut(700);

      }

      if(type_m_bless == 4){

        $("#m1").fadeOut(700);

      }

      $("#m"+type_m_bless).fadeOut(700);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m2").fadeOut(700);

      }
  }

    }
    }else{
        //bless ativo

    if(type_m == 3 || type_m == 4){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

      

      $("#m3").fadeOut(600);

      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m2").fadeOut(700);

      }
  }

    }else{

      errou();

      $("#errou").show();

      if(type_m_bless == 1){

        $("#m2").fadeOut(700);

      }

      if(type_m_bless == 2){

        $("#m4").fadeOut(700);

      }

      if(type_m_bless == 4){

        $("#m1").fadeOut(700);

      }

      $("#m"+type_m_bless).fadeOut(700);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m4").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 4){

        $("#m2").fadeOut(700);

      }
  }

    }
    }

  }else{

    //sem bless

    if(type_m == 3 || type_m == 4){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

      if(habilidade_trilha == 1){
        //abre +1
          $("#m"+type_m_bless).fadeOut(600); 
       }

      $("#m3").fadeOut(600);



    }else{

      errou();

      $("#errou").show();

      if(habilidade_trilha == 1){
        //abre +1
          $("#m"+type_m_bless).fadeOut(600); 
       }
      
       if(type_m_bless == 1){

        $("#m2").fadeOut(700);

      }

      if(type_m_bless == 4){

        $("#m1").fadeOut(700);

      }

      if(type_m_bless == 2){

        $("#m4").fadeOut(700);

      }

    }



  }    



  $("#player").animate({ 

     marginTop: "-178px",marginLeft: "34px"}, 1050, function() {

  });



}

function m4(){

  var bless = document.getElementById('bless_ativo').value;
  var sorte_meio  = [1,2,3,4];// so erra 3 numero dos 4 sem bless
  var type_m   = $.rand(sorte_meio);

  const sorte_meio_bless  = [1,2,3];// so erra 3 numero dos 4 sem bless
  var type_m_bless   = $.rand(sorte_meio_bless);



  $(".b5").hide();

  $(".b6").hide();

  $(".b7").hide();

  $(".b8").show();



  $("#fundomeio").html('<div id="m1"></div>');

  $("#fundomeio2").html('<div id="m2"></div>');

  $("#fundomeio3").html('<div id="m3"></div>');



  if(bless == 1){

    //bless ativo

   if(habilidade_trilha == 1){
    if(type_m == 1 || type_m == 4 || type_m == 3){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

      $("#m4").fadeOut(600);

      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m3").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m2").fadeOut(700);

      }
  }

  }else{

    errou();

      $("#errou").show();

      if(type_m_bless == 1){

        $("#m2").fadeOut(700);

      }

      if(type_m_bless == 2){

        $("#m3").fadeOut(700);

      }

      if(type_m_bless == 3){

        $("#m1").fadeOut(700);

      }

      $("#m"+type_m_bless).fadeOut(700);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m3").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m2").fadeOut(700);

      }
  }

  }
   }else{
    if(type_m == 1 || type_m == 4){

      $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

      $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

      $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

      $("#m4").fadeOut(600);

      $("#m"+type_m_bless).fadeOut(600);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m3").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m2").fadeOut(700);

      }
  }

  }else{

    errou();

      $("#errou").show();

      if(type_m_bless == 1){

        $("#m2").fadeOut(700);

      }

      if(type_m_bless == 2){

        $("#m3").fadeOut(700);

      }

      if(type_m_bless == 3){

        $("#m1").fadeOut(700);

      }

      $("#m"+type_m_bless).fadeOut(700);

      if(habilidade_trilha == 1){
        //abre +1
      if(type_m_bless == 1){

        $("#m3").fadeOut(700);

      }else if(type_m_bless == 2){

        $("#m1").fadeOut(700);

      }else if(type_m_bless == 3){

        $("#m2").fadeOut(700);

      }
  }

  }
   }

  } else{

    //sem bless

    if(type_m == 4 || type_m == 1){

        $("#fundoarea").html('<div id="a1" onClick="a1();"></div>');

        $("#fundoarea2").html('<div id="a2" onClick="a2();"></div>');

        $("#fundoarea3").html('<div id="a3" onClick="a3();"></div>');

        if(habilidade_trilha == 1){
          //abre +1
            $("#m"+type_m_bless).fadeOut(600); 
         }

        $("#m4").fadeOut(600);

    }else{

      errou();

        $("#errou").show();

        if(habilidade_trilha == 1){
          //abre +1
            $("#m"+type_m_bless).fadeOut(600); 
         }
        
         if(type_m_bless == 1){

          $("#m2").fadeOut(700);

        }

        if(type_m_bless == 3){

          $("#m1").fadeOut(700);

        }

        if(type_m_bless == 2){

          $("#m3").fadeOut(700);

        }

    }

  }   



  $("#player").animate({ 

     marginTop: "-153px",marginLeft: "88px"}, 1050, function() {

  });



}

function a1(){

  var bless = document.getElementById('bless_ativo').value;

  const sorte_area  = [1,2,3];// so erra 3 numero dos 4 sem bless

  var type_a   = $.rand(sorte_area);



  const sorte_area_bless  = [2,3];// so erra 3 numero dos 4 sem bless

  var type_a_bless   = $.rand(sorte_area_bless);



  $(".b9").show();

  $(".b10").hide();

  $(".b11").hide();



  $("#fundoarea").html('<div id="a1"></div>');

  $("#fundoarea2").html('<div id="a2"></div>');

  $("#fundoarea3").html('<div id="a3"></div>');



  if(bless == 1){

    //com bless

      if(type_a == 1 || type_a == 3){

        $("#a1").fadeOut(600);

        $("#a"+type_a_bless).fadeOut(600);



         $("#player").animate({ marginTop: "-258.5px",marginLeft: "-57px"},1050, function(){

         $("#bola").animate({ marginTop: "-70",marginLeft: "63px"},450, function(){

         $("#gol").show();  

          gol();

         });

       });

      }else{

        errou();

        $("#errou").show();

        $("#a"+type_a_bless).fadeOut(700);

        if(type_a_bless == 2){

          $("#a3").fadeOut(700);

        }

        if(type_a_bless == 3){

          $("#a2").fadeOut(700);

        }

        $("#player").animate({ marginTop: "-258.5px",marginLeft: "-57px"},1050, function(){});

      }

  }else{

    //sem bless

    if(type_a == 1){

      $("#a1").fadeOut(600);

      $("#player").animate({ marginTop: "-258.5px",marginLeft: "-57px"},1050, function(){

         $("#bola").animate({ marginTop: "-70",marginLeft: "63px"},450, function(){

         $("#gol").show();

         gol();  

          

         });

       });

      }else{

        errou();

        $("#errou").show();

        $("#a"+type_a_bless).fadeOut(700);

        $("#player").animate({ marginTop: "-258.5px",marginLeft: "-57px"},1050, function(){});

      }

  }



}



function a2(){

  var bless = document.getElementById('bless_ativo').value;

  const sorte_area  = [1,2,3];// so erra 3 numero dos 4 sem bless

  var type_a   = $.rand(sorte_area);



  const sorte_area_bless  = [1,3];// so erra 3 numero dos 4 sem bless

  var type_a_bless   = $.rand(sorte_area_bless);



  $(".b9").hide();

  $(".b10").show();

  $(".b11").hide();



  $("#fundoarea").html('<div id="a1"></div>');

  $("#fundoarea2").html('<div id="a2"></div>');

  $("#fundoarea3").html('<div id="a3"></div>');



  if(bless == 1){

    //com bless

      if(type_a == 2 || type_a == 3){

          $("#a2").fadeOut(600);

          $("#a"+type_a_bless).fadeOut(600);

          $("#player").animate({ marginTop: "-258.5px",marginLeft: "61px"},1050, function(){

          $("#bola").animate({ marginTop: "-70",marginLeft: "-59px"},450, function(){

          $("#gol").show();

          gol();  

          });

        });

       }else{

          errou();

          $("#errou").show();

          $("#a"+type_a_bless).fadeOut(700);



          if(type_a_bless == 1){

            $("#a3").fadeOut(700);

          }

          if(type_a_bless == 3){

            $("#a1").fadeOut(700);

          }

          $("#player").animate({ marginTop: "-258.5px",marginLeft: "61px"},1050, function(){});

       }

  }else{

    //sem bless

      if(type_a == 3){

          $("#a2").fadeOut(600);

          

          $("#player").animate({ marginTop: "-258.5px",marginLeft: "61px"},1050, function(){

          $("#bola").animate({ marginTop: "-70",marginLeft: "-59px"},450, function(){

          $("#gol").show();

          gol();  

          });

        });

      }else{

          errou();

          $("#errou").show();

          $("#a"+type_a_bless).fadeOut(700);

          $("#player").animate({ marginTop: "-258.5px",marginLeft: "61px"},1050, function(){});

      }  

  }      

  

}



function a3(){

  var bless = document.getElementById('bless_ativo').value;

  const sorte_area  = [1,2,3];// so erra 3 numero dos 4 sem bless

  var type_a   = $.rand(sorte_area);



  const sorte_area_bless  = [1,2];// so erra 3 numero dos 4 sem bless

  var type_a_bless   = $.rand(sorte_area_bless);



  $(".b9").hide();

  $(".b10").hide();

  $(".b11").show();



  $("#fundoarea").html('<div id="a1"></div>');

  $("#fundoarea2").html('<div id="a2"></div>');

  $("#fundoarea3").html('<div id="a3"></div>');



  if(bless == 1){

    //com bless

      if(type_a == 2 || type_a == 1){

          $("#a3").fadeOut(600);

          $("#a"+type_a_bless).fadeOut(600);

          $("#player").animate({marginTop: "-282px",marginLeft: "2px"},1050, function(){

          $("#bola").animate({ marginTop: "-45",marginLeft: "-7px"},450, function(){

          $("#gol").show();

          gol();    

          });

        });

      }else{

          errou();

          $("#errou").show();

          $("#a"+type_a_bless).fadeOut(700);



          if(type_a_bless == 1){

            $("#a2").fadeOut(700);

          }

          if(type_a_bless == 2){

            $("#a1").fadeOut(700);

          }

          $("#player").animate({marginTop: "-282px",marginLeft: "2px"},1050, function(){});

      }

  }else{

    //sem bless

    if(type_a == 1){

          $("#a3").fadeOut(600);

          $("#player").animate({marginTop: "-282px",marginLeft: "2px"},1050, function(){

          $("#bola").animate({ marginTop: "-45",marginLeft: "-7px"},450, function(){

          $("#gol").show();

          gol();    

          });

        });

      }else{

          errou();

          $("#errou").show();

          $("#a"+type_a_bless).fadeOut(700);

          $("#player").animate({marginTop: "-282px",marginLeft: "2px"},1050, function(){});

      }

  }

}
