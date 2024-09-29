//url de acesso
  $remotemoodle="xxxxxx"; //MOODLE_URL - endereço do Moodle
  $url=$remotemoodle . '/webservice/restjson/server.php';

  //parametros a ser passado ao webservice
  $param=array();
  $param['wstoken']="xxxxxxxx"; //token de acesso ao webservice
  $param['wsfunction']="core_user_get_users";
  
  //filtro de usuário
  $param['criteria'][0]['key']='username';
  $param['criteria'][0]['value']='xxxx';
  
	//converter array para json
  $paramjson = json_encode($param);

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $paramjson);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  //$result =json_decode($result);
  
  //imprimindo resultado
  print_r($result);