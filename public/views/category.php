<?php require_once VIEW_ROOT . '/includes/header.php'; ?>

<?php require_once VIEW_ROOT . '/includes/sidebar.php'; ?>
<div class="posts">
    <div class="heading">
        <h1 style="color: darkslategrey;font-style:oblique"><?php echo $category_data->category_name; ?></h1>
    </div>
  <?php foreach($posts as $post): ?>
    <div class="post">
      <h3><a href="<?php echo BASE_URL; ?>/post/<?php echo $post->post_id; ?>"><?php echo $post->post_title; ?></a></h3>
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
</div>

<?php require_once VIEW_ROOT . '/includes/footer.php'; ?>