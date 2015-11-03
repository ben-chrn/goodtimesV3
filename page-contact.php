
<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
<div class="container contact">
    <div class="contact_form">
            <form action="<?php wp_mail('mathieulevi@gmail.com', 'Sujet', '', ''); ?>" method = "POST" class="desktop">
                    <h3>Contactez nous</h3>
                    <p>
                        <input placeholder="Nom"></input>
                    </p>
                    <p>
                        <input placeholder="Prenom"></input>
                    </p>
                    <p>
                        <input placeholder="Email"></input>
                    </p>
                    <p>
                        <textarea placeholder="Message"></textarea><br>
                    </p>
                    <p>
                        <button type="submit" class="action-button"><i class="fa fa-paper-plane">      </i>Envoyer</button>
                    </p>
            </form>
    </div>
    <section class="team">
                  
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
</div>

<?php get_footer(absolute); ?>

