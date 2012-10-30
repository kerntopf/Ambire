<?php
include('bdconfs.php');
$redir = '<script language="javascript">window.location="/index.php"; </script>';
if(!isset($_COOKIE['ulog']))
	{
	echo($redir);
	}
if($user['auth'] < 30)
	{
	echo($redir);
	}
?>