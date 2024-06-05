<?php

  require_once 'dbconfig.php';  
  header('Content-Type: application/json');

  spotify();

  function spotify() {
    $client_id ="a65263ae5f1444c9a96b3f8eac2e1745";
    $client_secret = "561aae810ec9419ea9b2311b5f294efa";

    // ACCESS TOKEN
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://accounts.spotify.com/api/token' );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Basic '.base64_encode($client_id.':'.$client_secret))); 
    $token=json_decode(curl_exec($ch), true);
    curl_close($ch);    

 
    $url = 'https://api.spotify.com/v1/search?type=playlist&q=hardworkout';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$token['access_token'])); 
    $res=curl_exec($ch);
    curl_close($ch);

    if (curl_errno($ch)) {
      echo json_encode(['error' => curl_error($ch)]);
      return;
    }

    echo $res;
}
?>