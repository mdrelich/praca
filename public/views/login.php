<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<div class="form">
  <h2>Logowanie</h2>
  
  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($error)): ?>
        <div class="error">
          <p><?php echo $error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="text" name="user_username" placeholder="Nazwa użytkownika">
    </div>
    <div class="form-group">
      <input type="password" name="user_password" placeholder="Hasło">
    </div>
    <div class="form-group">
      <input type="submit" name="login" value="Zaloguj">
    </div>
    <div class="form-group">
      <p>Nie posiadasz konta? <a href="<?php echo BASE_URL; ?>/signup">Zarejestruj się</a></p>
    </div>
  </form>
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>