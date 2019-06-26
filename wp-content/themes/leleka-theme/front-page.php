<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 21.05.2019
 * Time: 12:47
 */

get_header();
?>

<?php

/**
 * Return Custom fields section "Hero" ['title', 'description', 'image', 'url']
 *
 * @var {{$heroBlock: Object}} - used for stored Custom fields in the section "Hero"
 *
 */

$heroBlock = get_field('hero_block');
?>
  <section class="hero">
    <div class="container">
      <div class="section__content__wrap">
        <div class="section__wrap__description">
          <h2 class="section__wrap__description--title"><?= $heroBlock['title'] ?></h2>
            <?= $heroBlock['description'] ?>
        </div>
          <?php if ($heroBlock['image']) { ?>
            <div class="section__wrap__image">
              <img src="<?= $heroBlock['image']['url'] ?>" alt="">
            </div>
          <?php } ?>
      </div>
    </div>
  </section>

<?php

/**
 * Return Custom fields section "Section_content" ['section_title', 'section_description', 'section_button_link', 'button_text', 'image', 'url']
 *
 * @var {{$sectionContent: Object}} - used for stored Custom fields in the section "Section_content"
 *
 */

$sectionContent = get_field('section_content');

if( $sectionContent){ ?>
    <?php
    /**
     * Adding a class 'revers-block' to each odd unit
     */
    foreach($sectionContent as $sectionID => $sectionItem){ ?>
  <section class="section__content">
    <div class="container">
      <div class="section__content__wrap<?= $sectionID % 2 == 1 ? '' : ' revers-block'?>">
        <div class="section__wrap__description">
          <h2 class="section__wrap__description--title"><?= $sectionItem['section_title'] ?></h2>
            <?= $sectionItem['section_description'] ?>
          <div class="section__wrap__button">
            <?php if( $sectionItem['section_button_link'] ){ ?>
              <a href="<?= $sectionItem['section_button_link']; ?>"><?= $sectionItem['button_text']; ?></a>
            <?php } ?>
          </div>
        </div>

        <?php if( !empty($sectionItem['image']) ){ ?>
        <div class="section__wrap__image">
          <img src="<?php echo $sectionItem['image']['url']; ?>" alt="<?php echo $sectionItem['image']['alt'] ?>">
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php }
}
get_footer();
?>