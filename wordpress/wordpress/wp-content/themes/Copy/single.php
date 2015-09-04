<?php get_header(); ?>

<main>
  <a href="<?php   bloginfo('url');   ?>"><h1>Blog Stella Maris</h1></a>
  <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article>
      <h2 class="title"><a class="title" href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h2>

      <div class="excerpt"><?php the_content(); ?></div>
        <p><?php the_tags(); ?></p>
      <p class="date"> <?php the_date(); ?>- </p>
      <br>
      <small>Por: <?php the_author(); ?></small>

    </article>
    <div class="hr"></div>
    <section class="comments">
       <?php comments_template(); ?>
       <hr>
  </section>
<?php endwhile; else : ?>
<?php endif; ?>

</main>

<?php  get_footer();  ?>
