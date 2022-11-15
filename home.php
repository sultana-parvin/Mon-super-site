<?php
get_header();
?>

<h2>Our blog</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt suscipit pariatur molestias impedit dicta, vitae eius. </p>

<div class="container_article">
    <ul>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <li><?php the_post_thumbnail(); ?></li>

    <li><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></li>
    <li> <?php the_date(); ?>
            <?php the_category(); ?>
    </li>
    <li><?php the_excerpt(); ?></li>
        
    
   

    <?php endwhile; ?>
</ul>
</div>


<?php else : ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>



<?php
get_footer();
?>