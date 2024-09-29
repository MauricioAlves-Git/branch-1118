<?php
          
    require_once("../config.php");
    require_login(); // Exige que o usuário esteja logado    
  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="container mt-5"> 
      <?php include('mensagem.php'); ?>
      <div class="row mt-4"> 
        <div class="col-md-12">
          <div class="card mt-3"> 
            <div class="card-header">
              <h4> Lista de Cursos e Inscritos
                <a href="index.php" class="btn btn-primary float-end">Voltar</a>
              </h4>
            </div>

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
