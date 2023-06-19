<!DOCTYPE html>
<html lang="en">

@include('include.head')

<body>

  <!-- ======= Header ======= -->
 @include('include.header')
  <!-- End Header -->

  <main id="actualite">

    <!-- ======= Breadcrumbs ======= -->
    

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container"> <br> <br> <br>
        <h1 class="text-center"> <strong> Titre de l'actualité </strong></h1> <br> <br>

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="">
                  <img src="assets/img/team/team-1.jpg" alt="">
                </div>

              
              </div>
            
            </div>
            <div class="portfolio-description">
            
                <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p>
              </div>
          </div>
         

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Publication recentes</h3>
              <ul>
                <li>  <a href="http://"> Titre de l'actualité</a></li>
                <li><a href="http://">Titre de l'actualité</a></li>
                <li><a href="http://">Titre de l'actualité</a></li>
                <li><a href="http://">Titre de l'actualité</a></li>

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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 @include('include.js')

</body>

</html>