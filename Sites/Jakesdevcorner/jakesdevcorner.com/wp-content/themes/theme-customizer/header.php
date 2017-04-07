<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <meta charset="utf-8">
    <title><?php wp_title(''); ?></title>
  </head>
  <body <?php body_class(); ?>>
    <div id="header">
      <h1>
        <?php bloginfo('title'); ?>
      </h1>
      <h2>
        <?php bloginfo('description'); ?>
      </h2>
    </div>
