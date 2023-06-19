<!DOCTYPE html>
<html lang="en">

@include('include.head')
<body>

  <!-- ======= Header ======= -->
  @include('include.header')
  <!-- End Header -->

  <main id="partenaires">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Details du projet</h2>
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li>Details du projet</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details" style="background-color: #F3F6FC;">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="">
                  <img src="assets/img/fst.jpeg" alt="">
                </div>
              </div>
              <div class="portfolio-description" style="text-align: justify;">
                <h2>Présentation de l'Université des Comores</h2>
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia.
                  Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia
                  accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt
                  eius.
                </p>
              </div>
              <!-- <section id="faq" class="faq">
                <div class="container">

                  <div class="section-title" data-aos="zoom-out">
                   
                    <p>Activités du projet</p>
                  </div>

                  <ul class="faq-list">

                    <li>
                      <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Réalisations phares <i
                          class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                          curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                      </div>
                    </li>

                    <li>
                      <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Activités en cours <i
                          class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                          laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                          Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa
                          tincidunt dui.
                        </p>
                      </div>
                    </li>

                    <li>
                      <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Activités en préparation <i
                          class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                      <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                        <p>
                          Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                          elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                          pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at
                          elementum eu facilisis sed odio morbi quis
                        </p>
                      </div>
                    </li>



                  </ul>

                </div>
              </section> -->
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Equipe de projet</h3>
              <ul>
                <li><div class="row">
                  <div class="col-md-6">Nom:</div>
                  <div class="col-md-6">Fonction:</div>
                </div></li>
              
              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('include.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

 @include('include.js')

</body>

</html>