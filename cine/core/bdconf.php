    <?php
    $bd = array(
    'ip' => '127.0.0.1',
    'bd' => 'cine',
    'us' => 'cinedb',
    'ps' => 'cinedb'
    );
    $solicitar_dados = mysql_connect($bd['ip'],$bd['us'],$bd['ps']) or exit (mysql_error);
    $selecionar_db = mysql_select_db($bd['bd']) or exit (mysql_error);
	unset($solicitar_dados);
	unset($selecionar_db);
    ?>