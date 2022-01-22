<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SafePath <?php echo $_SERVER['REQUEST_URI'] ?></title>

    <link rel="icon" type="image/png" href="../../Safepath_Logo_36p_LDPI.png" sizes="32x32"/>
    <link rel="stylesheet" href="/public/css/style.css" type="text/css" >

    <!-- SEO -->
    <meta name="description" content="SafePath gives you real-time information about sidewalk, pathway, and bike lane obstructions and hazards to make cities more accessible and enjoyable for everyone."/>
    <meta name="keywords" content="SafePath, Accessibility"/>
    <meta name="author" content="Jen LaPlante" />

    <!-- Stop Chrome pre-load transition firing bug -->
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded",function(){
            let node = document.querySelector('.preload-transitions');
            node.classList.remove('preload-transitions');
        });
    </script>
</head>

<?php 
    // Functionalty for hovering over nav element 
    function makeBold($currentURL) {
        $typedURL = $currentURL;
        $actualURLslug = $_SERVER['REQUEST_URI']; 
        $fontStyle = "font-weight: 500";  
        if($actualURLslug == $typedURL){
            echo $fontStyle;
        }
    }
?>

<header class="navbar-menu preload-transitions">
    <nav class="navbar-menu__container maxwidth">
        <div class="navbar-menu__logo">
            <a href="index"><img src="public/img/safepath_logo_white.png" alt="SafePath Logo"></a>
        </div>
  
          <input type="checkbox" class="navbar-menu__checkbox" id="navi-toggle">
          <label for="navi-toggle" class="navbar-menu__button"><span class="navbar-menu__icon"></span></label>
  
          <div class="navbar-menu__nav">
            <div class="navbar-menu__background">&nbsp;</div>
              <ul class="navbar-menu__list">
                  <li class="navbar-menu__item"><a class="navbar-menu__link" href="https://map.safepathapp.ca/">Map</a></li>
                  <li class="navbar-menu__item"><a class="navbar-menu__link" href="https://map.safepathapp.ca/stats">Live stats</a></li>
                  <li class="navbar-menu__item"><a class="navbar-menu__link" style="<?php makeBold("/about")?>" href="about">About</a></li>
                  <li class="navbar-menu__item"><a class="navbar-menu__link" style="<?php makeBold("/accessibility")?>"href="accessibility">Accessibility</a></li>
                  <li class="navbar-menu__item"><a class="navbar-menu__link" style="<?php makeBold("/resources")?>" href="resources">Resources</a></li>
                  <a href="safepath_form" class="btn btn__white" style="white-space: nowrap;">Download App</a>
              </ul>
          </div>

    </nav>
</header>

<body>
