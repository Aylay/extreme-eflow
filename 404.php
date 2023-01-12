<?php
/*
* Template Name: 404
*/

$title = get_field('404_title', 'options');
$intro = get_field('404_intro', 'options');
$block_1 = get_field('404_block_1', 'options');
$block_2 = get_field('404_block_2', 'options');

get_header();
?>

<div class="max-w-1176px mx-auto text-center lg:py-52">
  <h1 class="font-bold lg:text-[246px] leading-[32rem] linear-text bg-text">
    <?= $title; ?>
  </h1>
  <p class="text-m">
    <?= $intro; ?>
  </p>
</div>

<?php
  get_template_part(
    'template/module',
    '1',
    array(
      'title'   => $block_1['mod1_title'],
      'img'     => $block_1['mod1_img'],
      'text'    => $block_1['mod1_text'],
      'cta'     => $block_1['mod1_cta'],
      'class'   => 'pb-40'
    )
  );
?>

<?php
  get_template_part(
    'template/module',
    '3',
    array(
      'title'       => $block_2['mod3_title'],
      'services'    => $block_2['mod3_services'],
      'class'       => 'pb-40',
      'classBlock'  => 'h-[40rem]',
      'classBlockImg'  => 'max-w-[12.5rem]'
    )
  );
?>

<?php get_footer(); ?>
