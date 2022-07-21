<?php
    get_header();
?>
<!--<div id="content-body">-->
    <div id="main-header"></div>
    <div id="blog-posts-top"><h1>Blog Posts Archive</h1></div>
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