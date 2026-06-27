<?php require_once('Connections/conn_vote.php'); ?>
<?php
$cookie_name = "Kreativo";
$cookie_value = "Vote";



if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1") && isset($_POST['Poll'])) {
  $insertSQL = sprintf("INSERT INTO poll (id, question) VALUES (%s, %s)",
                       GetSQLValueString($_POST['id'], "int"),
                       GetSQLValueString($_POST['Poll'], "text"));

  mysql_select_db($database_conn_vote, $conn_vote);
  $Result1 = mysql_query($insertSQL, $conn_vote) or die(mysql_error());
  

		

	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  
	header('Location:http://glasuj.kreativo.si');
	die();
  
}

$colname_rs_vote = "-1";
if (isset($_GET['recordID'])) {
  $colname_rs_vote = $_GET['recordID'];
}
mysql_select_db($database_conn_vote, $conn_vote);
$query_rs_vote = sprintf("SELECT * FROM poll WHERE id = %s", GetSQLValueString($colname_rs_vote, "int"));
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Kreativo Igramo na Glas</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
if(isset($_COOKIE[$cookie_name])): ?>
	<img src="kreativo_logo.png"/>
     <h1 style="margin-top:3em;">Hvala za tvoj glas!</h1>
<?php else: ?>

	<h2>Katero Kreativo pesem želiš slišati na današnjem koncertu?</h2>
	
	<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
    <ul>
			
		<li>
			<input type="radio" name="Poll" value="domacica" id="Poll_0">
			<label for="Poll_0">Domačica</label>
			<div class="check"></div>	
		</li>
		<li>
			<input type="radio" name="Poll" value="drugace" id="Poll_1">
			<label for="Poll_1">Drugače ne znam</label>
			<div class="check"><div class="inside"></div></div>
		</li>
		<li>
			<input type="radio" name="Poll" value="minute" id="Poll_2">
			<label for="Poll_2">Minute on your lips</label>
			<div class="check"><div class="inside"></div></div>
		</li>
		<li>
			<input type="radio" name="Poll" value="sampoparku" id="Poll_3" />
			<label for="Poll_3">Sam po parku</label>
			<div class="check"><div class="inside"></div></div>
		</li>
		<li>
			<input type="radio" name="Poll" value="zelena" id="Poll_4" />
			<label for="Poll_4">Zelena dežela</label>
			<div class="check"><div class="inside"></div></div>
		</li>
	 </ul>
<div style="text-align:center">
    <input type="submit" name="submit" id="submit" class="btn btn-xl" value="Glasuj" />
    
	<input type="hidden" name="id" value="form1" />
	
	<input type="hidden" name="MM_insert" value="form1" />
	</div>
</form>



<? endif; ?>

</body>
</html>


<?php
mysql_free_result($rs_vote);
?>
