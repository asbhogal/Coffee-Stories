<?php
    get_header();
?>
<!--<div id="content-body">-->
    <div id="blog-archive-container">

    <?php
        if( have_posts() ) {
            while( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content', 'archive' );
            }
        }
    ?>
    </div>
<!--</div>-->

<?php
    get_footer();
?>