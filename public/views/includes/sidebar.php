<div class="sidebar">
  <?php if(isset($user_data)): ?>
    <p>Witaj! <a href="<?php echo BASE_URL; ?>/profile/<?php echo $user_data->user_username; ?>"><?php echo $user_data->user_username; ?></a></p>
  <b>Poziom zaawansowania:Mechanik</b>
  <?php else: ?>
    <p>Witaj na portalu motoryzacyjnym! :) <a href="<?php echo BASE_URL; ?>/signup">Zarejestruj sie</a> lub <a href="<?php echo BASE_URL; ?>/login">Zaloguj</a>.</p>
  <?php endif; ?>

  <div class="form">
    <form action="<?php echo BASE_URL; ?>/search" method="POST">
      <div class="form-group search">
        <input type="text" name="s" placeholder="Wyszukiwarka">
        <input type="image" src="<?php echo BASE_URL; ?>/public/img/search.svg" alt="Search">
      </div>
    </form>
  </div>

  <?php if(isset($user_data)): ?>
    <a href="<?php echo BASE_URL; ?>/create-category"><button>Utwórz nową kategorie</button></a>
    <a href="<?php echo BASE_URL; ?>/create-post"><button>Utwórz nowy wątek</button></a>
  <?php endif; ?>
  
  <?php if(isset($category_data)): ?>
    <div class="category-info">
      <h1><?php echo $category_data->category_name; ?></h1>
      <p><?php echo $category_data->category_description; ?></p>

      <?php if(isset($user_data)): ?>
        <?php if(!findValue($follow_data, 'user_following', $user_data->user_id)): ?>
          <a href="<?php echo BASE_URL; ?>/follow/<?php echo $category_data->category_id; ?>"><button>Obserwuj</button></a>
        <?php else: ?>
          <a href="<?php echo BASE_URL; ?>/unfollow/<?php echo $category_data->category_id; ?>"><button>Usuń Obserwację</button></a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if(isset($profile)): ?>
    <div class="category-info">
      <h1><?php echo $profile->user_username; ?> </h1>
    </div>
  <?php endif; ?>

  <?php if(isset($user_data)): ?>
    <h2>Twoje Kategorie</h2>

    <ul>    
      <?php foreach($categories as $category): ?>
        <a href="<?php echo BASE_URL ; ?>/category/<?php echo $category->category_id; ?>"><li><?php echo $category->category_name; ?></li></a>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <a href="<?php echo BASE_URL; ?>/categories"><button>Wszystkie kategorie</button></a>
</div>