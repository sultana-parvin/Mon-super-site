<footer id="footer_area">
    <div class="container_footer">
            <div class="logo-footer">
            <img class="logo" src="<?= get_template_directory_uri() ?>/Assets/Logo.png">
            <p>Lorem ipsum, dolor sit amet consectetur<br> adipisicing Lorem ipsum dolor sit,<br> amet consectetur adipisicing elit. Autem qui accusantium! Qui, ullam?</p>
            </div>
        
        <nav id="info">

        <p>Useful links</p>
        <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
        </nav>

        <ul class="info">
            <p>Get in touch</p>
            <li><img class="icon-footer" src="<?= get_template_directory_uri() ?>/Assets/location.png">123 Anywhere Street, Any City, 12345 ST, Babylone</li>
            <li><img class="icon-footer" src="<?= get_template_directory_uri() ?>/Assets/phone.png">+334 12 96 55 88</li>
            <li><img class="icon-footer" src="<?= get_template_directory_uri() ?>/Assets/email.png">contact@dhalem.com</li>
        </ul>
        <form class="newsletter" action="">
        <p>NewsLetter</p>
        <input class="email" type="email" name="email" placeholder="your email">
        <button class="btn-submit">Submit</button>
        </form>

    </div>
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


<?php wp_footer(); ?>
</body>
</html>