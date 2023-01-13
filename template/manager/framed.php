<?php
  unset($framed);
  
  $framed = $field['framed'];
  foreach ($framed as $key => $frame) :
?>
<div class="wysiwyg border-x border-solid border-heavy-metal border-opacity-10 p-8 border-t<?php if ($key === (count($framed) - 1)) : ?> border-b<?php endif; ?>">
  <?= $frame['content']; ?>
</div>
<?php
  endforeach;
  unset($framed);
?>
