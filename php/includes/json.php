<?php

function getData($jsonFileName) {
  $jsonPath = '../data/' . $jsonFileName . '.json';
  $data = file_get_contents($jsonPath);
  $data = json_decode($data, true);
  return $data;
}

function updateData($jsonFileName, $json) {
  $jsonPath = '../data/' . $jsonFileName . '.json';
  $jsonData = json_encode($json, JSON_PRETTY_PRINT);
  
  if (file_put_contents($jsonPath, $jsonData)) {
    return true;
  }
      
  return false;
}

?>