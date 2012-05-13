<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>
      <?php bloginfo('name'); ?> 
      <?php if (is_single()) { wp_title(); }?>
    </title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » RSS2" href="<?php bloginfo('rss2_url') ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> » Atom" href="<?php bloginfo('atom_url') ?>">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header id="page-header">
        <div id="site-logo">
        <?php if (is_home()) : ?>
          <h1>
            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
          </h1>
        <?php else : ?>
          <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <?php endif; ?>
        </div>
        <ul class="external-link">
          <li class="facebook">
            <a href="https://www.facebook.com/miyake.kota" target="_blank">Facebook</a>
          </li>
          <li class="rss">
            <a href="<?php bloginfo('rss2_url'); ?>">RSS</a>
          </li>
        </ul>
      </header><!-- /header -->
