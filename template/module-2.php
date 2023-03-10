<div class="flex flex-col gap-8">
  <?php if ($args['img']) : ?>
    <div>
      <img
        src="<?= $args['img']['url']; ?>"
        alt="<?= $args['img']['alt']; ?>"
        class="<?= $args['classImg']; ?> h-full w-auto"
      >
    </div>
  <?php endif; ?>
  <?php if ($args['title']) : ?>
  <h3 class="text-h4-m lg:text-h4 font-bold">
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
      class="link n2 text-cta2 text-s font-bold"
      href="<?= $args['cta']['url']; ?>"
    >
      <?= $args['cta']['title']; ?>
    </a>
  </div>
  <?php endif; ?>
</div>