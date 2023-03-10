<?php
// セッションが張られていない場合はセッション開始
if(!isset($_SESSION)){
  session_start();
}

// フラッシュメッセージを表示する関数
function flash($name = '', $message = '', $class = 'alert alert-success'){
  if(!empty($name)){
    // メッセージを作成
    if(!empty($message) && empty($_SESSION[$name])){
      if(!empty( $_SESSION[$name])){
          unset( $_SESSION[$name]);
      }
      if(!empty( $_SESSION[$name.'_class'])){
          unset( $_SESSION[$name.'_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name.'_class'] = $class;
    }
    // メッセージを表示
    elseif(!empty($_SESSION[$name]) && empty($message)){
      $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : 'success';
      echo '<div class="'.$class.'" id="msg-flash">'.$_SESSION[$name].'</div>';
      unset($_SESSION[$name]);
      unset($_SESSION[$name.'_class']);
    }
  }
}