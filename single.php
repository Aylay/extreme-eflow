<?php

$title = get_the_title();

$intro = get_field('intro');

$author = get_field('author');

$texts = get_field('texts');

$qas_text = get_field('qas_text');

$qas = get_field('qas')['qa']['qas'];

$more = get_field('more_articles');
$more_title = $more['title'];
$more_articles = $more['articles'];
$more_bg = $more['pattern_bg'];

get_header();
?>

<div class="mt-16 px-16 lg:px-72">
  <ul itemscope itemtype="https://schema.org/BreadcrumbList">
    <li
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      class="pr-12 relative inline-block"
    >
      <a
        itemprop="item"
        class="font-medium text-14px"
        href="<?php echo get_home_url(); ?>"
        title="<?php echo get_bloginfo('name'); ?>"
      >
        <span itemprop="name">Accueil</span>
      </a>
      <meta itemprop="position" content="1" />
      <img
        src="<?= get_template_directory_uri(); ?>/assets/img/svg/arrow-breadcrumb.svg"
        alt="Fleche Breadcrumb"
        class="absolute right-4 top-1/2 transform -translate-y-1/2"
      />
    </li>
    <li
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      class="pr-12 relative inline-block"
    >
      <a
        itemprop="item"
        class="font-medium text-14px"
        href="<?php echo get_permalink(get_field('blog_page', 'options')[0]); ?>"
        title="Blog"
      >
        <span itemprop="name">Blog</span>
      </a>
      <meta itemprop="position" content="2" />
      <img
        src="<?= get_template_directory_uri(); ?>/assets/img/svg/arrow-breadcrumb.svg"
        alt="Fleche Breadcrumb"
        class="absolute right-4 top-1/2 transform -translate-y-1/2"
      />
    </li>
    <li
      itemprop="itemListElement"
      itemscope
      itemtype="https://schema.org/ListItem"
      class="inline-block"
    >
      <a
        itemprop="item"
        class="font-medium text-14px text-opacity-50 text-black pointer-events-none cursor-default"
        href="<?php the_permalink(); ?>"
        title="<?= $title; ?>"
        aria-current="page"
      >
        <span itemprop="name"><?= $title; ?></span>
      </a>
      <meta itemprop="position" content="3" />
    </li>
  </ul>
</div>

<div class="lg:flex mt-12">
  <div class="lg:w-1/2 pl-16 lg:pl-72 pr-16 lg:pr-12 pb-24 lg:pb-48">
    <h1 class="font-black text-28px lg:text-56px leading-34px lg:leading-67px tracking-2per"><?= $title; ?></h1>
    <div class="content-text-block-sm content-article mt-8 lg:pr-24">
      <?= $intro; ?>
    </div>
    <p class="mt-8 font-semiregular text-14px text-black text-opacity-50">
      Date de publication <?= get_the_date('d/m/y'); ?>
    </p>
    <?php if ($author) : ?>
    <p class="mt-2 text-16px leading-26px font-semiregular tracking-2per flex gap-4">
      <?php $i = 1; foreach ($author as $post): setup_postdata($post); if ($i === 1) : ?>
        <span class="font-black"><?php the_title(); ?></span>
        <span><?php the_field('job'); ?></span>
      <?php endif; $i++; endforeach; wp_reset_postdata(); ?>
    </p>
    <?php endif; ?>
  </div>
  <div class="w-full lg:w-1/2 pt-0 lg:pt-5per">
    <div class="w-full h-full lg:rounded-l-38px lg:overflow-hidden article-image">
      <?php the_post_thumbnail('large', array('class' => 'w-full h-full')); ?>
    </div>
  </div>
</div>

