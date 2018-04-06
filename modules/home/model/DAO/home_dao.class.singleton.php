<?php
//echo json_encode("products_dao.class.singleton.php");
//exit;

class homeDAO {
    static $_instance;

    private function __construct() {

    }

    public static function getInstance() {
        if(!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    public function obtain_best_offers($db){
      $sql = "SELECT * FROM oferta_hotel ORDER BY `oferta_hotel`.`estrellas` DESC LIMIT 6";
      $stmt = $db->ejecutar($sql);
      return $db->listar($stmt);
    }

}//End productDAO
