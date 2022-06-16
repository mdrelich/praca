<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<?php require_once VIEW_ROOT . '/includes/sidebar.php'; ?>

<div class="posts">
  <div class="post">
    <h3><?php echo $post_data->post_title; ?></h3>
    <h6>Przez
      <?php if($post_data->user_username): ?>
        <a href="<?php echo BASE_URL; ?>/profile/<?php echo $post_data->user_username; ?>"><?php echo $post_data->user_username; ?></a>
      <?php else: ?>
        [Deleted]
      <?php endif; ?>

      w <?php echo date('l j F Y H:i', strtotime($post_data->post_date)); ?>
    </h6>
    <p><?php echo $post_data->post_text; ?></p>
  </div>
  
  <?php if(isset($_SESSION['user'])): ?>
    <div class="submit-comment">
      <div class="form">
        <h2>Komentarze</h2>

          <div class="comments">
              <?php foreach($comments as $comment): ?>
                  <div class="post">
                      <h6>Przez
                          <?php if($comment->user_username): ?>
                              <a href="<?php echo BASE_URL; ?>/profile/<?php echo $comment->user_username; ?>"><?php echo $comment->user_username; ?></a>
                          <?php else: ?>
                              [Deleted]
                          <?php endif; ?>

                          w <?php echo date('l j F Y H:i', strtotime($comment->comment_date)); ?>
                      </h6>
                      <p><?php echo $comment->comment_text; ?></p>
                  </div>
              <?php endforeach; ?>
          </div>

        <form action="<?php $self; ?>" method="POST">
          <div class="form-group">
            <?php if(isset($error)): ?>
              <div class="error">
                <p><?php echo $error; ?></p>
              </div>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <textarea name="comment_text" placeholder="Napisz komentarz"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="create_comment" value="Wyślij">
          </div>
        </form>
      </div>
    </div>
  <?php endif; ?>


</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>