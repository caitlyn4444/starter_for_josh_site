<?php
/*
Template Name: Home page
*/
?>
<?php get_header(); ?>
<section class="container-fluid aboutbg text-center">
    <div class="container">
        <h2>
            <?php the_field('titleforaboutme'); ?>
        </h2>
        <p class="particle">
            <?php the_field('subtitleforaboutme'); ?>
        </p>
        <p class="about-text">
            <?php the_field('paragraphforaboutme'); ?>
        </p>
        <div class="blocker"></div>
    </div> <!-- container -->
</section>

<section class="container-fluid articlesbg">
    <div class="container">
        <h3 class="text-center"> LATEST ARTICLES</h3>
        <div class="row">
            <div class="col-md-4 text-center">
                <img class="img-fluid"
                    src="http://170.187.231.66/~mesh16/wp-content/themes/starter_for_josh_site/images/portrait.jpg">"
                alt="portrait">
                <h4 class="article-title"> A PORTRAIT</h4>
                <p class="date"> 12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                    STS s cholars are
                    starting
                    to explore and intervene in the arts. This object of study brings new challenges and
                    opportunities that
                    we want to explore in this session. We would like to gather first of all simply new kinds of
                    knowledge
                    arising from STS study of the arts.
                </p>
                </p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>

            <div class="col-md-4 text-center">
                <img class="img-fluid"
                    src="http://170.187.231.66/~mesh16/wp-content/themes/starter_for_josh_site/images/model.jpg"
                    alt="model">
                <h4 class="article-title"> A MODEL</h4>
                <p class="date"> 12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                    STS s cholars are
                    starting
                    to
                    explore and intervene in the arts. This object of study brings new challenges and opportunities
                    that we
                    want
                    to explore in this session. We would like to gather first of all simply new kinds of knowledge
                    arising
                    from
                    STS study of the arts.
                </p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>

            <div class="col-md-4 text-center">
                <img class="img-fluid"
                    src="http://170.187.231.66/~mesh16/wp-content/themes/starter_for_josh_site/images/gamesdesign.jpg"
                    alt="games design">
                <h4 class="article-title"> A GAMES DESIGN</h4>
                <p class="date"> 12 December 2020</p>
                <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more
                    STS s cholars are
                    starting
                    to
                    explore and intervene in the arts. This object of study brings new challenges and opportunities
                    that we
                    want
                    to explore in this session. We would like to gather first of all simply new kinds of knowledge
                    arising
                    from
                    STS study of the arts.
                </p>
                <a class="readmore" href="#">CONTINUE READING</a>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>
<?php get_footer(); ?>