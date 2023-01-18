<div class="<?= $args['class']; ?>">
  <div class="max-w-1176px mx-auto">
    <h3 class="pb-20 px-20 text-h2-m lg:text-h2 font-bold">
      <?= $args['title']; ?>
    </h3>
  </div>
  
  <div class="swiper swiper-refs relative">
    <div class="swiper-wrapper">
      <?php foreach ($args['refs'] as $ref): ?>
        <div class="swiper-slide h-auto p-20 w-auto border-l border-y border-solid border-heavy-metal border-opacity-10 last:border-r">
          <div class="lg:w-[487px] flex flex-col gap-8">
            <div class="h-[15rem] lg:h-[35rem] w-full">
              <img
                src="<?= $ref['img']['url']; ?>"
                alt="<?= $ref['img']['alt']; ?>"
                class="w-full h-full object-cover"
              >
            </div>
            <div class="flex gap-8">
              <?php if ($ref['logo']) : ?>
              <div class="w-[4rem]">
                <img
                  src="<?= $ref['logo']['url']; ?>"
                  alt="<?= $ref['logo']['alt']; ?>"
                  class="w-full h-auto"
                >
              </div>
              <?php endif; ?>
              <div class="flex-1 flex flex-col gap-2">
                <p class="text-m font-bold">
                  <?= $ref['title']; ?>
                </p>
                <?php if ($ref['text']) : ?>
                <p class="text-s">
                  <?= $ref['text']; ?>
                </p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
    <div class="flex justify-center gap-12 mt-12">
      <div class="swiper-refs-button-prev w-12 h-12 flex justify-center items-center">
        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5703 7.6665H2.81031" stroke="#1D1D1B" stroke-miterlimit="10"/>
          <path d="M6.66992 3.80664L2.80992 7.66664L6.66992 11.5266" stroke="#1D1D1B" stroke-miterlimit="10"/>
        </svg>
      </div>
      <div class="swiper-refs-button-next w-12 h-12 flex justify-center items-center">
        <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.429688 7.6665H13.1897" stroke="#1D1D1B" stroke-miterlimit="10"/>
          <path d="M9.33008 3.80664L13.1901 7.66664L9.33008 11.5266" stroke="#1D1D1B" stroke-miterlimit="10"/>
        </svg>
      </div>
    </div>
  </div>
</div>