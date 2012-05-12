<?php get_header(); ?>
  <section id="contents">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="entry">
          <header class="entry-header">
            <h1 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h1>
            <span class="posted-on">
              Posted on <?php the_time('F j, Y') ?>
            </span>
            <span class="category">
              in <?php the_category(','); ?>.
            </span>
          </header>
          <?php the_content() ?>
          <footer class="entry-footer">
            <span class="tags"> 
              <?php echo get_the_tag_list('Tagged ', ', ', ''); ?>
            </span>
          </footer>
        </article>
      <?php endwhile; ?>
        <div class="nav-below">
          <span class="nav-previous"><?php previous_post_link('%link', '« Previous'); ?></span>
          <span class="nav-next"><?php next_post_link('%link', 'Next »'); ?></span>
        </div><!-- /.nav-below -->
        <?php comments_template(); ?><!-- Comments -->
    <?php else : ?>
      <h2>Not Found</h2>
    <?php endif ?>
  </section><!-- /#contents -->
<?php get_sidebar(); ?>
<br class="clearfix" />
<?php get_footer(); ?>
