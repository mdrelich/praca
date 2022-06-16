<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<div class="form">
  <h2>Rejestracja</h2>
  
  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($error)): ?>
        <div class="error">
          <p><?php echo $error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="text" name="user_username" placeholder="Nazwa Użytkownika">
    </div>
    <div class="form-group">
      <input type="text" name="user_email" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="password" name="user_password" placeholder="Hasło">
    </div>
    <div class="form-group">
      <input type="password" name="confirm_password" placeholder="Potwierdź hasło">
    </div>
    <div class="form-group">
      <input type="submit" name="signup" value="Zarejestruj">
    </div>
    <div class="form-group">
      <p>Posiadasz już konto? <a href="<?php echo BASE_URL; ?>/login">Zaloguj się</a></p>
    </div>
  </form>
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>