<?php include('inc/header.php'); ?>

<div class="gallery">

<?php
$dir = 'assets/images/';
include('inc/imageCategories.php');

foreach ($categories as $key => $category):
?>

  <div class="category animated slideInUp delay-<?php echo $key/1.3; ?>s">
    <h1 class="title"><?php echo $category; ?></h1>
    <div class="images">

    <?php
      $images = array_diff(scandir($dir.$category), ['.', '..']);
      foreach ($images as $key => $image):
    ?>
      <div class="image">
        <a href="<?php echo $dir . $category . '/' . $image ?>" data-lightbox="<?php echo $category; ?>">
          <img src="<?php echo $dir . $category . '/' . $image ?>" alt="">
        </a>
        <div class="cover">
          click to enlarge
        </div>
      </div>

    <?php
      endforeach;
    ?>

    </div>
  </div>

<?php
endforeach;
?>

</div>

<?php include('inc/footer.php'); ?>
