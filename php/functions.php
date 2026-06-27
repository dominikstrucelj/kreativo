<?php
$server="localhost";
$database="edumedi_kreativo";
$username="edumedi_kreativo";
$password="kreativo2015";


function dodajNarocilo($ime, $naslov, $posta, $email, $kolicina, $sporocilo, $novice){
	global $server, $database, $username, $password;
	$con=mysql_connect($server,$username,$password);
	mysql_select_db($database) or die( "Unable to select database");
	
	mysql_query("SET NAMES 'utf8'") or die(mysql_error());
	mysql_query("SET lc_time_names = 'sl_SI'") or die(mysql_error());
	
	$name = mysql_real_escape_string($name);  // SECURITY!
	$query="INSERT INTO narocilnica(ime_priimek, ulica_hisa, kraj_posta, email, kolicina, sporocilo, novice) VALUES ('{$ime}','{$naslov}','{$posta}','{$email}', '{$kolicina}', '{$sporocilo}', '{$novice}')";
	mysql_query($query);

} 

function getKoncerti(){
	global $server, $database, $username, $password;
	$con=mysql_connect($server ,$username,$password);
	mysql_select_db($database) or die( "Unable to select database");
	
	mysql_query("SET NAMES 'utf8'") or die(mysql_error());
	mysql_query("SET lc_time_names = 'sl_SI'") or die(mysql_error());
	
	$koncerti=array();
	
	$sql = "SELECT * FROM koncerti WHERE datum >= CURDATE() ORDER BY datum ASC ";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		array_push($koncerti, $row);
	}
	
	return $koncerti;
}

/* function getKoncertInfo($koncert_id){
	global $server, $database, $username, $password;
	$con=mysql_connect($server ,$username,$password);
	mysql_select_db($database) or die( "Unable to select database");
	
	mysql_query("SET NAMES 'utf8'") or die(mysql_error());
	mysql_query("SET lc_time_names = 'sl_SI'") or die(mysql_error());
	
	$koncert_info=array();
	
	$sql = "SELECT * FROM koncert_info WHERE koncert_id='{$koncert_id}'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		array_push($koncert_info, $row);
	}
	
	return $koncert_info;
}
 */
?>