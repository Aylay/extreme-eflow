<?php

get_header();

$header = get_field('header');
$block_1 = get_field('block_1');
$block_2 = get_field('block_2');
$block_3 = get_field('block_3');
$block_4 = get_field('block_4');
$block_5 = get_field('block_5');
$block_6 = get_field('block_6');

?>

<?php
  get_template_part(
    'template/module',
    '4',
    array(
      'title'   => $header['mod4_title'],
      'more'   => $header['mod4_more'],
    )
  );
?>

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

<?php
  get_template_part(
    'template/module',
    '1',
    array(
      'title'   => $block_3['mod1_title'],
      'img'     => $block_3['mod1_img'],
      'text'    => $block_3['mod1_text'],
      'cta'     => $block_3['mod1_cta'],
      'class'   => 'pb-40'
    )
  );
?>

<?php
  get_template_part(
    'template/module',
    '3',
    array(
      'title'       => $block_4['mod3_title'],
      'services'    => $block_4['mod3_services'],
      'class'       => 'pb-40',
      'classBlock'  => 'h-[28rem]',
      'classBlockImg'  => 'max-w-[3rem]'
    )
  );
?>

<?php
  get_template_part(
    'template/module',
    '5',
    array(
      'title'       => $block_5['mod5_title'],
      'logos'    => $block_5['mod5_logos'],
      'class'       => 'pb-40'
    )
  );
?>

<?php
  get_template_part(
    'template/module',
    '1',
    array(
      'title'   => $block_6['mod1_title'],
      'img'     => $block_6['mod1_img'],
      'text'    => $block_6['mod1_text'],
      'cta'     => $block_6['mod1_cta'],
      'class'   => ''
    )
  );
?>




<?php get_footer(); ?>