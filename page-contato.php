<?php
// Template Name: Contato
get_header();
$textinho = CFS()->get('texto_intro');
?>

<!-- Call to Action Contato -->
<div class="bg-grey mx-auto" style="background: 
    url('<?= get_template_directory_uri();?>/assets/images/Contato.jpeg') no-repeat; background-size: 1920px 303px;">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="cta-contato text-center pb-5">
                    <h3>Entre em contato</h3>
                    <hr>
                    <p>
                        <?= $textinho;?>
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
                <form class="donnovo" method="post" action="<?= get_template_directory_uri(  );?>/enviar_email.php">
                    <div class="form-group">
                        <input name="nome" class="form-control" type="text" placeholder="Nome" required>
                    </div><div class="form-group">
                        <input type="text" name="telefone" class="form-control" placeholder="Telefone" required>
                    </div><div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div><div class="form-group">
                        <textarea id="my-input" name="message" class="form-control" placeholder="Mensagem" rows="3" required></textarea>
                    </div><div class="form-group">
                        <input type="submit" value="Enviar" class="btn btn-danger btn-lg">
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-5 offset-sm-1">
                <h3>Siga-nos nas Redes Sociais</h3>
                <div class="row my-2">
                    <a href="https://www.facebook.com/donnovooficial/" target="_blank">
                        <img src="<?= get_template_directory_uri();?>/assets/images/facebook.svg" alt="" class="envinfos-ic2">
                    </a>
                   <a href="https://www.instagram.com/donnovooficial/" target="_blank">
                        <img src="<?= get_template_directory_uri();?>/assets/images/instagram.svg" alt="" class="envinfos-ic2">
                    </a>
                </div>
                <h4 class="text-colored">Dúvidas? Chama no Whats!<br><small>(19) 99774-0570 </small></h4>

            </div>
        </div>
    </div>
    <!-- /Formulario -->

    <!-- Maps -->
    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.293387883089!2d-46.94469268550567!3d-22.380294585282005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c857ccd8a176af%3A0x5818d8e1158ff9d9!2sR.+Paran%C3%A1%2C+5+-+Vila+Vasconcelos%2C+Mogi+Gua%C3%A7u+-+SP%2C+13844-100!5e0!3m2!1spt-PT!2sbr!4v1551753193883" style="width: 100%; margin-bottom: 0 !important;" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    <!-- /Maps -->
<?php get_footer();?>