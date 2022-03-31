<?php
// Show Header and Menu
require_once 'template/header.php';
require_once 'template/menu.php';
?>
<main class="container">
  <div class="bg-light p-5 rounded">
    <h1><?=$number. ' - '.$post['ID']." - ".$post['post_title'];?></h1>
      <p><?=$post['post_content'];?></p>
  </div>
</main>
<?php
require_once 'template/footer.php';
?>
