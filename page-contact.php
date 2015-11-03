
<?php /* Template Name: page-contact.php */ ?>

<?php get_header(); ?>
<div class="contact">
    <div class="container">
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
        </section>    
    </div>
</div>

<?php get_footer(c); ?>

