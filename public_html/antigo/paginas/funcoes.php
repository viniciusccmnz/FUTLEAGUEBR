<?php
//CONEXAO
class DB{
	private static $conn;
	public function __construct(){}
	public static function conn(){
		
	if(is_null(self::$conn)){
	self::$conn = new PDO("mysql:host=localhost;dbname=futlea52_kjgol_1;","futlea52_futleaguebr","burro101997");		
		}
		return self::$conn;
	}
}
//CONFIGURAÇÕES
function Rodada_Agora(){
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();
$RodadaAgora = $conf->Rodada;
echo $RodadaAgora;
}

function Temporada_Agora(){
$configuracoes = DB::conn()->prepare("SELECT * FROM configuracoes");
$configuracoes->execute();

$conf = $configuracoes->fetchObject();
$Campeonato = $conf->Campeonato;
echo $Campeonato;
}

function Online_Agora(){
 //determina um tempo para a variável $tempo
   $tempo = time();

   // pega o IP do usuário
   $ip = $_SERVER['REMOTE_ADDR'];

   //faz uma consulta para verificar se o ip já existe no banco de dados
   $verifica = DB::conn()->prepare("SELECT * FROM onlines WHERE ip ='$ip'");
   $verifica->execute();

   //retorna a quantidade de linhas da consulta ou seja, pode retornar 0 ou 1 linha
   $linhas  = $verifica->rowCount();

   //se não existir o ip no banco ele grava um com um tempo determinado
   if($linhas == 0)
   { 
      // gravando o IP e o tempo no DB
      $acrescenta = DB::conn()->prepare("INSERT INTO onlines (ip, Tempo) VALUES ('$ip','$tempo')");
	  $acrescenta->execute();
   }
   else
   { 
      // se o IP já existe ele o pega e atualiza o tempo no DB no IP selecionado
      //pega o IP retornado da consulta
      $ip = $verifica->fetchObject();
	  $ipnovo = $ip->ip;

      //faz um update para o registro do IP existente
      $atualiza = DB::conn()->prepare("UPDATE onlines SET Tempo ='$tempo' WHERE ip='$ipnovo'"); 
	  $atualiza->execute();
   }

   //deleta a linha que não foi atualizada no tempo de 600 segundos
   $atualizar = DB::conn()->prepare("DELETE FROM onlines WHERE Tempo <'$tempo'".-"3");
   $atualizar->execute();

   //faz uma consulta para mostrar quantos estão on-line 
   $online = DB::conn()->prepare("SELECT * FROM onlines"); 
   $online->execute();
   //retorna o número de linhas que será a quantidade de usuários on-line nesse momento
   $agora = $online->rowCount();
   echo $agora;	
}
?>