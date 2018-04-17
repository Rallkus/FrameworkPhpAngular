<?php
//SITE_ROOT
$path = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/';
define('SITE_ROOT', $path);

//SITE_PATH
define('SITE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/Hotel/');

//CSS
define('CSS_PATH', SITE_PATH . 'view/assets/css/');

//JS
define('JS_PATH', SITE_PATH . 'view/assets/js/');

//IMG
define('IMG_PATH', SITE_PATH . 'view/img/');

//logs

define('PRODUCTION', true);

//model
define('MODEL_PATH', SITE_ROOT . 'model/');
//view

define('VIEW_PATH_INC', SITE_ROOT . 'view/inc/');

//modules
define('MODULES_PATH', SITE_ROOT . 'modules/');
//resources
define('RESOURCES', SITE_ROOT . 'resources/');
//media
define('MEDIA_PATH', SITE_ROOT . 'media/');
//utils
define('UTILS', SITE_ROOT . 'utils/');

//model hotel
define('FUNCTIONS_HOTEL', SITE_ROOT . 'modules/hotel/utils/');
define('MODEL_PATH_HOTEL', SITE_ROOT . 'modules/hotel/model/');
define('DAO_HOTEL', SITE_ROOT . 'modules/hotel/model/DAO/');
define('BLL_HOTEL', SITE_ROOT . 'modules/hotel/model/BLL/');
define('MODEL_HOTEL', SITE_ROOT . 'modules/hotel/model/model/');
define('HOTEL_JS_PATH', SITE_PATH . 'modules/hotel/view/js/');

//model home
define('UTILS_HOME', SITE_ROOT . 'modules/home/utils/');
//define('PRODUCTS_JS_LIB_PATH', SITE_PATH . 'modules/home/view/lib/');
define('HOME_VIEW_PATH', SITE_ROOT . 'modules/home/view/');
define('HOME_JS_PATH', SITE_PATH . 'modules/home/view/js/');
define('MODEL_PATH_HOME', SITE_ROOT . 'modules/home/model/');
define('DAO_HOME', SITE_ROOT . 'modules/home/model/DAO/');
define('BLL_HOME', SITE_ROOT . 'modules/home/model/BLL/');
define('MODEL_HOME', SITE_ROOT . 'modules/home/model/model/');
//define('JS_PATH_NEWS', SITE_PATH . 'modules/news/view/js/');

//amigables
define('URL_AMIGABLES', TRUE);
