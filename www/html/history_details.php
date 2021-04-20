<?php
require_once '../conf/const.php';
require_once MODEL_PATH . 'functions.php';
require_once MODEL_PATH . 'user.php';
require_once MODEL_PATH . 'item.php';
require_once MODEL_PATH . 'cart.php';

session_start();

if(is_logined() === false){
  redirect_to(LOGIN_URL);
}

$db = get_db_connect();
$user = get_login_user($db);

if(is_admin($user) === false){
  $history_details = get_user_histories($db, $user['user_id']);
} else {
  $history_details = get_admin_histories($db);
}

$token = get_csrf_token();

include_once VIEW_PATH . 'history_details_view.php';