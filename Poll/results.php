<?php require_once('Connections/conn_vote.php'); 
error_reporting(E_ERROR | E_PARSE);?>
<?php
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

mysql_select_db($database_conn_vote, $conn_vote);
$query_rs_vote = "SELECT * FROM poll";
$rs_vote = mysql_query($query_rs_vote, $conn_vote) or die(mysql_error());
$row_rs_vote = mysql_fetch_assoc($rs_vote);
$totalRows_rs_vote = mysql_num_rows($rs_vote);

$resultQuestion1 = mysql_query("SELECT * FROM poll WHERE question='domacica'");
$num_rowsQuestion1 = mysql_num_rows($resultQuestion1);

$resultQuestion2 = mysql_query("SELECT * FROM poll WHERE question='drugace'");
$num_rowsQuestion2 = mysql_num_rows($resultQuestion2);

$resultQuestion3 = mysql_query("SELECT * FROM poll WHERE question='minute'");
$num_rowsQuestion3 = mysql_num_rows($resultQuestion3);

$resultQuestion4 = mysql_query("SELECT * FROM poll WHERE question='sampoparku'");
$num_rowsQuestion4 = mysql_num_rows($resultQuestion4);

$resultQuestion5 = mysql_query("SELECT * FROM poll WHERE question='zelena'");
$num_rowsQuestion5 = mysql_num_rows($resultQuestion5);


$percentQuestion1 = ($num_rowsQuestion1 / $totalRows_rs_vote)*100;
$percentQuestion2 = ($num_rowsQuestion2 / $totalRows_rs_vote)*100;
$percentQuestion3 = ($num_rowsQuestion3 / $totalRows_rs_vote)*100;
$percentQuestion4 = ($num_rowsQuestion4 / $totalRows_rs_vote)*100;
$percentQuestion5 = ($num_rowsQuestion5 / $totalRows_rs_vote)*100;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Results</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="rezultati">
	
		<h1>Rezultati glasovanja</h1>
		
		<ul>
			<li>
				<span class="total-votes"><?php //echo $num_rowsQuestion1 ?></span> <h3> Domačica</h3> 
				<div class="results-bar" style="width: <?php echo round($percentQuestion1,2); ?>%;">
					 <?php echo round($percentQuestion1,2); ?>%
				</div>
			</li>
			
			<li>
				<span class="total-votes"><?php //echo $num_rowsQuestion2 ?></span> <h3> Drugače ne znam</h3> 
				<div class="results-bar" style="width: <?php echo round($percentQuestion2,2); ?>%;">
					 <?php echo round($percentQuestion2,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php //echo $num_rowsQuestion3 ?></span><h3>  Minute on your lips</h3> 
				<div class="results-bar" style="width: <?php echo round($percentQuestion3,2); ?>%;">
					 <?php echo round($percentQuestion3,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php //echo $num_rowsQuestion4 ?></span><h3> Sam po parku</h3> 
				<div class="results-bar" style="width: <?php echo round($percentQuestion4,2); ?>%;">
					 <?php echo round($percentQuestion4,2); ?>%
				</div>
			</li>
		
			<li>
				<span class="total-votes"><?php //echo $num_rowsQuestion5 ?></span><h3> Zelena dežela</h3>
				<div class="results-bar" style="width: <?php echo round($percentQuestion5,2); ?>%;">
					 <?php echo round($percentQuestion5,2); ?>%
				</div>
			</li>
		</ul>
	
		<!--h6>Total votes: <?php echo $totalRows_rs_vote ?></h6>
		
		<a href="poll.php">Back to Voting</a-->
	

</div>
</body>
</html>


<?php
mysql_free_result($rs_vote);
?>