<?php get_header(); ?>
<aside class="new">
  <div class="new__content">
    <div class="new__text">
      <h1 class="heading-2"><?php echo get_theme_mod('section_one_title', '<span>NOWOŚCI</span> MATTIK'); ?></h1>
      <p class="new__text-paragraph mt-small"><?php echo get_theme_mod('section_one_text', ''); ?></p>
      <a href="<?php echo get_theme_mod('section_one_button', ''); ?>" class="btn btn--purple mt-small">zobacz</a>
    </div>
  </div>
</aside>
<aside id="o-nas" class="meet">
  <div class="meet__content">
    <div class="meet__box">
      <span class="purple-small">O NAS</span>
      <div class="heading-2"><?php echo get_theme_mod('section_dwa_title', 'Poznaj MATTIK'); ?></div>
      <p class="meet-text-p mt-small">
        <?php echo get_theme_mod('section_dwa_text', ''); ?>
      </p>
      <a href="<?php echo site_url(); ?>/o-nas/" class="btn btn--purple mt-small">DOWIEDZ SIĘ WIĘCEJ</a>
    </div>
    <div class="meet__shape"></div>
    <div class="meet__logo"></div>
  </div>
</aside>
<aside id="blog" class="blog">
  <div class="blog__content">
    <span class="purple-small">MATTIK</span>
    <div class="heading-2 heading-2__light">Nasz Blog</div>
    <div class="blog__latest">
      <?php
      $queryObject = new  Wp_Query(array(
        'showposts' => 3,
        'post_type' => 'post',
        'orderby' => 1,
      ));
      // The Loop
      if ($queryObject->have_posts()) :
        $i = 0;
        while ($queryObject->have_posts()) :
          $queryObject->the_post();
          if ($i == 1) : ?>
            <div class="blog__post mt-large blog__active">
              <div class="blog__post-content"><span class="purple-small">BLOG</span>
                <h3 class="heading-3"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <p class="mt-xsmall"><?= mb_strimwidth(get_the_content(), 0, 180, '[...]') ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn--blog">czytaj</a>
              </div>
            </div>
          <?php endif;
          if ($i != 1) : ?>
            <div class="blog__post mt-large">
              <div class="blog__post-content"><span class="purple-small">BLOG</span>
                <h3 class="heading-3"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                <p class="mt-xsmall"><?= mb_strimwidth(get_the_content(), 0, 180, '[...]') ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn--blog">czytaj</a>
              </div>
            </div>
          <?php endif; ?>

      <?php $i++;
        endwhile;
      endif; ?>

    </div>
    <div class="blog-new__button-wrapper">
      <a class="blog-new__button" href="/blog">ZOBACZ WIĘCEJ</a>
    </div>
  </div>
</aside>
<aside id="klasyfkacja-zapachow" class="classification">
  <div class="classification__content">
    <div class="classification__image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Section_4_Box_Background.png" alt="Background">
    </div>
    <div class="classification__article">
      <span class="purple-small">MATTIK</span>
      <h3 class="heading-2"><?php echo get_theme_mod('section_cztery_title', 'KLASYFIKACJA ZAPACHÓW'); ?></h3>
      <p class="mt-xsmall classification-text-p">
        <?php $class_text = get_theme_mod('section_cztery_text', '');
        echo mb_strimwidth($class_text, 0, 245, '...'); ?>
      </p>
      <a class="btn btn--purple" href="<?php echo site_url(); ?>/klasyfikacja-zapachow/">
        WIĘCEJ
      </a>
    </div>
  </div>
</aside>
<aside id="produkty" class="products">
  <div class="heading-2 center">PRODUKTY</div>
  <div class="products__items">
    <div class="products__item products__item-1 mt-large">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Turkey-icon.png" alt="" class="products__item-flag">
      <span class="heading-3-medium"><a href="/mydlo-pianowe-fomy/">Mydło pianowe Fomy</a></span>
      <a href="<?php echo site_url(); ?>/mydlo-pianowe-fomy/" class="btn btn--purple btn-white-border">WIĘCEJ</a>
    </div>
    <div class="products__item products__item-2 mt-large products__item-active">
      <img src="<?php echo get_template_directory_uri(); ?>/img/USA-icon.png" alt="" class="products__item-flag">
      <span class="heading-3-medium"><a href="/odswiezacze-fre-pro/">Odświeżacze Fre-Pro</a></span>
      <a href="<?php echo site_url(); ?>/odswiezacze-fre-pro/" class="btn btn--purple btn-white-border">WIĘCEJ</a>
    </div>
    <div class="products__item products__item-3 mt-large">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Greece-icon.png" alt="" class="products__item-flag">
      <span class="heading-3-medium"><a href="/spring-air/">Odświeżacze powietrza Spring Air</a></span>
      <a href="<?php echo site_url(); ?>/spring-air/" class="btn btn--purple btn-white-border">WIĘCEJ</a>
    </div>
    <div class="products__item products__item-4 mt-large">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Greece-icon.png" alt="" class="products__item-flag">
      <span class="heading-3-medium"><a href="/spring-air/">Dyfuzja Spring Air</a></span>
      <a href="<?php echo site_url(); ?>/dyfuzja-spring-air/" class="btn btn--purple btn-white-border">WIĘCEJ</a>
    </div>

    <div class="products__item products__item-5 mt-large">
      <img src="<?php echo get_template_directory_uri(); ?>/img/Greece-icon.png" alt="" class="products__item-flag">
      <span class="heading-3-medium"><a href="/disinfection/">Dezynfekcja</a></span>
      <a href="<?php echo site_url(); ?>/disinfection/" class="btn btn--purple btn-white-border">WIĘCEJ</a>
    </div>


  </div><br>
   <div class="heading-2 center">ZAUFALI NAM</div>
  <div id="zaufali-nam" class="customers">
   
    <?php
    $default_klients = array(
      array(
        'link_img' => '/wp-content/themes/mattik/img/logos/NOVOTEL_LOGO_NPC_2.png',
        'link_url'  => 'https://mattik.pl',
      ),
      array(
        'link_img' => '/wp-content/themes/mattik/img/logos/stanley1.png',
        'link_url'  => 'https://mattik.pl',
      ),
    );
    $get_klients = get_theme_mod('zaufali_nam', $default_klients); ?>
    <?php foreach ($get_klients as $get_klient) : ?>
      <a href="<?php echo $get_klient['link_url']; ?>"><img src="<?php echo wp_get_attachment_url($get_klient['link_img']); ?>" alt="klient"></a>
    <?php endforeach; ?>
  </div>
</aside>

<?php get_footer(); ?>