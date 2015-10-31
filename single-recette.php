<?php /* Template Name: single.php */ ?>


<?php get_header(); ?>

</div>
</div>

<?php while(have_posts()) : the_post() ?>

<div class="headerCategory">
    <div class="headerPic"></div>
    <div class="navbarCategory">
        <div class="container">
        <h2><?php the_terms($post->ID, 'type','');  ?> > <?php the_title(); ?> </h2>
        </div>
    </div>
    </div>
</div>

<div class="container">
    <div class="singleLeft col-xs-12 col-md-9">
        <section class="singleEventItem">
            <div class="singleEventHeader">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="singleEventContent">
                <div class="singleEventThumbnail col-xs-12 col-md-3">
                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                    <div class="bgimage" style="background-image:url(<?php echo $url ?>)"></div>
                </div>
                <div class="singleEventInfos col-xs-12 col-md-9">
                    <ul class="ingredients col-xs-6">

                        <span>Ingrédients :</span>
                        <li><i class="fa fa-check"></i><?php $values = get_post_custom_values("ingredients"); echo $values[0]; ?></li>
                        <!-- <li><i class="fa fa-check"></i>Ingrédient</li>
                        <li><i class="fa fa-check"></i>Ingrédient</li>
                        <li><i class="fa fa-check"></i>Ingrédient</li> -->
                    </ul>
                    <ul class="metadata col-xs-6">
                        <li><span class="red">Durée : </span><?php $values = get_post_custom_values("duree"); echo $values[0]; ?></li>
                        <li><span class="red">Pour : </span><?php $values = get_post_custom_values("prix"); echo $values[0]; ?> personnes</li>
                        <li><span class="red">Âge minimum : </span><?php $values = get_post_custom_values("age"); echo $values[0]; ?></li>
                        <li><span class="red">Prix : </span><?php $values = get_post_custom_values("prix"); echo $values[0]; ?>/5</li>

                    </ul>
                </div>
                <div class="singleEventTxt col-xs-12">
                    <p><?php the_content(); ?></p>
                </div>
            </div> 
            <div class="clear"></div>
            <div class="singleEventMetaInfos">
                <span class="author">Postée par <?php the_author(); ?></span>
                <span class="author">le <?php the_date(); ?></span>
            </div>          </section>
    </div>

<?php endwhile; ?>

   <section class="sidebar singleSidebar col-xs-12 col-md-3">
        <div class="searchbar">
            <input type="text" class="searchbarContent" placeholder="&#xf002;" style="font-family:FontAwesome;">
            </input>
        </div>
        <div class="categoriesContent">
            <h3>Recettes similaires</h3>
            <ul class="categoriesList">
                <a href=""><li class="categoriesItem"><img src="http://lorempixel.com/40/40">Recette similaire</li></a>
                <a href=""><li class="categoriesItem"><img src="http://lorempixel.com/40/40">Recette similaire</li></a>
                <a href=""><li class="categoriesItem"><img src="http://lorempixel.com/40/40">Recette similaire</li></a>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>
