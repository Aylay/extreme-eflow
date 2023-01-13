<?php
  unset($gallery);
  
  $gallery = $field['gallery'];
?>
<div class="grid grid-cols-3 border-l border-t border-heavy-metal border-opacity-10 border-solid">
  <?php foreach ($gallery as $img) : ?>
    <div class="h-40 flex justify-center items-center border-b border-r border-heavy-metal border-opacity-10 border-solid">
      <img
        src="<?= $img['url'] ?>"
        alt="<?= $img['alt'] ?>"
        class="max-h-20 h-full w-auto"
      >
    </div>
  <?php endforeach; ?>
</div>
<?php unset($gallery); ?>
