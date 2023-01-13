<?php

get_header();

$header = get_field('block_1');
$blocks_2 = get_field('blocks_2');

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
  foreach ($blocks_2 as $key => $firstBlock) {
    get_template_part(
      'template/module',
      '7',
      array(
        'block'     => $firstBlock,
        'nbBlocks'  => count($blocks_2) - 1,
        'actualBlock' => $key
      )
    );
  }
?>

<?php get_footer(); ?>