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

<div class="menu-block absolute z-10 inset-0 w-full h-screen bg-heavy-metal bg-opacity-20 opacity-0 invisible transition-all before:w-full lg:before:w-1/2 before:absolute before:top-0 before:right-0 before:h-screen before:bg-white before:transform before:translate-x-full before:transition-transform before:content-['']">
  <div class="max-w-1512px mx-auto relative z-10 flex justify-end">
    <div class="w-full lg:w-1/2 pr-16 lg:pr-20">
      <div class="py-16 lg:py-20 flex justify-end items-center header-open-menu">
        <div class="cursor-pointer flex items-center gap-3 burger-block">
          <p class="text-m font-bold">
            Fermer
          </p>
          <div class="w-14 h-14">
            <svg
              class="burger transition-transform duration-400 select-none"
              viewBox="0 0 100 100"
            >
              <path
                class="line stroke-heavy-metal top"
                d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"
              />
              <path
                class="line stroke-heavy-metal middle"
                d="m 70,50 h -40"
              />
              <path
                class="line stroke-heavy-metal bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"
              />
            </svg>
          </div>
        </div>
      </div>
      <div class="mt-12 lg:px-[15%] flex flex-col gap-16">
        <?php wp_nav_menu(array(
          'menu' => 'Header - Caché',
          'menu_class' => 'menu-cache flex flex-col'
        )); ?>
        <?php wp_nav_menu(array(
          'menu' => 'Header - Visible',
          'menu_class' => 'menu-cache flex flex-col'
        )); ?>
      </div>
    </div>
  </div>
</div>

<!--[if lt IE 9]>
<script src="<?php bloginfo('template_directory');?>/assets/js/html5shiv.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/respond.min.js"></script>
<![endif]-->

<script defer src="<?php bloginfo('template_directory');?>/assets/js/jquery.min.js"></script>
<script defer src="<?php bloginfo('template_directory');?>/assets/js/menu.js"></script>


<?php
  if (is_page_template('template/page-service.php')) {
    $block_5 = get_field('bloc_5');
    if ($block_5) {
?>
  <script defer src="<?php bloginfo('template_directory');?>/assets/js/swiper.min.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      const swiper = new Swiper('.swiper-refs', {
        // Optional parameters
        // loop: true,
        slidesPerView: "auto",
        spaceBetween: 0,

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-refs-button-next',
          prevEl: '.swiper-refs-button-prev',
        }
      });
    });
  </script>
<?php
    }
  }
?>

<?php wp_footer(); ?>

</body>
</html>
