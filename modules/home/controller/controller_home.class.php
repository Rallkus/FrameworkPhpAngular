<?php
session_start();

include ($_SERVER['DOCUMENT_ROOT'] . "/Hotel/utils/common.inc.php");


if(isset($_POST['op']) && $_POST['op']=="list"){
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrValue = loadModel($path_model, "home_model", "obtain_best_offers");
  echo json_encode($arrValue);
}
if(isset($_POST['op']) && $_POST['op']=="details"){
  $arrArgument=$_POST['id'];
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrValue = loadModel($path_model, "home_model", "obtain_offer", $arrArgument);
  echo json_encode($arrValue);
}
