    // Arquivo de configura��es do CINE.
    // N�o altere manualmente este c�digo.
    // Caso queira alterar alguma configura��o referente ao sistema de transpar�ncia de notas,
    // por favor, utilize o painel administrativo.
    // Qualquer altera��o neste c�digo pode inviabilizar o funcionamento do sistema.
    // Att. Rovelcio Backes Junior.
    <?php
    $bd = array(
    'ip' => '127.0.0.1',
    'bd' => 'cine',
    'tb' => 'login',
    'us' => 'admcine',
    'ps' => '#2580123789445@'
    );
    $solicitar_dados = mysql_connect($bd['ip'],$bd['us'],$bd['ps']) or die (mysql_error);
    $if_tb_not_created = mysql_query('CREATE DATABASE IF NOT EXISTS `login` (
    `id` INT(15) NOT NULL AUTO_INCREMENT,
    `matricula` INT(17) NOT NULL,
    `nome` VARCHAR(30) NOT NULL,
    `nasc` VARCHAR(12) NOT NULL,
	`auth` INT(2) NOT NULL DEFAULT 0,
	KEY(`id`),
	KEY(`matricula`)
    ) ENGINE=MyISAM;');
    $selecionar_tabela = mysql_select_db($bd['tb']) or die (mysql_error);
            if(isset($_COOKIE['ulog'])
            {
    $user = mysql_fetch_assoc(mysql_query("SELECT `id`,`matricula`,`nome`,`nasc`,`auth` FROM `login` WHERE `id`='".$_COOKIE['ulog']."'"));
            }
    $cine_info = array(
    'c_t' => '.: Cine :.',
    'e_t' => '.: Cine - O Sistema de Transpar�ncia de Notas do IEE :.',
    'url' => 'http://ieecine.com.br/',
    );
    ?>