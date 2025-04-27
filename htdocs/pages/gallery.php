<?php include('../includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Slideshow Gallery</title>
  <link rel="stylesheet" href="../global/main.css">
</head>

<body>

<div class="gallery-title">
  <h2>Slideshow Gallery</h2>
</div>

<div class="custom-gallery-container">
  <?php for ($i = 1; $i <= 10; $i++): ?>
    <div class="custom-slide">
      <div class="numbertext"><?= $i ?> / 10</div>
      <img src="/assets/images/image<?= $i ?>.jpg" alt="Slide <?= $i ?>">
    </div>
  <?php endfor; ?>

  <a class="custom-prev" onclick="changeSlide(-1)">❮</a>
  <a class="custom-next" onclick="changeSlide(1)">❯</a>

  <div class="custom-caption-container">
    <p id="custom-caption">Image 1</p>
  </div>

  <div class="custom-thumbnail-row">
    <?php for ($i = 1; $i <= 10; $i++): ?>
      <img class="custom-thumbnail" src="/assets/images/image<?= $i ?>.jpg" onclick="currentSlide(<?= $i ?>)" alt="Thumb <?= $i ?>">
    <?php endfor; ?>
  </div>
</div>

<script src="/js/gallery.js">
  
</script>

</body>
</html>
<?php include('../includes/footer.php'); ?>
