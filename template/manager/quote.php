<?php
  unset($quote, $text_1, $text_2);
  
  $quote = $field['quote'];
  $text_1 = $field['text_1'];
  $text_2 = $field['text_2'];
?>

<div class="flex flex-col gap-8">
  <p class="text-quote-m lg:text-quote italic">
    <?= $quote; ?>
  </p>
  <?php if (($text_1 !== '') || ($text_2 !== '')) : ?>
  <div class="flex flex-col gap-4">
    <p class="text-m font-bold">
      <?= $text_1; ?>
    </p>
    <p class="text-m">
      <?= $text_2; ?>
    </p>
  </div>
  <?php endif; ?>
</div>

<?php unset($quote, $text_1, $text_2); ?>
