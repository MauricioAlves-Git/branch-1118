<?php

 	require_once("../config.php");
 	 
	 //forçar login para acessar esse código
         require_login(); 
         
 	//receber parármetro 
        $param=  new stdClass();
        $firstname= required_param('firstname',PARAM_TEXT);
        $lastname= required_param('lastname',PARAM_TEXT);
        $username= required_param('username',PARAM_TEXT);
        $email= required_param('email',PARAM_TEXT);
        $password= $username;
         
 		
 	//verificar se login já existe
 	$existLogin=$DB->record_exists('user', array('username'=> $username));
 	if($existLogin)echo "Login já existe <br>"; 
 	  
 	 //verificar se e-mail já existe
 	$existEmail=$DB->record_exists('user', array('email'=>$email));
 	if($existEmail)echo "E-mail já existe<br>"; 
 	
 	
 	//criar um objeto usuário
    	$newuser=  new stdClass();
    	
    	$newuser->id='';
    	$newuser->auth='manual';
    	$newuser->confirmed=1;
		$newuser->mnethostid=1; 	 
    	$newuser->username=$username;
    	$newuser->password=hash_internal_user_password($password);
    	$newuser->firstname=$firstname;
    	$newuser->lastname=$lastname;
    	$newuser->email=$email;
    	
    	$newuser->timecreated=time();
    
 	//Cadastrar usuário 
 	if(!$existLogin && !$existEmail){
 		$newuser->id = $DB->insert_record('user', $newuser);
    	echo "Cadastro efetuado com sucesso. O id o usuário recém cadastrado é: ".$newuser->id;
 	 }
 	 
 	
?>
