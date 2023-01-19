<?php
  $logosNb = count($args['logos']);

  if ($logosNb > 4) {
    if ($logosNb % 2 == 0) {
      $cols = $logosNb / 2;
    } else {
      $cols = ($logosNb + 1) / 2;
    }
  } else {
    $cols = $logosNb;
  }
?>

<div class="max-w-1176px mx-auto <?= $args['class']; ?>">
  <h3 class="pb-8 lg:pb-20 lg:px-20 text-h2-m lg:text-h2 font-bold max-lg:px-16">
    <?= $args['title']; ?>
  </h3>

  <div class="grid max-lg:grid-cols-2 grid-cols-<?= $cols; ?>">
    <?php foreach ($args['logos'] as $logo) : ?>
      <div class="p-14 lg:p-20 flex justify-center items-center">
        <div class="h-20 w-full picture-height">
          <img
            src="<?= $logo['url'] ?>"
            alt="<?= $logo['alt'] ?>"
            class="h-full w-auto"
          />
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
