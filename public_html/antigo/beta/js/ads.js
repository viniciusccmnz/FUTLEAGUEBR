function Trilha(habilidades){
//close
$('.close').click(function(){
	//reset
	$("#b1").hide();
	$("#b2").hide();
	$("#b3").hide();
	$("#b4").hide();
	$("#bm1").hide();
	$("#bm2").hide();
	$("#bm3").hide();
	$("#bm4").hide();
	$("#ba1").hide();
	$("#ba2").hide();
	$("#ba3").hide();
	$("#ba4").hide();
})

//fim close

//z1	
$("#z1").click(function(){
		$("#b1").show();
		$("#b2").hide();
		$("#b3").hide();
		$("#b4").hide();
})
//z2
$("#z2").click(function(){
		$("#b1").hide();
		$("#b2").show();
		$("#b3").hide();
		$("#b4").hide();
})
//z3
$("#z3").click(function(){
		$("#b1").hide();
		$("#b2").hide();
		$("#b3").show();
		$("#b4").hide();
})
//z4
$("#z4").click(function(){
		$("#b1").hide();
		$("#b2").hide();
		$("#b3").hide();
		$("#b4").show();
})

//meio
//m1	
$("#m1").click(function(){
		$("#bm1").show();
		$("#bm2").hide();
		$("#bm3").hide();
		$("#bm4").hide();
})
//m2
$("#m2").click(function(){
		$("#bm1").hide();
		$("#bm2").show();
		$("#bm3").hide();
		$("#bm4").hide();
})
//m3
$("#m3").click(function(){
		$("#bm1").hide();
		$("#bm2").hide();
		$("#bm3").show();
		$("#bm4").hide();
})
//m4
$("#m4").click(function(){
		$("#bm1").hide();
		$("#bm2").hide();
		$("#bm3").hide();
		$("#bm4").show();
})
//area
//m1	
$("#a1").click(function(){
		$("#ba1").show();
		$("#ba2").hide();
		$("#ba3").hide();
})
//m2
$("#a2").click(function(){
		$("#ba1").hide();
		$("#ba2").show();
		$("#ba3").hide();
})
//m3
$("#a3").click(function(){
		$("#ba1").hide();
		$("#ba2").hide();
		$("#ba3").show();
})

//começa a função Zaga
var Zaga = ['2','4','6','8','10','12'];
var randow = Math.floor(Math.random() * Zaga.length);
Zaga = Zaga[randow];

var zz = ['z1','z2','z3','z4'];
var randowz = Math.floor(Math.random() * zz.length);
zz = zz[randowz];

//Meio
var Meio = ['2','4','6','8','10','12'];
var randow1 = Math.floor(Math.random() * Meio.length);
Meio = Meio[randow1];

var zz1 = ['m1','m2','m3','m4'];
var randowz1 = Math.floor(Math.random() * zz1.length);
zz1 = zz1[randowz1];

//Area
var Area = ['2','4','6','8','10','12'];
var randow2 = Math.floor(Math.random() * Area.length);
Area = Area[randow2];		

//verificações//
var z1 = $("#z1");
var z2 = $("#z2");
var z3 = $("#z3");
var z4 = $("#z4");
var m2 = $("#m2");
var player = $("#player");

//CLICAR NO Z1,M2,A2
$('#z1, #m2, #a2').on('click', function(){
Rodar();
});
//Rodar a Trilha
function Rodar(){
	var Seconds = 4;
    var Timer = setInterval(function(){
    Seconds--;
    $(".tempot").html(Seconds);
	
    if(Seconds <= -1){
    clearInterval(Timer);
	$(".tempot").hide();
	//Rodar a trilha//

	function reset1(){

    clearTimeout(my_time);
    document.getElementById('player').style.left= "";
    document.getElementById('player').style.top= "327px";
    document.getElementById('player').style.right= "100px";

}



function move_img(str) {

    var x=document.getElementById('player').offsetTop;
    x= x +100;
    document.getElementById('player').style.top= x + "px";

}

function disp(){

    var step=1; // Change this step value

    var y=document.getElementById('player').offsetTop;
    var x=document.getElementById('player').offsetLeft;

        if(y < 100){y= y +step; // DEFINA AQUI OS VALORES
                document.getElementById('player').style.top= y + "px"; // vertical movimento
            }else{
                if(x < 200){x= x +step; // DEFINA AQUI OS VALORES
                document.getElementById('player').style.left= x + "px"; // horizontal movimento
            }
    }
//////////////////////

}

function timer(){
disp();
var y=document.getElementById('player').offsetTop;
var x=document.getElementById('player').offsetLeft;
my_time=setTimeout('timer()',10);
}

	}//fim seconds

  },1000);	
}

}//fim função