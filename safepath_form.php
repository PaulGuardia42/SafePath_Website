<?php include 'public/views/header.php' ?>

<div id="safepath-form-section" class="safepath-form-section">
    <div class="safepath-form-section__row gutter_regular maxwidth">
        <div class="logo-column">
            <img src="/public/img/safepath_logo_blue.png" alt="">
        </div>
            
        <div class="safepath-form">
            <div class="safepath-form-text">
                <h3 class="text-large text-primary-dark">
                    Be part of the creation of SafePath and help your community plan safe routes. Become a tester of the app in the Fall of 2021.
                </h3>
                <div class="line line__blue u-margin-bottom-small"></div>
                <p class="text-regular">
                    Make your community safer by using SafePath to share your experiences with obstructions, hazards and unsafe events on sidewalks, pathways and bike lanes.
                </p>
            </div>
            <form action="">
                <div class="form-fullname">
                    <label for="fullname">Full Name</label>
                    <input id="fullname" type="text" name="fullname">
                </div>
                <div class="form-email">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email">
                </div>
                <div class="form-commentbox">
                    <label for="comments">Comments</label>
                    <textarea id="comments" name="comments" id="" cols="30" rows="4"></textarea>
                </div>
                <button class="btn btn__blue u-margin-top-small">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include 'public/views/footer.php' ?>
