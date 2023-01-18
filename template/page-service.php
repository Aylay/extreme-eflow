<?php
/*
* Template Name: Service
*/

get_header();

$header = get_field('header');
$main_img = get_field('main_img');
$blocks = get_field('blocks');
$block_2 = get_field('block_2');
$blocks_3 = get_field('blocks_3');
$block_4 = get_field('block_4');
$block_5 = get_field('bloc_5');
$block_6 = get_field('block_6');

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
  get_template_part(
    'template/module',
    '6',
    array(
      'img'   => $main_img['mod6_img'],
      'logo'   => $main_img['mod6_logo']
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
  if ($block_2 && $block_2['mod1_img']) {
    get_template_part(
      'template/module',
      '1',
      array(
        'title'   => $block_2['mod1_title'],
        'img'     => $block_2['mod1_img'],
        'text'    => $block_2['mod1_text'],
        'cta'     => $block_2['mod1_cta'],
        'class'   => 'pb-40'
      )
    );
  }
?>

<?php
  if ($blocks_3) {
    foreach ($blocks_3 as $key => $otherBlock) {
      get_template_part(
        'template/module',
        '7',
        array(
          'block'       => $otherBlock,
          'nbBlocks'    => count($blocks_3) - 1,
          'actualBlock' => $key
        )
      );
    }
  }
?>

<?php
  if ($block_4 && $block_4['mod5_logos']) {
    get_template_part(
      'template/module',
      '5',
      array(
        'title'       => $block_4['mod5_title'],
        'logos'       => $block_4['mod5_logos'],
        'class'       => 'pb-40'
      )
    );
  }
?>

<?php
  if ($block_5 && $block_5['mod8_refs']) {
    get_template_part(
      'template/module',
      '8',
      array(
        'title'       => $block_5['mod8_title'],
        'refs'       => $block_5['mod8_refs'],
        'class'       => 'pb-40'
      )
    );
  }
?>

<?php
  if ($block_6 && $block_6['mod1_img']) {
    get_template_part(
      'template/module',
      '1',
      array(
        'title'   => $block_6['mod1_title'],
        'img'     => $block_6['mod1_img'],
        'text'    => $block_6['mod1_text'],
        'cta'     => $block_6['mod1_cta'],
        'class'   => 'pb-40'
      )
    );
  }
?>

<?php get_footer(); ?>
