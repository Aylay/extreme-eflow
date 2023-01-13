<?php
/*
* Template Name: A Propos
*/

get_header();

$header = get_field('header');
$blocks = get_field('blocks');
$block_2 = get_field('block_2');
$block_3 = get_field('block_3');

?>

<?php
  get_template_part(
    'template/module',
    '4',
    array(
      'title'   => $header['mod4_title'],
      'more'   => $header['mod4_more']
    )
  );
?>

<?php
  foreach ($blocks as $key => $firstBlock) {
    get_template_part(
      'template/module',
      '7',
      array(
        'block'     => $firstBlock,
        'nbBlocks'  => count($blocks) - 1,
        'actualBlock' => $key
      )
    );
  }
?>

<?php
  if ($block_2) {
    get_template_part(
      'template/module',
      '3',
      array(
        'title'       => $block_2['mod3_title'],
        'services'    => $block_2['mod3_services'],
        'class'       => 'pb-40',
        'classBlock'  => 'h-[40rem]',
        'classBlockImg'  => 'max-h-[5.5rem]'
      )
    );
  }
?>

<?php
  if ($block_3) {
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
  }
?>

<?php get_footer(); ?>
