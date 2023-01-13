<?php
  unset($cta);

  $cta = $field['cta'];
?>

<div>
  <a
    href="<?= $cta['url']; ?>"
    title="<?= $cta['title']; ?>"
    class="relative cta <?php if ($cta['target'] === '_blank') : ?>pl-6 pr-16<?php else : ?>px-6<?php endif; ?>"
    <?php if ($cta['target'] === '_blank') : ?>
    target="_blank"
    <?php endif; ?>
  >
    <span>
      <?= $cta['title']; ?>
    </span>

    <?php if ($cta['target'] === '_blank') : ?>
    <svg
      width="30"
      height="31"
      viewBox="0 0 30 31"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
      class="absolute top-1/2 right-4 transform -translate-y-1/2"
    >
      <path d="M12.1172 17.9019L20.2481 9.5" stroke-miterlimit="10"/>
      <path d="M17.0723 9.5H20.2484V12.782" stroke-miterlimit="10"/>
      <path d="M19.114 15.749V21.3284H8.70898V10.5798H13.4732" stroke-miterlimit="10"/>
    </svg>
    <?php endif; ?>
  </a>
</div>

<?php unset($cta); ?>
