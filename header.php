<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
<?php wp_head(); ?>
</head>

<body>
  <div id="header">
    <div class="text-center">
      <a class="navbar-brand" href="#">
        <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>"/>
      </a>
    </div>
    <div class="nav-container">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav social-media mr-auto">
              <li class="nav-item">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
              </li>
            </ul>
            <ul class="navbar-nav main-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quem Somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Diretoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sindicalize</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Fale Conosco</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Acordo e Convenções</a>
              </li>
            </ul>
            <ul class="navbar-nav search ml-auto">
              <li class="nav-item ml-auto">
                <a href="#"><i class="fas fa-search"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

