<?php
// セッションが張られていない場合はセッション開始
if(!isset($_SESSION)){
    session_start();
}

// ログインしているかチェックする関数
function is_login() {
    if (isset($_SESSION['user'])) {
        return true;
    }

    return false;
}

// ログインしているユーザーのユーザー名を取得する関数
function get_login_user_name() {
    if (isset($_SESSION['user'])) {
        $name = $_SESSION['user']['name'];

        // if (7 < mb_strlen($name)) {
        //     $name = mb_substr($name, 0, 7) . "...";
        // }

        return $name;
    }

    return "";
}

// ログインしているユーザーのユーザーIDを取得する
function get_login_user_id() {
    if (isset($_SESSION['user'])) {
        return $_SESSION['user']['id'];
    }

    return null;
}