<?php require_once '_parts/head.php'; ?>
    <div class="wrapper">
      <div class="main-content">
        <?php require_once '_parts/header.php' ?>
        <div class="container">
          <?php require_once '_parts/navbar.php' ?>
          <div class="variable-content">
            <?php require_once 'pages/'.$page.'.php' ?>
        </div>
      </div>
    </div>
    </div>
<?php require_once '_parts/footer.php'; ?>