<?php
  $logosNb = count($args['logos']);

  if ($logosNb % 2 == 0) {
    $cols = $logosNb / 2;
  } else {
    $cols = ($logosNb + 1) / 2;
  }
?>

<div class="max-w-1176px mx-auto <?= $args['class']; ?>">
  <h3 class="pb-8 lg:pb-20 lg:px-20 text-h2-m lg:text-h2 font-bold max-lg:px-16">
    <?= $args['title']; ?>
  </h3>

  <div class="grid max-lg:grid-cols-2 grid-cols-<?= $cols; ?>">
    <?php foreach ($args['logos'] as $logo) : ?>
      <div class="p-14 lg:p-20 flex justify-center items-center">
        <img
          src="<?= $logo['url'] ?>"
          alt="<?= $logo['alt'] ?>"
          class="max-h-20 h-full w-auto"
        />
      </div>
    <?php endforeach; ?>
  </div>
</div>
