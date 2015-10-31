<?php /* Template Name: page-home.php */ ?> 

<?php get_header(); ?>
<body><br>
    <section class="slider">
    <?php
        $args = array( 'post_type' => "recette", 'posts_per_page' => 3);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                the_post_thumbnail('slider');
            endwhile;
        ?>
    </section>        
                  
    <div class="container">
        <section class="moment">
            <div class="row">  
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 morning">  
                    <h3>Matinée</h3>
                    <div class="hover-effect">    
                        <a href="#" class="hover-text">
                            <p><span>Découvrez nos recettes</span></p>
                        </a>
                    </div>
                </article>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day">
                    <h3>Journée</h3>
                    <div class="hover-effect">
                        <a href="#" class="hover-text">
                            <p><span>Découvrez nos recettes</span></p>
                        </a>
                    </div>
                </article>
                </article>

                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 night">
                    <h3>Soirée</h3>
                    <div class="hover-effect">
                        <a href="#" class="hover-text">
                            <p><span>Découvrez nos recettes</span></p>
                        </a>
                    </div>
                </article>
            </div>
        </section>
        
        <div class="clear"></div>

            <div class="content_home">
                    <section class="col-md-5 col-lg-5 recipe">
<!--                         <img src="http://pipsum.com/200x200.jpg" class="dayRecipee_thumbnail col-xs-12 col-md-3">
 -->                        <h2>La recette du jour !</h2>
                        <p class="content_recipe">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>

                        <div class="moreread">
                            <a href="#">
                                <p>Lire la suite</p>
                            </a>
                        </div>

                    </section>

                    <section class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 more_consult">


                        <h2>Les plus consultés</h2>
                            <a href="#">
                                <article>
                                    <div class="left_picture">
                                        <img src="http://pipsum.com/80x80.jpg"/>
                                    </div>
                                    <div class="right_text">
                                        <h3>Titre</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                                        </p>
                                    </div>
                                </article>
                            </a>
                            <a href="#">    
                                <article class="change">
                                    <div class="left_picture">
                                        <img src="http://pipsum.com/80x80.jpg"/>
                                    </div>
                                    <div class="right_text">
                                        <h3>Titre</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </article>
                            </a>
                            <a href="">
                                <article>
                                    <div class="left_picture">
                                        <img src="http://pipsum.com/80x80.jpg"/>
                                    </div>
                                    <div class="right_text">
                                        <h3>Titre</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.  
                                        </p>
                                    </div>
                                </article>
                            </a>
                            <a href="#">
                                <article class="change">
                                    <div class="left_picture">
                                        <img src="http://pipsum.com/80x80.jpg"/>
                                    </div>
                                    <div class="right_text">
                                        <h3>Titre</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        </p>
                                    </div>
                                </article>
                            </a>
                    </section>
            </div>
        </div>
</body>

<?php get_footer(); ?>
