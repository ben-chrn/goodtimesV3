<?php get_header(); ?>

<section class="bg-img"> 
</section>

    <div class="container">
        <section class="form_proposer">
            <h1>Proposez nous votre recette</h1>
            <form>
                <div class="title"><input type="text" class="text_base" placeholder="Titre de votre recette" class="col-xs-12"></div>
                <div class="title"><input type="text" class="text_base" placeholder="Titre de votre recette" class="col-xs-12"></div>
                <div class="type col-xs-12 col-md-3">
                    <select name="cars">
                      <option value="volvo">Type de recette</option>
                      <option value="volvo">Volvo</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="duree"></div>
                <div class="prix">
                    <input type="number" placeholder="Prix /5" min="0" max="5">
                </div>           
            </form>
        </section>
        <div class="clear"></div>
    </div>

<?php get_footer('absolute'); ?>
