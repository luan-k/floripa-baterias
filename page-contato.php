<?php get_header();
?>
<div class="page-wraper contact">
    <div class="container contato-text mt-5 px-1 pt-5">
        <div class="row">
            <div class="col-sm-6">
                <h3 data-anime="left">Telefone:</h3>
                <ul data-anime="left">
                    <li>(48) 3207-4060  </li>
                    <li>(48) 98802-6115</li>
                </ul>
                
                <h3 data-anime="left">Localização:</h3>
                <ul data-anime="left">
                    <li>
                    RD, SC-405, 1038 - Rio Tavares, Florianópolis - SC, 88048-000
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <?php echo do_shortcode('[wpforms id="47"]') ?>
                <!-- <form data-anime="right">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Insira seu email">
                    </div>
                    <div class="form-group">
                        <label for="messageTitle">Título</label>
                        <input type="text" class="form-control" id="messageTitle"
                            placeholder="Insira o titulo da mensagem">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea type="textarea" class="form-control" id="message"
                            placeholder="Insira o titulo da mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form> -->
            </div>
        </div>
    </div>
    <br><br>
    <!-- <div class="container text-center contato-text">
        <h3>Nossos Horários: </h3>
        <ul>

            Segunda a Sexta, das 08h00 às 18h.

        </ul>
    </div> -->
    <br><br>

    <!-- GOOGLE MAPS -->
    <section>
        <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56545.05225549892!2d-48.5163983!3d-27.6534369!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95273b103845ab27%3A0xbc47160451c46054!2sBaterias%20Floripa!5e0!3m2!1sen!2sbr!4v1630259841905!5m2!1sen!2sbr" width="100" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>
<?php
    get_footer();
?>