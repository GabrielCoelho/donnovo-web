<?php
// Template Name: Contato
get_header();
?>

<!-- Call to Action Contato -->
<div class="bg-grey mx-auto">
        <div class="container">
            <div class="row pt-5">
                <div class="cta-contato text-center pb-5">
                    <h3>Entre em contato</h3>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem incidunt omnis id molestias adipisci accusantium 
                        explicabo dolore aliquid architecto nihil. Sequi temporibus enim possimus officiis. Accusantium soluta 
                        reiciendis illo libero!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Call to Action -->

    <!-- Formulario  -->
    <div class="container my-5">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <form class="donnovo" method="post" action="<?= get_template_directory_uri(  );?>/enviar-email.php">
                    <div class="form-group">
                        <input name="nome" class="form-control" type="text" placeholder="Nome">
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <textarea id="my-input" name="message" class="form-control" placeholder="Mensagem" rows="3"></textarea>
                        <input type="submit" value="Enviar" class="btn btn-danger btn-lg">
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 offset-sm-1">
                <h3>Siga-nos nas Redes Sociais</h3>
                <div class="row ml-3">
                    <div class="rounded-circle mr-3">
                        <i class="fab fa-facebook fa-3x"></i>
                    </div>
                    <div class="rounded-circle mr-3">
                        <i class="fab fa-facebook fa-3x"></i>
                    </div>
                    <div class="rounded-circle mr-3">
                        <i class="fab fa-facebook fa-3x"></i>
                    </div>
                    <div class="rounded-circle mr-3">
                        <i class="fab fa-facebook fa-3x"></i>
                    </div>
                </div>
                <h4 class="text-colored">Dúvidas? Chama no Whats<br><small>(19)9XXXX-XXXX</small></h4>

            </div>
        </div>
    </div>
    <!-- /Formulario -->

<?php get_footer();?>