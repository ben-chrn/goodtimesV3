<?php /* Template Name: page-proposer-une-recette.php */ ?>
<?php get_header(); ?>
        <section class="left_proposer">
            <div class="text">
               <h2>Proposez nous votre recette</h2>
                <p>
                  « C’est le moment de proposer votre recette. Partagez vos bons plans, vos idées d’activités ou tout simplement vos meilleurs moments. 
                  Pour les enfants, les ados ou même les adultes, tout est bon à partagez ! Rendez heureux nos internautes. »
                </p>
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
<?php get_footer(); ?>
