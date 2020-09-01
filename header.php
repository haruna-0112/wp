<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" > 
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    /> 
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico"> 


    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
     <link href="//netdna.bootstrapcdn.com/font-awesome/4. 7.0/css/font-awesome.min.css" rel="stylesheet">
     <?php wp_head(); ?> 
  </head>

  <body  <?php body_class(); ?>>
    <header id="top-header">
      <div class="flex">
        <h1 class="header-logo"><?php bloginfo( 'name' ); ?><br /></h1> 
        <nav class="header-nav">
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">home</a></li>
            <li><a href="http://localhost/wordpress/about/">about</a></li>
            <li><a href="#">service</a></li>
            <li><a href="#">works</a></li>
            <li><a href="#">price</a></li>
            <li><a href="#">contact</a></li>
          </ul>
        </nav>
      </div>
    </header>