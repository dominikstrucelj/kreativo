<?php
include("../php/functions.php");

// Check for empty fields
if(empty($_POST['ime'])  		||
   empty($_POST['naslov']) 		||
   empty($_POST['posta']) 		||
   empty($_POST['eposta']) 		||
   empty($_POST['kolicina'])    ||
   
   !filter_var($_POST['eposta'],FILTER_VALIDATE_EMAIL)
   
   
   ){
	echo "Napaka";
	return false;
   }
  else{
	
$ime = $_POST['ime'];
$naslov = $_POST['naslov'];
$posta = $_POST['posta'];
$eposta = $_POST['eposta'];
$kolicina = $_POST['kolicina'];
$sporocilo = $_POST['sporocilo'];
$novice = $_POST['novice'];

dodajNarocilo($ime, $naslov, $posta, $eposta, $kolicina, $sporocilo, $novice);
	
// Mail za nas
$to = 'dominik.strucelj@gmail.com'; 
$email_subject = "Novo naročilo";
$email_body = "Dobili smo novo naročilo za CD.\n\n"."Podatki:\nIME IN PRIIMEK: $ime\nNASLOV: $naslov\nPOŠTA: $posta\nE-MAIL:$eposta\nKOLIČINA: $kolicina\nSPOROCILO: $sporocilo\nNOVICE: $novice";
$headers = "From: Naročilnica Kreativo<noreply@kreativo.si>\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $eposta";	
mail($to,$email_subject,$email_body,$headers);

//MAIL ZA NAROČNIKA
$to1 = $eposta; 
$email_subject1 = "Potrditev naročila albuma KREATIVO";
$email_body1 = "Pozdravljeni! \n\n Zahvaljujemo se vam za vaše naročilo albuma KREATIVO. \n\n"."Vaši podatki:\nIME IN PRIIMEK: $ime\nNASLOV: $naslov\nPOŠTA: $posta\nE-MAIL: $eposta\nKOLIČNA: $kolicina\n\n\nCD vam bomo poslali v roku treh delovnih dni preko Pošte Slovenije.\nPlačilo je po povzetju. \n\nZahvaljujemo se vam za zaupanje in vam želimo obilo užitkov ob poslušanju naše glasbe. \n\nKREATIVO";
$headers1 = "From: KREATIVO<info@kreativo.si>"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers1 .= "Reply-To: KREATIVO<info@kreativo.si>";	
mail($to1,$email_subject1,$email_body1,$headers1);



return true;
}			
?>