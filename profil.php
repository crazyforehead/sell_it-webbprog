<?php 
include_once("inc/include.php"); 
include_once("inc/connstring.php");

$kundid = $_SESSION["kundId"];
$fname = $_SESSION["fname"];
$ename = $_SESSION["ename"];
$email = $_SESSION["email"];
$tablePost = "kund";
$adress = "";
$pnr = "";


$query = <<<END
	SELECT adress, pnr, stad
	FROM {$tablePost}
	WHERE kundId = '{$kundid}';
END;

$res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . $mysqli->error);

	$row = $res->fetch_object();

$adress = $row->adress;
$pnr = $row->pnr;

$content = <<<END
	{$kundid}
	{$pnr} <br>
	{$adress}
END;

echo $head;
echo $search;
echo $content;
echo $footer;
 ?>