<div class="max-w-1176px mx-auto text-center py-24 lg:py-52 max-lg:px-16">
  <h1 class="header-title lg:px-20">
    <?= $args['title']; ?>
  </h1>
  <?php if ($args['more']) : ?>
    <div class="flex justify-center gap-2 items-center mt-14 lg:mt-28">
      <p class="text-s font-bold text-heavy-metal text-opacity-50">En savoir plus</p>
      <img
        src="<?= get_template_directory_uri(); ?>/assets/img/svg/scroll.svg"
        alt="picto Scroll"
        class="max-w-[3rem] w-full h-auto"
      />
    </div>
  <?php endif; ?>
</div>