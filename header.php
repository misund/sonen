<!doctype html>
<html>
<head>
<title><?php bloginfo('title'); ?></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

<?php wp_head(); ?>
</head>

<body>
<header>
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>

<nav id="menu">
<?php wp_nav_menu('hovedmeny'); ?>
</nav>

</header>

