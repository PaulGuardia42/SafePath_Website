<?php include 'public/views/header.php' ?>

<div class="accessibility-hero-section">
        <div class="accessibility-hero-section__row maxwidth">
        <div class="accessibility-hero-section__image">
            <img src="/public/img/blind-person-crossing-street.jpg" alt="">
        </div>
        <div class="accessibility-hero-section__text gutter_regular">
            <h3 class="text-large">Accessibility Statement</h3>
            <div class="line line__blue"></div>
            <p class="text-regular">
                At SafePath we understand that the safest path we can take is together. Therefore, we are committed to making both our app and our website the most accessible we possibly can. Our strive and dedication to those with disabilities is the driving force behind our mission, vision, and long-term goal.
                <br/>
                <br/>
                As our website grows and our app becomes public, we will continue to monitor and enhance our products. Accessibility is an ongoing experience, and because of that we strive to do the best we can by continuing efforts and improvements for our consumers.
                <br/>
                <br/>    
                By following the Web Content Accessibility Guidelines (WCAG Overview) we work to ensure that our product and site are accessible as possible. SafePath will always aim to present the highest level of quality to meet the distinctive needs of our users.
            </p>
            <a href="#accessibility-form-section" class="arrow-btn"><img src="public/img/arrow_downward.png">Give us feedback</a>
        </div>
    </div>
</div>

<div id="accessibility-form-section" class="accessibility-form-section">
    <div class="accessibility-form-section__row gutter_regular maxwidth">
        <div class="accessibility-form-section__col logo-column">
            <img src="/public/img/safepath_logo_blue.png" alt="">
        </div>
        <div class="accessibility-form-section__col accessibility-form">
            <h3 class="text-large">SafePath wants to hear from you</h3>
            <p class="text-regular">If you have any feedback on how we can better our site to be more inclusive, accessible, or easier to access, email us at <a href="mailto:info@safepathapp.ca">info@safepathapp.ca</a> or leave a comment below and we will work to better maintain our site for your needs.</p>
            <form action="">
                <div class="form-fullname">
                    <label class="text-regular text-weight-500" for="fullname">Full Name</label>
                    <input id="fullname" type="text" name="fullname">
                </div>
                <div class="form-email">
                    <label class="text-regular text-weight-500" for="email">Email</label>
                    <input id="email" type="email" name="email">
                </div>
                <div class="form-commentbox">
                    <label class="text-regular text-weight-500" for="comments">Comments</label>
                    <textarea id="comments" name="comments" id="" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn__blue u-margin-top-small">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include 'public/views/footer.php' ?>       
