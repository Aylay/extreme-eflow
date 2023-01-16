<div class="max-w-1176px mx-auto grid grid-cols-1 lg:grid-cols-2 <?= $args['class']; ?> items-end max-lg:px-16">
  <h2 class="pb-8 lg:pl-20 lg:pb-20 lg:pr-40 lg:flex flex-col justify-end text-h2-m lg:text-h2 font-bold lg:border-b border-solid border-gallery">
    <?= $args['title']; ?>
  </h2>
  <?php foreach ($args['services'] as $service) : ?>
  <div class="max-lg:h-auto <?= $args['classBlock']; ?> p-10 lg:p-20 service">
    <?php
      get_template_part(
        'template/module',
        '2',
        array(
          'title'     => $service['service']['mod2_title'],
          'img'       => $service['service']['mod2_img'],
          'text'      => $service['service']['mod2_text'],
          'cta'       => $service['service']['mod2_cta'],
          'classImg'  => $args['classBlockImg']
        )
      );
    ?>
  </div>
  <?php endforeach; ?>
</div>
