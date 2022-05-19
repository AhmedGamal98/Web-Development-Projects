<?php
  
  require_once('../include/connection.php');
  session_start(); 
   
 
  
  
  $_SESSION['des'] = $_POST['description'];
  $_SESSION['pr'] = $_POST['problem'];

  
  
  $data_array = array($_POST['description']);
  
 

  // create & initialize a curl session
    $curl = curl_init();

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "api.example.com");

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);

    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    function callAPI($method, $url, $data){
      $curl = curl_init();
      switch ($method){
         case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
         case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data)
               curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
            break;
         default:
            if ($data)
               $url = sprintf("%s?%s", $url, http_build_query($data));
      }
      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         'APIKEY: 111111111111111111111',
         'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE:
      $result = curl_exec($curl);
      if(!$result){ header('location: ../student/create.php?do=model');}
      curl_close($curl);
      return $result;
   }
  

  $make_call = callAPI('POST', 'http://127.0.0.1:5000/predict/', json_encode($data_array));
  $recommended_unit ="";
  $response = json_decode($make_call, true);
  
  for($x = 2; $x < strlen($response)-2; $x++) {
    $recommended_unit =  $recommended_unit . $response[$x];
  
  }
  /* $response = array($response['unit']);
  echo $response['unit']; */
  
  echo $recommended_unit;
  

  if($recommended_unit != ""){
    header('location: ../student/recommend_unit.php?unit='.$recommended_unit.'');
  }

?>