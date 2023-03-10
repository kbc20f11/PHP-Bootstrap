<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container">
    <a class="navbar-brand" href="index.php"><?= SITE_NAME ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <?php if(is_login()) : ?> <!-- ログインしているときの表示 -->
        <li class="nav-item mx-2">
            <p class="navbar-text"><?= h(get_login_user_name()) . 'さん、ようこそ' ?></p>
        </li>   
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt" aria-hidden="true"></i> ログアウト</a>
        </li>
      <?php else : ?> <!-- ログインしていないときの表示 -->
        <li class="nav-item">
          <a class="nav-link" href="register.php">登録</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">ログイン</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>