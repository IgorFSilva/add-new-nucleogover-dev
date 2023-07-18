<!DOCTYPE html>
<html>
<head>
  <?php wp_head(); ?>
  <?php
		$title = get_the_title();
		if($title == ''){
			$title = 'Home';
		}
	?>
	<title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <script src="https://kit.fontawesome.com/68bc6374d5.js" crossorigin="anonymous"></script>
  <link href=<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="<?php echo get_theme_root_uri(); ?>/horanewsnotícias/style.css" rel="stylesheet">
</head>

<body>
  <section>
    <div class="center1">
      <div class="topo">
        <header>
          <div class="container11">
            <ul class="my-desktop">
              <div class="left">
                <li class="text-align: left"><a href="">PÁGINA INICIAL</a></li>
              </div>
              <div class="rigth">
                <i class="fa-brands fa-accessible-icon"></i>
                <li><a href="">ACESSIBILIDADE</a></li>
              </div>
            </ul>
            <div class="my-mobile">
              <i class="fa-solid fa-align-right"></i>
              <ul>
                <div>
                  <li><a href="">PÁGINA INICIAL</a></li>
                </div>
                <div>
                  <li><a href="">ACESSIBILIDADE</a></li>
                </div>
              </ul>
            </div>
          </div>
        </header>
      </div>
