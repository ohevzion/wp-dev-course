<?php get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article <?php post_class(); ?>>

          <?php if( !is_attachment() ): ?>

            <header class="entry-header">

              <h1><?php the_title(); ?></h1>

              <?php get_template_part( 'template-parts/byline' ); ?>

            </header>

          <?php endif; ?>

          <div class="entry-content">

            <?php the_content(); ?>

          </div>

        </article>

      <?php endwhile; endif; ?>

      <p class="prev-posts"><?php previous_post_link(); ?></p>
      <p class="next-posts"><?php next_post_link(); ?></p>

    </main>

  </div>

  <?php get_sidebar(); ?>

<?php get_footer(); ?>
