<?php 
//Template Name: Contato 
?>

<?php get_header() ?>

<section id="wrapper">

  <nav data-depth="2" class="breadcrumb hidden-sm-down">
    <div class="container">
      <div class="box-breadcrumb">
        <ol>
          <li>
            <a href="index.html"><span>Home</span></a>
          </li>

          <li>
            <span>Contato</span>
          </li>
        </ol>
      </div>
    </div>
  </nav>

  <div class="container" id="contact-form-box">

    <div class="row">

      <div id="left-column" class="col-lg-12 col-sp-12">

        <div class="row ApRow" style="">

          <div class="mapa-contato col-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.455562748105!2d-49.06646128489897!3d-26.92076860002439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94df18c1d764aec9%3A0x117891d444b94781!2sShopping%20H!5e0!3m2!1spt-BR!2sbr!4v1658194288499!5m2!1spt-BR!2sbr"
              width="100%" height="600" style="padding: 70px 20px 70px 20px" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>

          </div>

          <section id="content" class="page-content card card-block">

            <section class="contact-form">

              <form action="submit" method="post" enctype="multipart/form-data">

                <section class="form-fields">

                  <div class="form-group row">
                    <div class="col-xs-12">
                      <h3 class="title_block">Contate nos</h3>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label class="form-control-label" for="id_contact">Nome</label>
                      <input id="nome" class="form-control" name="from" type="email" value=""
                        placeholder="Digite seu nome" />
                    </div>
                  </div>

                  <div class="col-12">

                    <div class="form-group">
                      <label class="form-control-label" for="email">E-mail</label>
                      <input id="email" class="form-control" name="from" type="email" value=""
                        placeholder="seu@email.com" />
                    </div>

                  </div>

                  <div class="col-12">

                    <div class="form-group textarea-message">
                      <label class="form-control-label" for="contactform-message">Mensagem</label>
                      <textarea id="contactform-message" class="form-control" name="message"
                        placeholder="Digite aqui sua mensagem" rows="10"></textarea>
                    </div>

                    <footer class="form-footer">
                      <input class="btn btn-primary" type="submit" name="submitMessage" value="Enviar" />
                    </footer>

                  </div>

                </section>
              </form>

            </section>

          </section>

        </div>

      </div>

    </div>

  </div>
</section>

<?php get_footer() ?>