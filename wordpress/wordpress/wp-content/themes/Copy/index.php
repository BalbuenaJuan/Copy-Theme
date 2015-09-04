<?php get_header(); ?>
<main>
  <a href="<?php   bloginfo('url');   ?>"><h1>Blog Stella Maris</h1></a>
  <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article>
      <h2 class="title"><a class="title" href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h2>
      <?php the_post_thumbnail("medium") ?>  
      <div class="excerpt"><?php the_excerpt(); ?></div>
      <div class="apart">
        <p class="date"><?php the_date(); ?></p>
        <br>
        <small>Por: <?php the_author(); ?> </small>
      </div>
      <a class="seguir--leyendo" href="<?php the_permalink() ;?>">Seguir Leyendo</a>
    </article>
    <div class="hr"></div>
    <p><?php get_the_posts_pagination() ?></p>
<?php endwhile; else : ?>
<?php endif; ?>
<p><?php get_the_posts_pagination() ?></p>
<P class="paginacion"><?php echo paginate_links( $args ); ?></P>
</main>
<?php get_footer(); ?>
