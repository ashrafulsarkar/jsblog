<?php
/**
 * Template part for displaying for audio post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Js_Blog
 */
?>

<div class="col-sm-6">
    <!-- post -->
    <div class="post post-grid rounded bordered">
        <div class="thumb top-rounded">
            <a href="category.html" class="category-badge position-absolute">Inspiration</a>
            <a href="<?php the_permalink()?>">
                <div class="inner">
                    <?php
                    the_post_thumbnail();
                    ?>
                </div>
            </a>
        </div>
        <div class="details">
            <ul class="meta list-inline mb-0">
                <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/></a></li>
                <li class="list-inline-item">29 March 2021</li>
            </ul>
            <h5 class="post-title mb-3 mt-3"><a href="<?php the_permalink()?>">
            <?php
            the_title();
            ?>
        </a></h5>
            <p class="excerpt mb-0">
                <?php
                the_excerpt();
                ?>
            </p>
        </div>
        <div class="post-bottom clearfix d-flex align-items-center">
            <div class="social-share me-auto">
                <button class="toggle-button icon-share"></button>
                <ul class="icons list-unstyled list-inline mb-0">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="more-button float-end">
                <a href="<?php the_permalink()?>"><span class="icon-options"></span></a>
            </div>
        </div>
    </div>
</div>