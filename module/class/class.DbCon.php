<?
class DbCon
{
	var	$DB_SERVER		= "localhost";
	var	$DB_LOGIN		= "hanpass";
	var $DB_PASSWORD	= "i-hp0816";
	var $DB				= "hanpass";

	function getConnection(){
		$dbconn = mysql_connect($this->DB_SERVER, $this->DB_LOGIN, $this->DB_PASSWORD) 
				  or die("����Ÿ���̽� ���ῡ �����߽��ϴ�.");
		$status = mysql_select_db($this->DB, $dbconn);

//		mysql_query('set names euckr');

		if($status)
			return $dbconn;
		else
			return $status;
	}
}

$db = new DbCon();
$dbconn = $db->getConnection();




function stripslashes_fnc($varData){
	$varData = is_array($varData) ? array_map('stripslashes_fnc', $varData) : stripslashes($varData); 
    return $varData;
}
 
function mysql_real_escape_string_fnc($varData){
	$varData = is_array($varData) ? array_map('mysql_real_escape_string_fnc', $varData) : mysql_real_escape_string($varData); 
    return $varData;
}

function sql_injection($varData){
	if(get_magic_quotes_gpc()){
		$varData = stripslashes_fnc($varData);
	}

	$varData = mysql_real_escape_string_fnc($varData);

	return $varData;
}

$_POST = sql_injection($_POST);
$_GET = sql_injection($_GET);
$_SERVER = sql_injection($_SERVER);
$_FILES = sql_injection($_FILES);

foreach($_POST as $k => $v){
	${$k} = $v;
}

foreach($_GET as $k => $v){
	${$k} = $v;
}

foreach($_SERVER as $k => $v){
	${$k} = $v;
}
foreach($_FILES as $k => $v){
	${$k} = $v;
}

include "/home/hanpass/www/module/query_func.php";
?>