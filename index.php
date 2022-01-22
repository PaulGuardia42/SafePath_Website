<?php include 'public/views/header.php' ?>

<?php
    $uri = $_SERVER['REQUEST_URI'];
    // echo $uri; // Outputs: URI
    
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // echo $url; // Outputs: Full URL
    
    $query = $_SERVER['QUERY_STRING'];
    // echo $query; // Outputs: Query String
?>

<header>
    <section class="hero-section">
        <div class="hero-section__container maxwidth">
            <div class="hero-section__image">
                <img src="/public/img/hero_phone_image.png" alt="Person holding phone with SafePath app on screen">
            </div>
            <div class="hero-section__text">
                <h1 class="text-xxl text-white">Walk safer. Bike better. Move more.
                    <br />    
                    Know before you go, with SafePath.
                </h1>
                <div class="line line__white"></div>
                <h2 class="text-medium text-white">SafePath gives you real-time information about sidewalk, pathway, and bike lane obstructions and hazards to make cities more accessible and enjoyable for everyone.</h2>
                <a href="https://map.safepathapp.ca/" class="btn btn__white u-margin-top-medium">View Map</a>
                <a href="https://map.safepathapp.ca/stats" class="btn btn__white--outline u-margin-top-medium u-margin-left-small">    
                    <svg width="10" height="10" style="margin-right: 5px;">
                        <circle cx="5" cy="5" r="5" fill="red" />
                    </svg>
                    Live stats
                </a>
            </div>
        </div>
    </section>
</header>

<main>
    <section class="featured-supporters">
        <div class="featured-supporters__container maxwidth">
            <div class="featured-supporters__header"><h3 class="text-xl text-primary-dark text-weight-500">Featured In</h3></div>
            <div class="featured-supporters__logos-wrapper">
                <div class="single-logo">
                    <img src="public/img/cbc_news_logo.png" alt="CBC News Logo">
                </div>
                <div class="single-logo">
                    <img src="public/img/CBC_Radio-Canada_logo.png" alt="CBC Radio Logo">
                </div>
                <div class="single-logo">
                    <img src="public/img/saltwire_logo.png" alt="Saltwire Logo">
                </div>
            </div>
        </div>
    </section>

    <section class="safepath-info-section">
        <div class="safepath-info-section__row gutter_regular maxwidth">
            <div class="safepath-info-section__row__col">
                <div class="safepath-info-section__image">
                    <div class="image-container">
                        <img src="public/img/construction_obstruction_1.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="safepath-info-section__row__col">
                <div class="safepath-info-section__text">
                    <h3 class="u-margin-bottom-small text-xl text-primary-dark">Improving Local Accessibility & Activity</h3>
                    <div class="line line__blue"></div>
                    <p class="text-regular text-weight-400">From construction blocking your way to sidewalks covered in ice, getting around the city can be both annoying and hazardous. The SafePath app crowdsources information by encouraging you to record local sidewalk and pathway dangers or inconveniences in real-time.</p>
                    <a href="accessibility" class="btn btn__blue u-margin-top-medium">Accessibility Statement</a>
                </div>
            </div>
        </div>
    </section>

    <section class="three-phone-section">
        <div class="three-phone-section__row maxwidth">
            
            <div class="three-phone-section__content">
                <img src="public/img/phone_3.png" alt="An image of the SafePath app showing you...">
                <h3 class="text-medium text-primary-dark text-weight-500">Experience</h3>
                <p class="text-regular">Check your route for obstructions or hazards before you go to make informed decisions about your route</p>
            </div>
            
            <div class="three-phone-section__content">
                <img src="public/img/phone_1.png" alt="An image of the SafePath app showing you...">
                <h3 class="text-medium text-primary-dark text-weight-500">Share</h3>
                <p class="text-regular">Share your observations or experiences with hazards, obstructions or unsafe events</p>
            </div>

            <div class="three-phone-section__content">
                <img src="public/img/phone_2.png" alt="An image of the SafePath app showing you...">
                <h3 class="text-medium text-primary-dark text-weight-500">Inform</h3>
                <p class="text-regular">Help decision-makers create effective improvements to city infrastructure that will encourage healthy, prosperous communities.</p>
            </div>

        </div>
    </section>

    <section class="CTA-section">
        <div class="CTA-section__row gutter_regular maxwidth">
            <div class="CTA-section__row__col">
                <div class="CTA-section__text">
                    <h3 class="text-large text-white text-weight-500">Be Part of Our Halifax Pilot Project</h3>
                    <p class="text-regular text-white">Want to make active transportation safer and better in Halifax Regional Municipality? Be part of the SafePath App test group this fall. All you have to do is have a smartphone and share your experiences with obstructions and unsafe events as they happen.</p>
                    <a href="safepath_form" class="btn btn__white u-margin-top-medium">Be a community hero</a>
                </div>
            </div>
            <div class="CTA-section__row__col CTA-section__empty"></div>
        </div>
    </section>
</main>

<?php include 'public/views/footer.php' ?>
