<?php
//I use this to avoid header problems
ob_start();
session_start();
$_SESSION['module'] = "";
$_SESSION['result_prodpic'] = array();

require_once("view/inc/header.html");

require_once("paths.php");

//include ('utils/utils.inc.php');

if (!isset($_GET['module'])){
    require_once("modules/home/view/home.html");
} else if((isset($_GET['module'])) && (!isset($_GET['view']))){
    require_once("modules/".$_GET['module']."/controller/controller_" .$_GET['module']. ".class.php");
}

if ( (isset($_GET['module'])) && (isset($_GET['view'])) ){
    require_once("modules/".$_GET['module']."/view/".$_GET['view'].".html");
    //require_once("modules/".$_GET['module']."/view/".$_GET['view'].".php");
}

require_once("view/inc/footer.html");
require_once("view/inc/menu.html");
