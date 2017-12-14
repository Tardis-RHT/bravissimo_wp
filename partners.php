<?php 
     /*
    Template Name: Partners
    */
    get_header(); ?>

<main role="main">

<header class="partners_img-container">
    <img src="<?php echo get_template_directory_uri() ?>/img/partners.png" alt="partners page">
    <div class="partners-title-container">
        <h1 class="partners-title">
            Наши клиенты
        </h1>
    </div> 
</header>
<section class="partners-container wrapper">
    <div class="single-partner">
        <img src="<?php echo get_template_directory_uri() ?>/img/italy-tips1.png" alt="partner1">
        <div class="single-partner-info">
            <h3 class="single-partner-name">Клиент 1</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus rerum dolorum dolores aliquid suscipit maiores culpa, magnam similique laudantium repudiandae facere at! Necessitatibus maxime beatae debitis minus culpa, recusandae quos!</p>
            <a href="#" class="button">link</a>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>
