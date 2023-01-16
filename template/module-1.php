<div class="flex max-lg:flex-col max-lg:gap-8 items-center <?= $args['class']; ?>">
  <div class="flex-1 relative lg:h-[45rem]">
    <img
      src="<?= $args['img']['url']; ?>"
      alt="<?= $args['img']['alt']; ?>"
      class="w-full h-full object-cover"
    >
  </div>
  
  <div class="flex-1 lg:pl-40 max-lg:px-16">
    <div class="max-w-[437px]">
      <?php if ($args['title']) : ?>
      <h3 class="text-h2-m lg:text-h2 font-bold linear-text bg-text">
        <?= $args['title']; ?>
      </h3>
      <?php endif; ?>
      <?php if ($args['text']) : ?>
      <p class="text-m mt-8">
        <?= $args['text']; ?>
      </p>
      <?php endif; ?>
      <?php if ($args['cta']) : ?>
      <a
        class="link n2 mt-16 text-cta2 font-bold"
        href="<?= $args['cta']['url']; ?>"
      >
        <?= $args['cta']['title']; ?>
      </a>
      <?php endif; ?>
    </div>
  </div>

</div>