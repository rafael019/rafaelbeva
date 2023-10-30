<?php
// Template Name: Home
get_header(); ?>
<section class="servicos-bg" id="servicos">
  <div class="servicos container">
    <div class="titulo-section" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="font-i-48 cor-b1">Serviços<span class="detalhe">.</span></h2>
      <p class="font-ib-18">Veja o que posso fazer pela sua empresa.</p>
    </div>
    <?php
    $args = array(
      'post_type' => 'servico', //Tipo do Post
      'posts_per_page' => -1, // Quantidade de Posts Exibidos
      'order'   => 'DESC' // Ordenação do Post
    );
    $projetos = new WP_Query($args); ?>
    <ul class="servicos-lista" data-aos="fade-up" data-aos-duration="1000">
      <?php if ($projetos->have_posts()) : while ($projetos->have_posts()) : $projetos->the_post(); ?>
          <li class="servicos-item">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Criação de Sites">
            <h3 class="font-i-32 cor-b1"><?= get_the_title(); ?></h3>
            <p class="font-ib-16"><?php the_excerpt(); ?></p>
          </li>
        <?php endwhile;
      else : ?>
        <p><?php _e('Desculpe, nenhum serviço encontrado.'); ?></p>
      <?php endif; ?>
    </ul>
  </div>
</section>

<section class="projetos container" id="projetos">
  <div class="titulo-section" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="font-i-48 cor-b1">Projetos<span class="detalhe">.</span></h2>
    <p class="font-ib-18">Veja alguns sites e softwares já concluídos e entregues, desenvolvidos em parceria com empresas que confiaram no meu trabalho.</p>
  </div>
  <?php
  $args = array(
    'post_type' => 'projeto', //Tipo do Post
    'posts_per_page' => -1, // Quantidade de Posts Exibidos
    'order'   => 'DESC' // Ordenação do Post
  );
  $projetos = new WP_Query($args); ?>
  <div class="swiper projetos-lista" data-aos="fade-up" data-aos-duration="1000">
    <div class="swiper-wrapper">
      <!-- Projeto 1 -->
      <?php if ($projetos->have_posts()) : while ($projetos->have_posts()) : $projetos->the_post(); ?>
          <div class="swiper-slide">
            <div class="projetos-item">
              <h3 class="font-i-24 cor-b1"><?= get_the_title(); ?></h3>
              <p class="font-ib-16"><?php the_excerpt(); ?></p>
              <a href="<?= get_field('link_para_o_projeto'); ?>" target="blank">Ver projeto</a>
            </div>
          </div>
        <?php endwhile;
      else : ?>
        <p><?php _e('Desculpe, nenhum projeto encontrado.'); ?></p>
      <?php endif; ?>
      <!-- Projeto 1 -->
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>

<section class="tecnologias-bg" id="tecnologias">
  <div class="tecnologias container">
    <div class="titulo-section" data-aos="fade-up" data-aos-duration="1000">
      <h2 class="font-i-48 cor-b1">Tecnologias<span class="detalhe">.</span></h2>
      <p class="font-ib-16">Trabalho com as melhores e mais modernas tecnologias do mercado para criação de sites e sistemas web.</p>
    </div>
    <ul class="tecnologias-lista" data-aos="fade-up" data-aos-duration="1000">
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-html5.svg" alt="Html 5">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-css3.svg" alt="CSS 3">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-javascript.svg" alt="Javascript ES6">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-wordpress.svg" alt="Wordpress">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-reactjs.svg" alt="ReactJS">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-nodejs.svg" alt="NodeJS">
      </li>
      <li class="tecnologias-item">
        <img src="<?= INCLUDE_PATH ?>/dist/img/icones/tecnologias/icone-sass.svg" alt="Sass">
      </li>
    </ul>
  </div>
</section>

<section class="contato container" id="contato">
  <div class="titulo-section" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="font-i-48 cor-b1">Contato<span class="detalhe">.</span></h2>
    <p class="font-ib-16">Tem interesse em contratar? Vamos conversar, preencha o formulário ao lado, entrarei em contato o mais breve possível.</p>
  </div>
  <div data-aos="fade-up" data-aos-duration="1000">
    <?= do_shortcode('[contact-form-7 id="03a5b70" title="Contato"]'); ?>
  </div>
</section>
<?php get_footer(); ?>