<?php
get_header();
?>

<section id="body_area">
    <div class = "container">
        <div class ="row">
            <div class = "col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
 
<footer id="footer_area">
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('dhalem_copyright_section');?></p>
                </div>
                
            </div>
            
        </div>

        
    </section>
    
</footer>
    
<?php
get_footer();
?>