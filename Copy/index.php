<?php get_header(); ?>
<main>
  <a href="<?php   bloginfo('url');   ?>"><h1>Blog Stella Maris</h1></a>
  <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article class="content-index">
      <h2 class="title"><a class="title" href="<?php the_permalink();  ?>"><?php the_title();  ?></a></h2>
      <p>
        <span class="icon-chat"> <small class="small"></span> <?php comments_number( 'sin comentarios', 'un comentario', '% comentarios' ); ?></small>
        <span class="icon-clock2"> </span><small class="small"> <?php the_date(); ?> </small>
      </p>
      <?php the_post_thumbnail("medium") ?>
      <div class="excerpt"><?php the_excerpt(); ?></div>
      <div class="apart">
        <br>
        <small>Por: <?php the_author(); ?> </small>
        <small><?php the_author_meta("description"); ?></small>
      </div>
      <a class="seguir--leyendo" href="<?php the_permalink() ;?>">Seguir Leyendo</a>
    </article>
    <div class="hr"></div>
<?php endwhile; else : ?>
<?php endif; ?>
<p><?php get_the_posts_pagination() ?></p>
<P class="paginacion"><?php echo paginate_links( $args ); ?></P>
</main>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69863858-1', 'auto');
  ga('send', 'pageview');

</script>
<?php get_footer(); ?>
