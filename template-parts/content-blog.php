<!-- Lấy thông tin một bài viết -->
<?php
// ID
$post_id = get_the_ID();

// Ảnh - Thumbnail
$post_thumb = get_the_post_thumbnail_url($post_id, 'full');

// Tiêu đề - Title
$post_title = get_the_title();

// Đường dẫn - Link
$share_link = get_permalink();

// Danh mục - Category
$categories = get_the_category();
$category = !empty($categories) ? $categories[0] : 'Chưa có danh mục';
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
            <?php if ($category): ?>
                <span class="mar-right-20">
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="tag">
                        <i class="fa fa-tag mar-right-5"></i> <?php echo esc_html($category->name); ?>
                    </a>
                </span>
            <?php endif; ?>

            <span class="mar-right-20">
                <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                    <i class="fa fa-user mar-right-5"></i> <?php the_author(); ?>
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
                    $count = count($tags);
                    $i = 0;
                    ?>
                    <?php foreach ($tags as $tag): ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
                            <?php echo esc_html($tag->name); ?>         <?php echo (++$i < $count) ? ',' : ''; ?>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <!-- Social -->
        <div class="header-social">
            <ul>
                <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_link; ?>"
                        onclick="window.open(this.href, this.target, 'width=500,height=500'); return false;"
                        class="social_share_post_facebook">
                        <span class="social_share_post_icon">
                            <i class="fab fa-facebook-f"> </i>
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
</div>