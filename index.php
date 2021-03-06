<?php /* Template Name: page-home.php */ ?> 
<span></span>
<?php get_header(); ?>
<body>
    <?php
        $args = array( 'post_type' => "recette", 'orderby' => 'menu_order', 'post_per_page' => 1);
        $the_query = new WP_Query( $args );
        if ($the_query->have_posts() ) : ?>
            <section class="slider">
                <?php while($the_query -> have_posts()) : $the_query->the_post(); ?>
                    <div class="items">
                        <?php 
                           $url = get_field('slider_thumbnail');
                        ?>
                        <a href="<?php the_permalink();?>" style="background:url('<?php echo $url ?>'); background-size:cover; background-position:center;"/>
                            <span><?php the_title(); ?></span>
                            <div class="hover_rgba">
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
        
    <div class="container">
        <section class="moment">
            <h3 class="headerTitle">Quel moment voulez-vous passer en notre compagnie ?</h3>
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
                        <a href="<?php echo get_term_link($journee) ?>" class="hover-text">
                            <span>Découvrez nos recettes</span>
                        </a>
                    </div>
                </article>

                <?php $soiree = get_term_by('name', 'soiree', 'type') ?>
                <?php $url = get_taxonomy_image($soiree->term_id,'home'); ?>
                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-4 day" style="background:url('<?php echo $url ?>'); background-size:cover; background-position:center top;">
                    <h3><?php echo $soiree->name; ?></h3>
                    <div class="hover-effect">
                        <a href="<?php echo get_term_link($soiree) ?>" class="hover-text">
                            <span>Découvrez nos recettes</span>
                        </a>
                    </div>
                </article>
            </section>
        
            <div class="clear"></div>

            <div class="content_home">
                    <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 recipe">
                          <h2>La recette du jour !</h2><br>
                             <?php
                                $args = array( 'post_type' => "recette", 'orderby' => 'rand', 'posts_per_page' => '1');
                                
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                                    <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
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

                    <section class="col-xs-12 col-sm-6 col-md-6 col-lg-6 more_consult">
                         <h2>Les plus consultés</h2>
                         <?php wpp_get_mostpopular('
                         post_type="recette"
                         &thumbnail_width=100&thumbnail_height=100
                         &limit=3
                         &excerpt_length=100  
                         &post_html="
                         <a href=\'{url}\'>
                            <article>
                                <div class=\'left_picture\'>
                                    {thumb_img}
                                </div>
                                <div class=\'right_text\'>
                                    <h3>{text_title}</h3>
                                    <p>{summary}</p>
                                </div>
                            </article>
                        </a>"');?>
                    </section>
                    <div class="clear"></div>
                </div>
        </div>
    </div>
</body>

<?php get_footer(); ?>
