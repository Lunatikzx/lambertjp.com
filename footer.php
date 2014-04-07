<?php
/**
 * Le pied de page du site
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<footer class="bottom" role="contentinfo">
    <div class="container">
        <section class="vcard col-sm-3">
            <header>
                <h1>Contact</h1>
            </header>
            <p class="fn"><a class="url" href="#">Jean-Philippe Lambert</a><p>
            <a href="mailto://jipi.lambert@gmail.com">Me joindre</a>
            <p class="tel">+1 581.983.1817</p>
            <p class="social">
                <a href="http://www.linkedin.com/pub/jean-philippe-lambert/16/556/919" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
                <a href="#" target="_blank"><i class="fa fa-github fa-3x"></i></a>
            </p>
        </section>
        <section class="col-sm-3"></section>
        <section class="col-sm-6"></section>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
