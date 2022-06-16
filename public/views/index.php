<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<?php require_once VIEW_ROOT . '/includes/sidebar.php'; ?>

<div class="posts">
  <?php if(!$posts): ?>
    <h3 class="message">Nic jeszcze nie zaobserwowałeś/aś :(</h3>
  <?php else: ?>
    <?php foreach($posts as $post): ?>
      <div class="post">
        <h3><a href="<?php echo BASE_URL; ?>/post/<?php echo $post->post_id; ?>"><?php echo $post->post_title; ?></a></h3>
        <h5>w <a href="<?php echo BASE_URL; ?>/category/<?php echo $post->category_id; ?>"><?php echo $post->category_name; ?></a>
        <h6>Przez
        <?php if($post->user_username): ?>
          <a href="<?php echo BASE_URL; ?>/profile/<?php echo $post->user_username; ?>"><?php echo $post->user_username; ?></a>
        <?php else: ?>
          [Deleted]
        <?php endif; ?>

        w <?php echo date('l j F Y H:i', strtotime($post->post_date)); ?>
      </h6>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>