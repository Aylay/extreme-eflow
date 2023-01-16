<div class="max-w-1176px max-lg:px-16 mx-auto grid max-lg:grid-cols-1 lg:grid-cols-2 py-20 lg:py-40 border-b border-solid border-heavy-metal border-opacity-10<?php if ($args['nbBlocks'] === $args['actualBlock']) : ?> border-b-0<?php endif; ?>">
  <h2 class="lg:pl-20 lg:pr-40 text-h2-m lg:text-h2 font-bold">
    <?= $args['block']['block_mod7_title']; ?>
  </h2>
  <div class="lg:pl-20 max-lg:pt-16 pt-4">
    <?php
    foreach($args['block']['block_mod7_manager_content']['content_manager'] as $field) {
      include(get_template_directory().'/template/manager/'.$field['acf_fc_layout'].'.php');
    }
    ?>
  </div>
</div>
