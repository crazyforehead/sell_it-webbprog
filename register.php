<?php 
include_once("inc/reginclude.php");
include_once("inc/Connstring.php");

$tablePost = "kund";
$fname = "";
$ename ="";
$pnr = "";
$adress = "";
$stad = "";
$tel = "";
$email = "";
$password = "";
$Emptyfeedback = "";
$error = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$emailX = "";


if(!empty($_POST)) {


	$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
	$ename = isset($_POST['ename']) ? $_POST['ename'] : '';
	$adress = isset($_POST['adress']) ? $_POST['adress'] : '';
	$pnr = isset($_POST['pnr']) ? (int)$_POST['pnr'] : '';
	$stad = isset($_POST['stad']) ? $_POST['stad'] : '';
	$tel = isset($_POST['tel']) ? (int)$_POST['tel'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';

	  		$checkEmail = <<<END
		SELECT email FROM {$tablePost} WHERE email='{$email}';

END;
	$res = $mysqli->query($checkEmail) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error);

	if($res->num_rows > 0){
				$emailX = "Denna email är redan registrerad";
			
	}elseif(!preg_match($email_exp,$email)) {
 
    $error = 'E-post adressen är ej korrekt angiven.<br />';


  }else{
	

	if ($fname == '' || $ename == ''|| $adress == ''|| $pnr== ''|| $tel == ''|| $email == ''|| $password == '') {
		$Emptyfeedback = 'Ett eller flera fält verkar vara tomma';
	
	}else{
		
		$fname = utf8_encode($mysqli->real_escape_string($fname)); 
		$ename = utf8_encode($mysqli->real_escape_string($ename)); 
		$adress = utf8_encode($mysqli->real_escape_string($adress));
		$pnr = utf8_encode($mysqli->real_escape_string($pnr));
		$stad = utf8_encode($mysqli->real_escape_string($stad));   
		$tel = utf8_encode($mysqli->real_escape_string($tel)); 
		$email = utf8_encode($mysqli->real_escape_string($email)); 
		$password = utf8_encode($mysqli->real_escape_string($password)); 


		$query = <<<END
		INSERT INTO {$tablePost}(fname, ename, adress, pnr, stad, tel, email, password) 
		VALUES('{$fname}', '{$ename}', '{$adress}', '{$pnr}', '{$stad}', '{$tel}', '{$email}', '{$password}'); 
END;

		$res = $mysqli->query($query) or die("Could not query database" . $mysqli->errno . " : " . $mysqli->error);


session_start(); 
session_regenerate_id(); 
 
$_SESSION["fname"] = $fname; 
$_SESSION["ename"] = $ename; 
 
header("Location: index.php");

		} 
	}	
}

$content = <<<END

<br>
	<div id="regbox">
<h1 class="headline">Registrering</h1> <a href="index.php" class="step">Index</a>
	
<hr style="clear:both;"/>
<br>
		<div class="regTop">
		<img src="img/profilbild1.png" class="regProfil">
		<form action="register.php" name="reg" method="post">
			<input type="text" id="fname" name="fname" placeholder="Förnamn" value="{$fname}">
			<input type="text" id="ename" name="ename" placeholder="Efternamn" value="{$ename}">
			<input type="text" id="adress" name="adress" placeholder="Adress" value="{$adress}">
			<input type="text" id="pNr" name="pnr" placeholder="PostNummer" value="{$pnr}">
			<input type="text" id="stor" name="stad" placeholder="Stad" value="{$stad}">
			<input type="text" id="stor" name="tel" placeholder="Telefonnummer" value="{$tel}"><br>
			<input type="text" id="p1" name="email" placeholder="E-post adress" value="{$email}"><p>{$error} {$emailX}</p>
			<input type="text" name="emailcheck" onfocus="validateMail(document.getElementById('p1'), this);" oninput="validateMail(document.getElementById('p1'), this);" id="p2"  placeholder="Upprepa din E-post adress" value=""><br>
			<input type="password" id="p3"  name="password" placeholder="Lösenord" value="{$password}"><br>
			<input type="password" id="p4" value="" onfocus="validatePass(document.getElementById('p3'), this);" oninput="validatePass(document.getElementById('p3'), this);" name="passcheck" placeholder="Uppreda ditt lösenord" ><br>
			
			<p>{$Emptyfeedback}</p>

			<input type="submit" name="submit" id="submit" value="Nästa">
		</form>
		<div>
	</div>	

				

				



END;
echo $head;
echo $content;
echo $footer;
 ?>

