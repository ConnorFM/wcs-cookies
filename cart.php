<?php require 'inc/head.php'; ?>
<?php if(!isset($_SESSION['loginname']))
{
  header('Location:index.php');
}
$compteur = array_count_values($_SESSION['cart']);

?>
<section class="cookies container-fluid">
    <div class="row">
      <?php foreach ($compteur as $key => $value) { ?>
        <li><?= $value . ' ' . $key; ?></li></br>

      <?php

      }


      ?>


    </div>
</section>
<?php require 'inc/foot.php'; ?>
