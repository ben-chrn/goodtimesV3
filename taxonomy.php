<?php /* Template Name: page-categorie.php */ ?>


<?php get_header(); ?>

</div>
</div>

<?php $terms=get_the_terms($post->ID, 'type'); $term_id=$terms[0]->term_taxonomy_id;  ?>
<?php $url = get_taxonomy_image( $term_id ); ?>

<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

<div class="headerCategory">
    <div class="headerPic" style="background-image:url(<?php echo $url ?>)"></div>
    <div class="navbarCategory">
        <div class="container">
        <h2>Les recettes pour votre 
        <?php echo apply_filters( 'the_title', $term->name ); ?>
        </h2>
        </div>
    </div>
    </div>
</div>

<div class="container">

    <div class="clear"></div>
    <section class="eventsList  col-xs-12 col-md-9">

<?php while(have_posts()) : the_post() ?>

        <article class="eventItem">
            <div class="eventThumbnail col-xs-12 col-md-5 col-lg-4">
                <?php the_post_thumbnail('img_liste'); ?>
            </div>
            <div class="eventContent">
                <h3 class="eventTitle"><?php the_title(); ?></h3>
                <p class="eventDescri"><?php echo get_the_excerpt(); ?></p>
            </div> 
            <aside class="eventInfos">
                    <span class="eventDate">postée le : <?php the_date(); ?></span>
                    <span class="separator">/</span>
                    <span class="eventLength">durée : <?php $values = get_post_custom_values("duree"); echo $values[0]; ?></span>
                    <a href="<?php the_permalink(); ?>" class="readMore">Lire la suite</a>
                    <div class="clear"></div>
            </aside>
            <div class="clear"></div>
        </article>

<?php endwhile; ?>
    
    </section>

    <section class="sidebar col-xs-12 col-md-3">
        <div class="searchbar">
            <form method="get" action="<?php bloginfo('home'); ?>/">
                <input type="hidden" name="post_type" id="cat" value="recette" />
                <input type="text" size="16" name="s" value=""/>
                <input type="submit" value="&#xf002;" style="font-family:FontAwesome;" class="submit">
            </form>        
        </div>
        <div class="categoriesContent">
            <h3>Nos autres recettes</h3>
            <ul class="categoriesList">
            <?php 
                $terms = get_terms('type'); 
                foreach ($terms as $term) {
                    $term_link = get_term_link( $term );?>
                    <li class="categoriesItem"><a href="<?php echo $term_link ?>"><?php echo $term->name; ?></a></li>
                <?php    
                }
            ?>
            </ul>
        </div>
    </section>
</div>
<?php get_footer(); ?>