<div class="flex flex-col lg:flex-row justify-center gap-20 px-16 lg:px-72 mt-24 lg:mt-48 relative">
  <div class="flex-1">
    <div class="lg:sticky top-4 rounded-8px border-shark border-opacity-10 border-2 border-solid">
      <ul class="flex flex-col">
        <li class="p-8 lg:p-16 font-black text-16px lg:text-18px leading-26px lg:leading-28px tracking-2per">
          Sommaire
        </li>
        <?php
          foreach ($texts as $text) :
            $title_slug = strtolower(preg_replace('/[^a-zA-Z0-9\.]/', '', $text['title']));
        ?>
          <li
            class="sommaire-article px-8 lg:px-16 py-8 font-medium text-14px border-shark border-opacity-10 border-t-2 border-solid block cursor-pointer"
            data-goTo="<?= $title_slug; ?>"
          >
            <?= $text['title']; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
  <div class="flex-2">
    <?php
      foreach ($texts as $text) :
        $title_slug = strtolower(preg_replace('/[^a-zA-Z0-9\.]/', '', $text['title']));
    ?>
      <h2
        class="font-black text-36px leading-43px tracking-2per"
        id="<?= $title_slug; ?>"
      >
        <?= $text['title']; ?>
      </h2>
      <?php foreach ($text['blocks'] as $block) : ?>
        <?php if ($block['bg_color'] !== '') {
          if ($block['bg_color'] === 'bleu') {
            $bg_color = ' bg-bermuda';
          } elseif ($block['bg_color'] === 'rose') {
            $bg_color = ' bg-illusion';
          } else {
            $bg_color = ' bg-energy-yellow';
          }
        } ?>
        <div
          class="content-text-block content-article mb-32<?php if ($block['bg_color'] !== '') : ?> relative my-10 lg:my-32 py-16 lg:py-48 lg:pl-48 lg:pr-0 specific-content-text-block<?php echo $bg_color; endif; ?>"
        >
          <?php if ($block['bg_color'] !== '') : ?>
            <div class="absolute h-full top-0 bottom-0 right-0 specific-div w-full lg:w-auto">
              <div class="absolute w-100w lg:w-50vw right-1/2 -mr-50vw left-1/2 lg:left-auto -ml-50vw lg:ml-auto h-full<?php echo $bg_color; ?>"></div>
            </div>
            <div class="relative">
          <?php endif; ?>
            <?= $block['text']; ?>
            <?php if ($block['cta'] !== ''): ?>
            <div class="mt-12">
              <a
                class="btn btn-shark"
                href="<?= $block['cta']['url']; ?>"
                <?php if ($block['cta']['target']) { echo "target='_blank'"; } ?>
                title="<?= $block['cta']['title']; ?>"
              >
                <?= $block['cta']['title']; ?>
              </a>
            </div>
          <?php endif; ?>
          <?php if ($block['bg_color'] !== '') : ?></div><?php endif; ?>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</div>

<?php if ($qas) : ?>
<div class="mt-24 lg:mt-48 px-16 lg:px-72">
  <div class="content-text-block mt-20 lg:mt-32 mb-20 lg:mb-32">
    <?= $qas_text; ?>
  </div>
  <?php
    get_template_part('template/block', 'qa', array('qas'	=> $qas));
  ?>
</div>
<?php endif; ?>

<?php if ($more_articles) : ?>
<div class="mt-24 lg:mt-48 bg-pattern-<?= $more_bg; ?> pt-40 lg:pt-72 pb-60">
  <div class="px-16 lg:px-72 text-white">
    <h4 class="mb-20 lg:mb-32 text-36px font-black leading-43px tracking-2per text-white">
      <?= $more_title; ?>
    </h4>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-24">
      <?php foreach ($more_articles as $post) : setup_postdata($post); ?>
      <a
        href="<?php the_permalink(); ?>"
        title="<?php the_title(); ?>"
      >
        <div class="w-auto h-260px overflow-hidden rounded-t-8px relative">
          <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover')); ?>
        </div>
        <div class="rounded-b-8px p-16 border-b-2 border-x-2 border-white border-opacity-10 bg-shark text-white">
          <h4
            class="font-black text-16px lg:text-22px leading-20px lg:leading-32px tracking-3per"
          >
            <?php the_title(); ?>
          </h4>
          <p class="font-semiregular text-16px leading-26px tracking-2per mt-4">
            <?= strip_tags(get_field('intro')); ?>
          </p>
        </div>
      </a>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>
