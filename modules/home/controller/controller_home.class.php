<?php
session_start();

include ($_SERVER['DOCUMENT_ROOT'] . "/Hotel/utils/common.inc.php");


if(isset($_POST['op']) && $_POST['op']=="list"){
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrValue = loadModel($path_model, "home_model", "obtain_best_offers");
  echo json_encode($arrValue);
}
if(isset($_POST['op']) && $_POST['op']=="scroll"){
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrArgument = $_POST['page'];
  $arrValue = loadModel($path_model, "home_model", "obtain_scroll", $arrArgument);
  echo json_encode($arrValue);
}
if(isset($_POST['op']) && $_POST['op']=="details"){
  $arrArgument=$_POST['id'];
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrValue = loadModel($path_model, "home_model", "obtain_offer", $arrArgument);
  echo json_encode($arrValue);
}
if(isset($_POST['op']) && $_POST['op']=="name"){
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrValue = loadModel($path_model, "home_model", "obtain_names");
  echo json_encode($arrValue);
}
if(isset($_POST['op']) && $_POST['op']=="search"){
  $path_model = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/modules/home/model/model/';
  $arrArgument=$_POST['nombre'];
  $arrValue = loadModel($path_model, "home_model", "list_offers", $arrArgument);
  echo json_encode($arrValue);
}
