<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cine - Portal de Aplicação do Ambire</title>
<?php include('core/bdconf.php'); include('core/perfis.php'); ?>
<link rel="stylesheet" href="src/estilos.css" />
</head>
<body>
<div id="BarraTopo"></div>
<p class="UserStat">Bem-vindo, <?php echo($user['nome']); ?>.</p>
<img class="UserImg" src="<?php echo($user["foto"]); ?>" />
<div class="CineLogo"><font size="7">Cine</font><font size="4"><sub>[Beta!]</sub></font></div>
</body>
</html>