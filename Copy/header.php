<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo("name"); ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>" />
</head>
<body>
  <header>
  <aside class="aside">
    <div class="caja--header">
      <figure>
        <a href="<?php   bloginfo('url');   ?>"><img class="avatar" src="<?php bloginfo("template_directory")?>/img/avatar/avatar.jpg" alt="Stella Maris" /></a>
        <figcaption>Stella Maris</figcaption>
      </figure>
      <h3 class="aside-description">Catedrática prejubilada de francés, dedicada a la música y a la literatura. En este Blog encontrarás poesías suyas o pensamientos.</h3>
        <?php get_search_form(); ?>
    </div>
  </aside>
  <?php wp_head(); ?>
  </header>
