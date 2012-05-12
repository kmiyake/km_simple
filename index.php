<?php get_header(); ?>
  <section id="contents">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="entries">
          <header class="entry-header">
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <span class="posted-on">
              Posted on <?php the_time('F j, Y') ?>
            </span>
            <span class="category">
              in <?php the_category(','); ?>.
            </span>
          </header>
          <?php echo get_the_post_thumbnail($post->id, array(100,100)); ?>
          <?php  the_excerpt(); ?>
          <footer class="entry-footer">
            <span class="tags"> 
              <?php echo get_the_tag_list('Tagged ', ', ', ''); ?>
            </span>
          </footer>
        </article>
      <?php endwhile; ?>
        <div class="nav-below">
          <span class="nav-previous"><?php previous_posts_link('« Previous'); ?></span>
          <span class="nav-next"><?php next_posts_link('Next »'); ?></span>
        </div><!-- /.nav-below -->
    <?php else : ?>
      <h2>Not Found</h2>
    <?php endif ?>
  </section><!-- /#contents -->
<?php get_sidebar(); ?>
<br class="clearfix" />
<?php get_footer(); ?>
