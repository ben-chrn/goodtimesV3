<?php /* Template Name: page-home.php */ ?> 
<br>
<?php get_header(); ?>
<body>
    <?php
        $args = array( 'post_type' => "recette", 'orderby' => 'menu_order', 'post_per_page' => 1);
        $the_query = new WP_Query( $args );
        if ($the_query->have_posts() ) : ?>
            <section class="slider">
                <?php while($the_query -> have_posts()) : $the_query->the_post(); ?>
                    <div class="items">
                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail('slider');?> </a>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
        
    <div class="container">
        <section class="moment">
            <div class="row">
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day">
                    <h3><?php echo the_terms($post->ID, 'type',''); ?></h3>
            <?php $matinee = get_term_by('name', 'matinee', 'type') ?>
                <?php $url = get_taxonomy_image($matinee->term_id,'home'); ?>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day" style="background:url('<?php echo $url ?>'); background-size:cover; background-position:center top;">
                    <h3><?php echo $matinee->name; ?></h3>
                    <div class="hover-effect">
                        <a href="<?php echo get_term_link($matinee) ?>" class="hover-text">
                            <span>Découvrez nos recettes</span>
    
                        </a>
                    </div>
                </article>

                <?php $journee = get_term_by('name', 'journee', 'type') ?>
                <?php $url = get_taxonomy_image($journee->term_id,'home'); ?>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day" style="background:url('<?php echo $url ?>'); background-size:cover; background-position:center top;">
                    <h3><?php echo $journee->name; ?></h3>
                    <div class="hover-effect">
                        <a href="#" class="hover-text">
                            <span>Découvrez nos recettes</span>
                        </a>
                    </div>
                </article>

                <?php $soiree = get_term_by('name', 'soiree', 'type') ?>
                <?php $url = get_taxonomy_image($soiree->term_id,'home'); ?>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day" style="background:url('<?php echo $url ?>'); background-size:cover; background-position:center top;">
                    <h3><?php echo $soiree->name; ?></h3>
                    <div class="hover-effect">
                        <a href="#" class="hover-text">
                            <span>Découvrez nos recettes</span>
                        </a>
                    </div>
                </article>
            </div>
        </section>
        
        <div class="clear"></div>

        <div class="content_home">
            <div class="row">
                <section class="col-md-6 col-lg-6 recipe">
                      <h2>La recette du jour !</h2><br>
                         <?php
                            $args = array( 'post_type' => "recette", 'orderby' => 'rand', 'posts_per_page' => '1');
                            
                            $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                <a href="<?php the_permalink();?>">
                                <?php the_post_thumbnail(array(100,100) , array( 'class' => 'dayRecipee_thumbnail col-xs-12 col-md-3' ) ); ?>
                                    <?php the_excerpt(); ?>
                                </a>
                        <div class="clear"></div>
                        <div class="moreread">
                            <a href="<?php the_permalink(); ?>">
                                <p>Lire la suite</p>
                            </a>
                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    ?>
                </section>

                <section class="col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1 more_consult">
                     <h2>Les plus consultés</h2>
                      <?php
                       query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
                       if (have_posts()) : while (have_posts()) : the_post(); ?>
                          <a href="<?php the_permalink(); ?>">
                                <article>
                                    <div class="left_picture">
                                        <img src="http://pipsum.com/80x80.jpg"/>
                                    </div>
                                    <div class="right_text"> 
                                        <h3><?php the_title(); ?></h3>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                    </div>
                               </article>
                            </a>
                            <?php
                               endwhile; endif;
                                wp_reset_query();
                       ?>
                                <!-- <a href="#">    
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
                                </a> -->
                        </section>
                    </div>
            </div>
        </div>
</body>

<?php get_footer(); ?>
