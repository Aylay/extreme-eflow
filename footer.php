<?php
  $logo = get_field('logo', 'options');
  $footer_text = get_field('footer_text', 'options');
  $footerMenuClasses = 'menu-footer flex flex-col gap-4';
?>

</main>

<footer class="max-w-1176px mx-auto flex mt-24 lg:mt-52 mb-12 lg:mb-24">
  <div class="flex-1 flex flex-col gap-8">
    <img
      src="<?= $logo['url']; ?>"
      alt="<?= $logo['alt']; ?>"
      class="max-w-[7.3rem] w-full h-auto"
    >
    <p class="lg:max-w-[70%] w-full text-s">
      <?= $footer_text; ?>
    </p>
  </div>

  <div class="flex-1 flex justify-between gap-8">
    <?php wp_nav_menu(array(
      'menu' => 'Footer 1',
      'menu_class' => $footerMenuClasses
    )); ?>
    <?php wp_nav_menu(array(
      'menu' => 'Footer 2',
      'menu_class' => $footerMenuClasses
    )); ?>
    <?php wp_nav_menu(array(
      'menu' => 'Footer 3',
      'menu_class' => $footerMenuClasses
    )); ?>
  </div>
</footer>

<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/assets/js/html5shiv.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/respond.min.js"></script>
<![endif]-->

<script defer src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
<script defer src="<?php bloginfo('template_directory');?>/assets/js/menu.js"></script>

<?php wp_footer(); ?>

</body>
</html>
