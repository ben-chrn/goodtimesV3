
<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
 <section class="content">
           <div class="bg-img"> 
                <form action="<?php wp_mail('mathieulevi@gmail.com', 'Sujet', '', ''); ?>" method = "POST" class="desktop">
                    <h2>Contactez nous</h2>
                    <input placeholder="Nom et Prénom"></input>
                    <input placeholder="Email"></input>
                    <textarea placeholder="Message"></textarea><br>
                    <button type="submit" class="action-button">Envoyer !</button>
                </form>
            </div><br><br>
</section>

<section class="team">
 <div class="clear"></div>
          
    <!-- <img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
    <img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
    <img class="img-circle" src="http://pipsum.com/200x200.jpg"></img>
    <img class="img-circle" src="http://pipsum.com/200x200.jpg"></img> -->

    <?php
        $args = array( 'post_type' => "equipe", 'posts_per_page' => 5);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                the_post_thumbnail( array(100, 100), array( 'class' => 'img-circle' ) ); ?>
                <?php the_title();
            endwhile; ?>
</section>

    <?php get_footer(); ?>

