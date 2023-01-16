<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <?php if (get_field('code_tag_manager', 'options')): ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','<?php echo the_field('code_tag_manager', 'options'); ?>');</script>
  <!-- End Google Tag Manager -->
<?php endif; ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- STYLES -->
<?php
  if (is_page_template('template/page-service.php')) {
    $block_5 = get_field('bloc_5');
    if ($block_5) {
?>
  <link href="<?php bloginfo('template_directory');?>/assets/css/swiper.min.css" rel="stylesheet">
<?php
    }
  }
?>
<link href="<?php bloginfo('template_directory');?>/assets/css/styles.css" rel="stylesheet">
<!-- end STYLES -->

<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory');?>/assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory');?>/assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory');?>/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory');?>/assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory');?>/assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_directory');?>/assets/img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory');?>/assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<!-- end FAVICON -->

<?php wp_head(); ?>

</head>

<?php
  $logo = get_field('logo', 'options');
?>
<body class="relative">
  <div class="max-w-1512px mx-auto">

    <?php if (get_field('code_tag_manager', 'options')) {
      include "_tagmanager.php";
    } ?>

    <header class="max-lg:px-16 py-16 lg:p-20 flex justify-between items-center">
      <a
        href="<?= get_home_url(); ?>"
        title="<?= get_bloginfo('name'); ?>"
      >
        <img
          src="<?= $logo['url']; ?>"
          alt="<?= $logo['alt']; ?>"
          class="max-w-[7rem] lg:max-w-[10rem] w-full h-auto"
        >
      </a>
      <div class="flex gap-16 items-center menu">
        <?php wp_nav_menu(array(
          'menu' => 'Header - Visible',
          'menu_class' => 'menu-nav hidden lg:flex'
        )); ?>
        <div class="cursor-pointer flex items-center gap-3 burger-block">
          <p class="text-m font-bold">
            Menu
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
    </header>

    <main role="main">
