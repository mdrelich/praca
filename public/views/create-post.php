<?php require_once VIEW_ROOT . '/includes/header.php'; ?>
<div class="form">
  <h2>Utwórz post</h2>

  <form action="<?php $self; ?>" method="POST">
    <div class="form-group">
      <?php if(isset($error)): ?>
        <div class="error">
          <p><?php echo $error; ?></p>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-group">
      <select name="post_category">
        <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <input type="text" name="post_title" placeholder="Tytuł wątku">
    </div>
    <div class="form-group">
      <textarea name="post_text" placeholder="Opis"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" name="create_post" value="Stwórz wątek">
    </div>
  </form>
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>