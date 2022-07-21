<div id="single-blog-post-container">
    <div class="single-blog-post-container-title">
        <h1><?php the_title(); ?></h1>
    </div>
    <header class="content-header single-blog-post-header">
        <div class="meta">
            <span class="date"><?php the_date() ?></span>
            <?php
                the_tags( '<span class="tag"><i class="fa fa-tag"></i>',
                '</span><span class="tag"><i class="fa fa-tag"></i>',
                '</span>' )
            ?>
            
            <span class="comment">
                <a href="#comments">
                    <i class='fa fa-comment'></i>
                    <?php comments_number(); ?>
                </a>
            </span>
        </div>
    </header>

    <?php
        the_content();
    ?>

    <?php
        comments_template();
    ?>

</div>