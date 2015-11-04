<?php /* Template Name: page-proposer-une-recette.php */ ?>
<?php get_header(); ?>
  <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <section class="left_proposer">
            <div class="text">
              <h2>Proposez nous votre recette</h2>
              <?php the_content(); ?>
            </div>
        </section>
        <section class="form_proposer">
          <?php acf_form_head(); ?>
          <?php acf_form(array(
                'id' => 'contact-form',
                'post_id' => 'new_post',
                'new_post' => array(
                    'post_type' => 'recette',
                    'post_status' => 'draft',
                ),
                'post_title' => 'true',
                'post_content' => 'true',
                'submit_value' => 'Proposez !',
                'updated_message' => 'Recette envoyée !',
                'return' => '',
                ));
            ?>
        </section>
        <div class="clear"></div>
    <?php endwhile; ?>
  <?php endif; ?>
<?php get_footer(); ?>
