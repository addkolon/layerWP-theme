<?php
/**
 * The template for displaying archive pages.
 */
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if (have_posts()) : ?>

            <header class="archive-page-header">
                <?php
                    the_archive_title('<h1 class="archive-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                ?>
            </header>

            <?php

                // Start the loop
                while (have_post()) :
                    the_post();
                    get_template_part('template-parts/post/content');
                endwhile;    

                echo paginate_links([
                    'prev_text' => esc_html__('Prev', 'layer-wp-theme'),
                    'next_text' => esc_html__('Next', 'layer-wp-theme'),
                ])

            ?>
        <?php endif; ?>
    </main>
</div>


<?php
get_footer();