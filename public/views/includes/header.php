<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/public/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/public/img/favicon/favicon-16x16.png">
  <link href="<?php echo BASE_URL; ?>/public/css/style.css" rel="stylesheet">
  <script src="<?php echo BASE_URL; ?>/public/js/main.js" defer></script>
  <title><?php echo isset($page_title) ? 'Portal Motoryzacyjny - ' . $page_title : 'Portal Motoryzacyjny'; ?></title>
</head>
<body>
  <div class="header">
    <h1><a href="<?php echo BASE_URL; ?>">Portal Motoryzacyjny</a></h1>

    <ul>
      <?php if(isset($_SESSION['user'])): ?>
          <li><a href="<?php echo BASE_URL; ?>/shoutbox"><img src="<?php echo BASE_URL; ?>/public/img/shoutbox.png" alt="All" height="32"></a></li>
        <li><a href="<?php echo BASE_URL; ?>/all"><img src="<?php echo BASE_URL; ?>/public/img/all.svg" alt="All"></a></li>
        <li><img class="toggle-menu" src="<?php echo BASE_URL; ?>/public/img/menu.svg" alt="Toggle Menu"></li>

        <div class="menu">
          <ul>
            <a href="<?php echo BASE_URL; ?>/profile/<?php echo $_SESSION['user']; ?>"><li>Twoj Profil</li></a>
            <a href="<?php echo BASE_URL; ?>/update"><li>Aktualizuj Profil</li></a>
            <a href="<?php echo BASE_URL; ?>/logout"><li>Wyloguj</li></a>
          </ul>
        </div>
      <?php else: ?>
        <li><a href="<?php echo BASE_URL; ?>/signup"><button>Rejestracja</button></a></li>
        <li><a href="<?php echo BASE_URL; ?>/login"><button>Logowanie</button></a></li>
      <?php endif; ?>
    </ul>
  </div>