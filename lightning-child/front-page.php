
<?php get_header(); ?>

<div id="main">
  <div id="mainTop">
    <div class="pc">
      <!-- 子テーマのフォルダの画像使用の場合以下の関数を使用する -->
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top2.jpg" alt="トップ">
    </div>
  </div>
  <section id="skills" class="cf">
    <h2 class="title">Skills</h2>
    <section>
      <p class="icon">
        <span class="fab fa-wordpress-simple"></span>
      </p>
      <h3>Wordpress</h3>
    </section>
    <section>
      <p class="icon">
        <span class="fab fa-js-square""></span>
      </p>
      <h3>Javascript</h3>
    </section>
    <section class="last">
      <p class="icon">
        <div class="html-css-logo cf">
          <div class="html5">
            <span class="fab fa-html5"></span>
          </div>
          <div class="css3">
            <span class="fab fa-css3-alt"></span>
          </div>
        </div>
      </p>
      <h3 class="css-h3">HTML5&CSS3</h3>
    </section>
  </section>
  <section id="works" class="cf">
    <h2 class="title">Works</h2>
    <?php echo do_shortcode( '[PFG id=34]' ); ?>
    <!-- <ul class="workList">
      <li>
        <p class="photo">
          <a href="https://my-chat-20efc.firebaseapp.com/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/work1.png"" alt="Buchicha!">
          </a>
        </p>
      </li>
      <li>
        <p class="photo">
          <a href="https://my-chat-20efc.firebaseapp.com/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/work1.png"" alt="Buchicha!">
          </a>
        </p>
      </li>
      <li>
        <p class="photo">
          <a href="https://my-chat-20efc.firebaseapp.com/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/work1.png"" alt="Buchicha!">
          </a>
        </p>
      </li>
    </ul> -->
  </section>
</div>

<?php get_footer(); ?>