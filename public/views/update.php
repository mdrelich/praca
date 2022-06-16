<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<div class="form">
  <h2>Aktualizuj profil</h2>

  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($error)): ?>
        <div class="error">
          <p><?php echo $error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="text" name="user_username" value="<?php echo $user_data->user_username; ?>" disabled>
    </div>
    <div class="form-group">
      <input type="text" name="user_email" value="<?php echo $user_data->user_email; ?>" placeholder="Email">
    </div>
    <div class="form-group">
      <input type="submit" name="update" value="Aktualizuj">
    </div>
  </form>
</div>

<div class="form">
  <h2>Zmień hasło</h2>

  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($password_error)): ?>
        <div class="error">
          <p><?php echo $password_error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="password" name="confirm_password" placeholder="Stare hasło">
    </div>
    <div class="form-group">
      <input type="password" name="new_password" placeholder="Nowe hasło">
    </div>
    <div class="form-group">
      <input type="password" name="confirm_new_password" placeholder="Wpisz ponownie nowe hasło">
    </div>
    <div class="form-group">
      <input type="submit" name="change_password" value="Zmień">
    </div>
  </form>
</div>

<div class="form">
  <h2>Usuń profil</h2>

  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($delete_error)): ?>
        <div class="error">
          <p><?php echo $delete_error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <input type="password" name="user_password" placeholder="Wpisz hasło">
    </div>
    <div class="form-group">
      <input type="submit" name="delete_profile" value="Usuń :(">
    </div>
  </form>
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>