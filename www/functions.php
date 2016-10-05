<?php 
function db($host,$db_user,$db_password,$db_name){
	$db = mysql_connect($host,$db_user,$db_password);
	
	  if(!$db){
		  exit("Renseignez bien vos donnees");
	  }
	  
	 if(!mysql_select_db($db_name)){
		 exit(mysql_error());
	 }
	 
	 mysql_query("SET NAMES UTF8"); 
}
function clear_str($action){
	return trim(strip_tags($action));
}

function render($path,$params=array()){
	extract($params);
	ob_start();
	
	if(!include($path.".php")){
		exit("ce template n'existe pas");
	}
	return ob_get_clean();
}

function registration ($post){
			$nom = clear_str($post['reg_nom']);
			$prenom = clear_str($post['reg_prenom']);
			$telephone = clear_str($post['reg_telephone']);
			$genre = $post['reg_genre'];
			$e_mail = clear_str($post['reg_e_mail']);
			$password = trim($post['reg_pass']);
			$confirm_pass =  trim($post['reg_conf_pass']);
			$ville = $post['reg_city'];
			$type = $post['reg_type'];
			$oblast = $post['reg_region'];
			
			 $msg = '';
			 
			 if(empty($nom)){
				 $msg .="Veuiller entrez votre nom svp ! <br/>";
			 }
			 
			 if(empty($prenom)){
				 $msg .="Veuiller entrez votre prenom svp ! <br/>";
			 }
			 
			 if(empty($telephone)){
				 $msg .="Veuiller entrez votre numero de telephone  svp ! <br/>";
			 }
			 
			 if(empty($genre)){
				 $msg .="Renseigner votre genre svp ! <br/>";
			 }
			 
			 if(empty($e_mail)){
				 $msg .="Veuiller entrez votre mail  svp ! <br/>";
			 }
			 
			 if(empty($password)){
				 $msg .="Mot de passe incorrect ! <br/>";
			 }
			 
			  if(empty($confirm_pass)){
				 $msg .="votre mot de passe ne correspond pas ! <br/>";
			 }
			 
			  if(empty($ville)){
				 $msg .="Renseigner votre ville svp ! <br/>";
			 }
			 
			  if(empty($type)){
				 $msg .="Renseigner votre type svp ! <br/>";
			 }
			  if(empty($oblast)){
				 $msg .="Renseigner votre region svp ! <br/>";
			 }
			 
			 if($msg){
				  $_SESSION['reg']['nom'] = $nom;
				  $_SESSION['reg']['prenom'] = $prenom;
				  $_SESSION['reg']['genre'] = $genre;
				   $_SESSION['reg']['telephone'] = $telephone;
				  $_SESSION['reg']['e_mail'] = $e_mail;
				  $_SESSION['reg']['ville'] = $ville;
				  $_SESSION['reg']['type'] =  $type;
				  $_SESSION['reg']['oblast'] = $oblast;
				  
				  return $msg;
				  
			 }
			 
			 if($confirm_pass == $password){
				 $sql = "SELECT user_id FROM user WHERE e_mail = '%s'";
				 $sql = sprintf($sql, mysql_real_escape_string($e_mail));
				 $result = mysql_query($sql);
				 
				 if(mysql_num_rows($result)>0){
				  $_SESSION['reg']['nom'] = $nom;
				  $_SESSION['reg']['prenom'] = $prenom;
				  $_SESSION['reg']['genre'] = $genre;
				  $_SESSION['reg']['ville'] = $ville;
				  $_SESSION['reg']['type'] = $type;
				  $_SESSION['reg']['oblast'] = $oblast;
				  
				  return "cette adresse e-mail existe deja";
				 }
				 
				 $password = md5($password);
				 $hashe = md5(microtime());
				 
				 $query = "INSERT INTO user (nom,
				                           prenom,
										   telephone,
										   genre,
										   e_mail,
										   password,
										   oblast,
										   ville,
										   type,
										   hashe,)										   
				                           VALUES 
										   ('%s',
										   '%s',
										   '%s',
										   '%s',
										   '%s',
										   '%s',
										   '%s',
										   '%s',
										   '%s',										   
										   $hashe
										   )";
										   
				$query = sprintf($query,mysql_real_escape_string($nom),mysql_real_escape_string($prenom),mysql_real_escape_string($telephone),
				                        mysql_real_escape_string($genre),mysql_real_escape_string($e_mail),$password,mysql_real_escape_string($oblast),
										mysql_real_escape_string($ville),mysql_real_escape_string($type),$hashe);
    
                 $result2 = mysql_query($query);
				 if(!$result2){
                  $_SESSION['reg']['nom'] = $nom;
				  $_SESSION['reg']['prenom'] = $prenom;
				  $_SESSION['reg']['genre'] = $genre;
				  $_SESSION['reg']['telephone'] = $telephone;
				  $_SESSION['reg']['e_mail'] = $e_mail;
				  $_SESSION['reg']['ville'] = $ville;
				  $_SESSION['reg']['type'] =  $type;
				  $_SESSION['reg']['oblast'] = $oblast;
				  return "une erreur a ete produite lors de votre inscription".mysql_error();
				 }else{
					 $header= '';
					 $header .= "From: Admin<mangadinho@yahoo.fr>\r\n";
					 $header .="Content-type:text/plain; charset=utf8";
					 $theme = "Inscription";
					 
					 $mail_body = "Merci d'etre enregistre dans notre site.confirmer votre enregistrement en cliquant sur le lien suivant:".SITE_DIR."?action=registration&hash=".$hashe;
					  mail($e_mail,$theme,$mail_body,$header);
					  
					  return TRUE;
				 }
			 }else{
				  $_SESSION['reg']['nom'] = $nom;
				  $_SESSION['reg']['prenom'] = $prenom;
				  $_SESSION['reg']['genre'] = $genre;
				  $_SESSION['reg']['telephone'] = $telephone;
				  $_SESSION['reg']['e_mail'] = $e_mail;
				  $_SESSION['reg']['ville'] = $ville;
				  $_SESSION['reg']['type'] =  $type;
				  $_SESSION['reg']['oblast'] = $oblast;
				  
				  return "vous n\'avez pas bien confirme votre compte";
			 }
}
?>