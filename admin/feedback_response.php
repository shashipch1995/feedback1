<?
define('DBNAME', 'feedback');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBHOST', 'localhost');
try{
	$db = new PDO("mysql:host=".DBHOST."dbname=".DBNAME,DBUSER,DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'success'
	catch(PDOException $e){
		echo"Issue ->connection_aborted: " . $e->SendMessage();
	}




?>