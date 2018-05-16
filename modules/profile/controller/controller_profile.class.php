<?php
class controller_profile {
  function __construct() {
      include (LIBS . 'password.php');
    }
    function begin() {
        require_once(VIEW_PATH_INC . "header.php");
        loadView('modules/profile/view/', 'profile.html');
        require_once(VIEW_PATH_INC . "footer.html");
        require_once(VIEW_PATH_INC . "menu.php");
    }
    function register() {
        require_once(VIEW_PATH_INC . "header.php");
        loadView('modules/login/view/', 'signup.html');
        require_once(VIEW_PATH_INC . "footer.html");
        require_once(VIEW_PATH_INC . "menu.php");
    }
    function logout() {
        require_once(VIEW_PATH_INC . "header.php");
        loadView('modules/login/view/', 'logout.html');
        require_once(VIEW_PATH_INC . "footer.html");
        require_once(VIEW_PATH_INC . "menu.php");
    }
    function register_user() {
        $error = array('username' => false, 'email' => false,);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $user = $_POST;
        $arrValue = loadModel(MODEL_LOGIN, "login_model", "count", $username);
        if($arrValue[0]['number']==0){
          $arrValue = loadModel(MODEL_LOGIN, "login_model", "count_email", $email);
          if($arrValue[0]['number']==0){
            $user['pass'] = password_hash($_POST['pass'], PASSWORD_BCRYPT);
            $arrValue = loadModel(MODEL_LOGIN, "login_model", "register", $user);
          }else{
            $error['email']=true;
          }
        }else{
          $error['username']=true;
          $arrValue = loadModel(MODEL_LOGIN, "login_model", "count_email", $email);
          if($arrValue[0]['number']==0){

          }else{
            $error['email']=true;
          }
        }
        echo json_encode($error);
        exit();
    }
    function login() {
        $error = array('username' => false, 'pass' => false, 'id' => false, 'avatar' => false,);
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $user = $_POST;
        $arrValue = loadModel(MODEL_LOGIN, "login_model", "count", $username);
        if($arrValue[0]['number']==0){
          $error['username']=true;
        }else{
          $arrValue = loadModel(MODEL_LOGIN, "login_model", "user", $user);
          $error['id'] = $arrValue[0]['id'];
          $error['avatar'] = $arrValue[0]['avatar'];
          $arrValue = password_verify($user['pass'], $arrValue[0]['pass']);
          if(!$arrValue){
            $error['pass']=true;
          }
        }
        echo json_encode($error);
        exit();
    }
}
