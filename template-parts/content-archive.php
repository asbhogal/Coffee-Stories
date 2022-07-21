<!--<div class="container">-->
<!--<div id="blog-archive-container">-->
<head><title><?php the_title(); ?></title></head>
<div class="post">
        <div class="media">
            <img class="post-thumb" 
            src="<?php
                the_post_thumbnail_url('thumbnail');
            ?>"
            alt="image"> 
            <div class="media-body">
                <h3>
                    <a href="
                    <?php the_permalink(); ?>"> <?php the_title(); ?>
                    </a>
                </h3>
                <div class="meta">
                    <span class="date"><?php the_date()."   |   "?></span>
                    <br></br>
                    <span class="comment">
                        <a href="#">
                            <?php
                                comments_number();
                            ?>
                        </a>
                    </span>
                </div>
                <p></p>
                    <div class="intro">
                        <?php
                            the_excerpt();
                        ?>
                    </div>
                <p></p>
                <a class="more-link" 
                    href="
                    <?php 
                        the_permalink(); 
                    ?>">Read more &rarr;
                </a>
            </div><!--//media-body-->
        </div><!--//media-->
        <p></p>
    </div>
<!--</div>-->
<!--</div>-->