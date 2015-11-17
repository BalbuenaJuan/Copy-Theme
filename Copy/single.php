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
      <small class="single--autor">Por: <?php the_author(); ?></small>

    </article>
    <div class="hr"></div>
    <section class="comments">
       <?php comments_template(); ?>
       <hr>
  </section>
<?php endwhile; else : ?>
<?php endif; ?>

</main>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69863858-1', 'auto');
  ga('send', 'pageview');

</script>
<?php  get_footer();  ?>
