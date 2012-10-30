<?php
include('bdconf.php');
$init_table_if_not_initialized = mysql_query("CREATE TABLE IF NO EXISTS `login` (
`id` INT(15) NOT NULL AUTO_INCREMENT,
`matricula` INT(17) NOT NULL,
`nome` VARCHAR(30) NOT NULL,
`turma` INT(3) NOT NULL,
`sexo` ENUM('Masculino','Feminino') NOT NULL,
`aval` ENUM('Péssimo','Ruim','Regular','Indefinido','Razoável','Bom','Ótimo') NOT NULL DEFAULT 'Indefinido',
`reput` INT(5) NOT NULL DEFAULT '0',
`foto` VARCHAR(120) DEFAULT '/img/sem_foto.png',
`stat` ENUM('Online','Offline') NOT NULL DEFAULT 'Offline',
`ultimoip` VARCHAR(30) NOT NULL,
`ultimologin` VARCHAR(10) NOT NULL DEFAULT '--/--/----',
KEY (`id`)
) ENGINE = MyISAM;");
  if(Isset($_COOKIE['ulog'])
  {
  $user = array (mysql_fetch_assoc(mysql_query("SELECT * FROM `login` WHERE `id` = '".$_COOKIE['ulog']."';")));
  }
$user = array (
"nome" => "Visitante",
"foto" => "/img/sem_foto.png",
);
?>