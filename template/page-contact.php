<?php
/*
* Template Name: Contact
*/

get_header();

$title = get_field('title');
$intro = get_field('intro');
$form_id = get_field('form_id');

?>

<div class="max-w-1176px mx-auto text-center py-14 lg:py-28 flex flex-col gap-8 max-lg:px-16">
  <h1 class="header-title">
    <?= $title; ?>
  </h1>
  <?php if ($intro) : ?>
    <p class="text-m">
      <?= $intro; ?>
    </p>
  <?php endif; ?>
</div>

<div class="max-w-4xl w-full mx-auto max-lg:px-16">
  <?php echo do_shortcode('[formidable id=' . $form_id . ' title=false description=false]'); ?>
</div>

<?php get_footer(); ?>
