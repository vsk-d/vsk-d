<?php require_once '_parts/head.php'; ?>
    <div class="wrapper">
      <div class="main-content">
        <div class="login-container">
          <div class="modal-wrapper login-wrapper">
            <div class="modal-header">
              <h2 class="modal-title">Авторизуйтесь</h2></div>
            <div class="modal-body">
              <form id="login" role="form" class="form">
                <div class="server-mes error-mes"></div>
                <div class="server-mes success-mes"></div>
                <div class="form-group">
                  <label for="login" class="label">Логин</label>
                  <input id="name" type="text" name="login" placeholder="Введите логин" qtip-content="Вы не ввели логин" class="input">
                </div>
                <div class="form-group">
                  <label for="password" class="label">Пароль</label>
                  <input id="password" type="password" name="password" placeholder="Введите пароль" qtip-content="Вы не ввели пароль" class="input">
                </div>
                <button type="submit" class="btn">Войти</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php require_once '_parts/footer.php' ?>