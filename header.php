 <!DOCTYPE html>
 <html <?php language_attributes(); ?>>

 <head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="/dist/img/favicon.svg" type="image/x-icon">
   <?php wp_head(); ?>
 </head>

 <body>
   <div class="header-bg">
     <header class="topo">
       <div class="topo-container container">
         <div>
           <a href="#home">
             <?php
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
              if (has_custom_logo()) {
                echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"' . 'class="img-fluid">';
              } else {
                echo '<h2>' . get_bloginfo('name') . '</h2>';
              } ?>
           </a>
         </div>
         <nav>
           <button id="menu-mobile">Menu
             <span id="menu-linha"></span>
           </button>
           <ul class="menu">
             <li><a href="#home">Home</a></li>
             <li><a href="#servicos">Serviços</a></li>
             <li><a href="#projetos">Projetos</a></li>
             <li><a href="#tecnologias">Tecnologias</a></li>
             <li><a href="#contato">Contato</a></li>
           </ul>
         </nav>
       </div>
     </header>
     <section class="container" id="home">
       <div class="introducao">
         <h1 class="cor-b1 font-i-64">Desenvolvedor Fullstrack Transformando idéias em Realidade Digital<span class="detalhe">.</span></h1>
         <p class="font-ib-16">Desenvolvedor FullStack com 9 anos de experiência na criação de sites e sistemas web, trabalhando de forma independente e entregando soluções de alta qualidade para clientes em todo o Brasil.</p>
         <a href="#contato" class="btn-primary seta">Fale Comigo</a>
       </div>
     </section>
   </div>
   <main>