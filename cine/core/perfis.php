<?php
include('bdconfs.php');
$init_table_if_not_initialized = mysql_query("CREATE TABLE IF NO EXISTS `perfil` (
`id` INT(15) NOT NULL AUTO_INCREMENT,
`matricula` INT(17) NOT NULL,
`nome` VARCHAR(30) NOT NULL,
`turma` INT(3) NOT NULL,
`sexo` ENUM('Masculino','Feminino') NOT NULL,
`aval` ENUM('Péssimo','Ruim','Regular','Indefinido','Razoável','Bom','Ótimo') NOT NULL DEFAULT 'Indefinido',
`foto` VARCHAR(120) DEFAULT '/img/sem_foto.png',
'stat' ENUM('Online','Offline') NOT NULL DEFAULT 'Offline',
KEY (`id`)
) ENGINE = MyISAM;");
  if(Isset($_COOKIE['ulog'])
  {
  $user_prof = array (mysql_fetch_assoc(mysql_query("SELECT `id`,`matricula`,`nome`,`turma`,`sexo`,`aval`,`foto`,`stat` WHERE `id` = '".$_COOKIE['ulog']."';"
);
  }
$user_prof = array (
"id" => 0,
"matricula" => 0,
"nome" => "Visitante",
"turma" => 0,
"sexo" => "Indefinido",
"aval" => "Indefinida",
"foto" => "/img/sem_foto.png",
"stat" => "Offline"
);
?>