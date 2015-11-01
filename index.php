<?php /* Template Name: page-home.php */ ?> 

<?php get_header(); ?>
<body><br>
    <section class="slider">
    <?php
        $args = array( 'post_type' => "recette", 'posts_per_page' >= 3);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div>
                    <a href="<?php the_permalink();?>"><?php
                        if ( has_post_thumbnail() ) // check if the post has a Post Thumbnail assigned to it.
                        the_post_thumbnail();
                         ?></a>
                </div>

            <?php endwhile;
            wp_reset_postdata();
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
                  <h2>La recette du jour !</h2><br>
                     <?php
                        $args = array( 'post_type' => "recette", 'orderby' => 'rand', 'posts_per_page' => '1');
                        
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail(array(100,100) , array( 'class' => 'dayRecipee_thumbnail col-xs-12 col-md-3' ) ); ?>
                            <p class="content_recipe">
                                <?php the_excerpt(); ?>
                             </p>
                            </a>
                    <div class="moreread">
                        <a href="<?php the_permalink(); ?>">
                            <p>Lire la suite</p>
                        </a>
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();
                ?>
            </section>

            <section class="col-md-6 col-lg-6 col-md-offset-1 col-lg-offset-1 more_consult">
                 <h2>Les plus consultés</h2>

                  <?php
                   // query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
                   // if (have_posts()) : while (have_posts()) : the_post(); ?>
                      <!--   <a href="<?php the_permalink(); ?>">
                            <article>
                                <div class="left_picture">
                                    <img src="http://pipsum.com/80x80.jpg"/>
                                </div>
                                <div class="right_text"> -->
                                    <!-- <h3><?php the_title(); ?></h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </div> -->
                           <!--  </article>
                        </a>
                        <?php
                           // endwhile; endif;
                            wp_reset_query();
                   ?> -->
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
