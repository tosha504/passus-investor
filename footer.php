<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start
 */


//general
$logo_footer = get_field('logo_footer', 'options_footer');
$addres = !empty(get_field('addres', 'options_footer')) ? '<div class="footer__general_addres">' . get_field('addres', 'options_footer') . '</div>' : '';
$contact = get_field('contact', 'options_footer') ? '<div class="footer__general_contact">' . get_field('contact', 'options_footer') . '</div>' : '';

//columns_group
$columns_group = get_field('columns_group', 'options_footer');

// footer_bottom_rights
$footer_bottom_rights = !empty(get_field('footer_bottom_rights', 'options_footer')) ? '<p class="footer__bottom_rights">© ' . date("Y") . get_field('footer_bottom_rights', 'options_footer') . '</p>' : '';
$polices = get_field('polices', 'options_footer'); ?>

<footer id="colophon" class="footer">
  <div class="container">
    <div class="footer__general">
      <?php echo "<div class='footer__general_img'>";
      my_custom_attachment_image(get_field('logo_footer', 'options_footer'));
      echo  "</div>" . $addres . $contact; ?>
    </div>
    <div class="footer__wrap-inwestor">
      <?php
      if (!empty($columns_group) && count($columns_group) > 0) {
        foreach ($columns_group as $key => $column) {
          if (count(array_filter($column["column"])) > 0) { ?>
            <div class="footer__investor">
              <?php print(!empty($column["column"]["column_title"]) ? '<h6>' . $column["column"]["column_title"] . '</h6>' :
                '');
              if (!empty($column["column"]["column_elements"]) && count($column["column"]["column_elements"])) { ?>
                <div class="footer__investor_items">
                  <?php foreach ($column["column"]["column_elements"] as $key => $group_item) {
                    if ($group_item["link"]) {
                      $link_url = $group_item["link"]['url'];
                      $link_title = $group_item["link"]['title'];
                      $link_target = $group_item["link"]['target'] ? $link['target'] : '_self'; ?>
                      <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <?php print(!empty($group_item["icon"]) ? my_custom_attachment_image($group_item["icon"])  : "");
                        echo esc_html($link_title); ?></a>
                  <?php }
                  }
                  ?>
                <?php } ?>
                </div>
            </div>
          <?php } ?>
      <?php }
      } ?>
    </div>
    <div class="footer__bottom">
      <?php echo $footer_bottom_rights;
      if (!empty($polices) && count($polices) > 0) { ?>
        <div class="footer__bottom_polices">
          <?php foreach ($polices as $key => $police) {
            if ($police["link"]) {
              $link_url = $police["link"]['url'];
              $link_title = $police["link"]['title'];
              $link_target = $police["link"]['target'] ? $link['target'] : '_self'; ?>
              <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <?php print(!empty($group_item["icon"]) ? my_custom_attachment_image($group_item["icon"])  : "");
                echo esc_html($link_title); ?></a>
          <?php }
          } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</footer><!-- #colophon -->
<div class="cookies">
  <?php $cookies_ps = !empty(get_field('cookies_ps', 'options')) ? get_field('cookies_ps', 'options') : '  <p>Serwis używa informacji zapisanych za pomocą plików cookie oraz innych rozwiązań informatycznych, pozwalających na dostosowanie treści do potrzeb użytkownika oraz w celach statystycznych.. Jeżeli nie wyrażają Państwo zgody na ich zapisywanie, należy opuścić stronę lub zmienić w przeglądarce ustawienia dotyczące cookies. Szczegółowe informacje można znaleźć w naszej <a href="http://" target="_blank" rel="noopener noreferrer"> polityce cookies</a> .</p>'; ?>
  <div class="container">
    <div class="cookies__flex">
      <?php echo $cookies_ps; ?>
      <a href="javascript:;" class="cookies__btn btn submit">Akceptuję</a>
    </div>
  </div><!-- cookies -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>