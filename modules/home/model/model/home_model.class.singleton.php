<?php
//echo json_encode("products model class");
//exit;
$path = $_SERVER['DOCUMENT_ROOT'] . '/Hotel/';
define('SITE_ROOT', $path);
require(SITE_ROOT . "modules/home/model/BLL/home_bll.class.singleton.php");

class home_model {
    private $bll;
    static $_instance;

    private function __construct() {
        $this->bll = home_bll::getInstance();
    }

    public static function getInstance() {
        if (!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function obtain_best_offers(){
        return $this->bll->obtain_best_offers_BLL();
    }
    /*
    public function create_hotel_offer($arrArgument) {
        return $this->bll->create_hotel_BLL($arrArgument);
    }

    public function obtain_countries($url){
        return $this->bll->obtain_countries_BLL($url);
    }

    public function obtain_provinces(){
        return $this->bll->obtain_provinces_BLL();
    }

    public Function obtain_cities($arrArgument){
        return $this->bll->obtain_cities_BLL($arrArgument);
    }*/

}
