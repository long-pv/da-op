<!-- Lấy thông tin một bài viết -->
<?php
$post_id = get_the_ID();
$post_title = get_the_title();
$post_link = get_permalink();
$share_link = get_permalink();
$post_thumb = get_the_post_thumbnail_url($post_id, 'full');
$post_date = get_the_date('d/m/Y');

// Danh mục - Category
// $categories = get_the_category();
// $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Chưa có danh mục';
?>

<div class="blog-single">
    <div class="blog-image">
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>
        <?php endif; ?>
    </div>

    <div class="blog-content mar-bottom-30">
        <h3 class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <div class="para-content pad-bottom-20">
            <?php
            $tags = get_the_tags();
            if ($tags && !is_wp_error($tags)):
                $first_tag = $tags[0]; ?>
                <span class="mar-right-20">
                    <a href="<?php echo esc_url(get_tag_link($first_tag->term_id)); ?>" class="tag">
                        <i class="fa fa-tag mar-right-5"></i> <?php echo esc_html($first_tag->name); ?>
                    </a>
                </span>
            <?php endif; ?>

            <span class="mar-right-20">
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <i class="fa fa-user mar-right-5"></i> <?php the_author(); ?>
                </a>
            </span>

            <span>
                <a href="<?php comments_link(); ?>">
                    <i class="fa fa-comment"></i> <?php comments_number('0', '1', '%'); ?>
                </a>
            </span>
        </div>

        <div class="blog-full-content editor">
            <?php the_content(); ?>
        </div>
    </div>

    <!-- Blog Share -->
    <div class="blog-share display-flex mar-bottom-30">
        <!-- Tags List -->
        <div class="blog-share-tag">
            <ul class="inline">
                <li><strong>Posted In:</strong></li>
                <?php
                $tags = get_the_tags();
                if ($tags && !is_wp_error($tags)):
                    foreach ($tags as $tag):
                        ?>
                        <li>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                                <?php echo esc_html($tag->name); ?>
                            </a>
                        </li>
                        <?php
                    endforeach;
                else:
                    echo '<li>—</li>'; // Không có tag
                endif;
                ?>
            </ul>
        </div>

        <!-- Social -->
        <div class="header-social">
            <ul>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_link; ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_facebook">
                        <span class="social_share_post_icon">
                            <i class="fab fa-facebook-f">

                            </i>
                        </span>
                    </a>
                </li>

                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                <li>
                    <a href="https://twitter.com/home?status=<?php echo $share_link; ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_twitter">
                        <span class="social_share_post_icon">
                            <i class="fab fa-twitter"></i>
                        </span>
                    </a>
                </li>

                <li> <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_link; ?>&title=text"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_linkedin">
                        <span class="social_share_post_icon">
                            <i class="fab fa-linkedin-in"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Author -->
    <div class="blog-author mar-bottom-30 bg-grey">
        <div class="blog-author-item">
            <div class="row display-flex">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-thumb text-center">
                        <?php echo get_avatar(get_the_author_meta('ID'), 120); ?>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <h3 class="title">
                        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            About Author <span><?php the_author_meta('nickname'); ?></span>
                        </a>
                    </h3>
                    <p class="mar-0"><?php the_author_meta('description'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Phân trang -->
    <div class="blog-next mar-bottom-30">
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        ?>

        <?php if ($prev_post): ?>
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="pull-left">
                <div class="prev">
                    <i class="fa fa-arrow-left white"></i>
                    <p class="white">Previous Post</p>
                    <p class="white"><?php echo esc_html(get_the_title($prev_post)); ?></p>
                </div>
            </a>
        <?php endif; ?>

        <?php if ($next_post): ?>
            <a href="<?php echo get_permalink($next_post->ID); ?>" class="pull-right">
                <div class="next">
                    <i class="fa fa-arrow-right white"></i>
                    <p class="white">Next Post</p>
                    <p class="white"><?php echo esc_html(get_the_title($next_post)); ?></p>
                </div>
            </a>
        <?php endif; ?>
    </div>
</div>