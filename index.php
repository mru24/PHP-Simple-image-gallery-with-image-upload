<?php include('includes/header.php'); ?>

<div class="gallery">

<?php
$dir = 'assets/images/';
include('includes/imageCategories.php');

foreach ($categories as $category):
?>

  <div class="category">
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

<?php include('includes/footer.php'); ?>
