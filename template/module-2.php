<div class="flex flex-col gap-8">
  <?php if ($args['img']) : ?>
    <img
      src="<?= $args['img']['url']; ?>"
      alt="<?= $args['img']['alt']; ?>"
      class="<?= $args['classImg']; ?> w-full h-auto"
    >
  <?php endif; ?>
  <?php if ($args['title']) : ?>
  <h3 class="text-h4 font-bold">
    <?= $args['title']; ?>
  </h3>
  <?php endif; ?>
  <?php if ($args['text']) : ?>
  <p class="text-m">
    <?= $args['text']; ?>
  </p>
  <?php endif; ?>
  <?php if ($args['cta']) : ?>
  <div>
    <a
      class="link n3 text-s font-bold"
      href="<?= $args['cta']['url']; ?>"
    >
      <?= $args['cta']['title']; ?>
    </a>
  </div>
  <?php endif; ?>
</div>