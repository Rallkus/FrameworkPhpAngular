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

//model contact
define('FUNCTIONS_CONTACT', SITE_ROOT . 'modules/contact/utils/');
define('MODEL_PATH_CONTACT', SITE_ROOT . 'modules/contact/model/');
define('DAO_CONTACT', SITE_ROOT . 'modules/contact/model/DAO/');
define('BLL_CONTACT', SITE_ROOT . 'modules/contact/model/BLL/');
define('MODEL_CONTACT', SITE_ROOT . 'modules/contact/model/model/');
define('CONTACT_JS_PATH', SITE_PATH . 'modules/contact/view/js/');
define('CONTACT_LIB_PATH', SITE_PATH . 'modules/contact/view/lib/');
define('CONTACT_IMG_PATH', SITE_PATH . 'modules/contact/view/img/');
define('CONTACT_CSS_PATH', SITE_PATH . 'modules/contact/view/css/');

//model list
define('UTILS_LIST', SITE_ROOT . 'modules/list/utils/');
//define('PRODUCTS_JS_LIB_PATH', SITE_PATH . 'modules/home/view/lib/');
define('LIST_VIEW_PATH', SITE_ROOT . 'modules/list/view/');
define('LIST_JS_PATH', SITE_PATH . 'modules/list/view/js/');
define('MODEL_PATH_LIST', SITE_ROOT . 'modules/list/model/');
define('DAO_LIST', SITE_ROOT . 'modules/list/model/DAO/');
define('BLL_LIST', SITE_ROOT . 'modules/list/model/BLL/');
define('MODEL_LIST', SITE_ROOT . 'modules/list/model/model/');

//amigables
define('URL_AMIGABLES', TRUE);
