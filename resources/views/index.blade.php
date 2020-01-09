

@extends('layouts.footer')
@extends('layouts.header')
{{-- @extends('layouts.basicFile') --}}
@section('header')
@endsection   
<html lang="en">
<body>
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>All Agriculture Solutions<br>for <span>Farmers!</span></h2>
          <div class = "btn-to-contact">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img1v3.png" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->
  <main id="main">
    <!--==========================
      Services Section
      ============================-->
      
<!--==========================
      Services Section
    ============================-->
   
    <section id="services" class="section-bg">

      <!-- Main tab of servces -->
      <div class="container">
        <header class="section-header">
          <h3>Argriculture Zone</h3>
          <p>Agri-market  provides users with an interface to communicate with each other so as to promote the agro-business. Explore the opportunities within.</p>

          <!-- Tabs bars tiles -->
          <div class="box2">
              <div class="tab container">
                  <button class="tablinks" onclick="openTabs(event, 'Crops')" id="defaultOpen">Bihar</button>
                  <button class="tablinks" onclick="openTabs(event, 'Market')">Haryana</button>
                  <button class="tablinks" onclick="openTabs(event, 'Trend')">Punjab</button>
                </div>
          </div>
        </header>

        <!-- tabs card content for display on click -->
      <!-- <div class="box2"></div>      -->
          <div id="Crops" class="tabcontent">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Mukesh</a><br>(Muzaffur Nagar)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Maize</li>
                          <li><b>Amount:</b> 200 Quintal</li>
                          <li><b>Cost:</b>Rs. 5000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Raam Lal</a><br>(Dharbanga)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Wheat</li>
                          <li><b>Amount:</b> 100 Quintal</li>
                          <li><b>Cost:</b>Rs. 2000/ Quintal</li>
                          <li><b>Contact:</b> 7808932480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Munsi Lal</a><br>(Patna)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Suger cane</li>
                          <li><b>Amount:</b> 150 Quintal</li>
                          <li><b>Cost:</b>Rs. 4500/ Quintal</li>
                          <li><b>Contact:</b> 9867933580</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                </div>
              </div>
          </div>
          
          <div id="Market" class="tabcontent">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Naveen</a><br>(Chandigarh)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Mustard</li>
                          <li><b>Amount:</b> 50 Quintal</li>
                          <li><b>Cost:</b>Rs. 6000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Ajit</a><br>(Chandigarh)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Rice</li>
                          <li><b>Amount:</b> 175 Quintal</li>
                          <li><b>Cost:</b>Rs. 1500/ Quintal</li>
                          <li><b>Contact:</b> 9812340480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Pardeep</a><br>(Chandigarh)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Barley</li>
                          <li><b>Amount:</b> 120 Quintal</li>
                          <li><b>Cost:</b>Rs. 4300/ Quintal</li>
                          <li><b>Contact:</b> 9809830480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
            </div> 
          </div>
          
          <div id="Trend" class="tabcontent">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Navdeep</a><br>(Chandigarh)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Cotton</li>
                          <li><b>Amount:</b> 185 Quintal</li>
                          <li><b>Cost:</b>Rs. 1200/ Quintal</li>
                          <li><b>Contact:</b> 9808931234</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">Manjeet</a><br>(Ludhiana)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Wheat</li>
                          <li><b>Amount:</b> 120 Quintal</li>
                          <li><b>Cost:</b>Rs. 4000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img  class="farmer-logo-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="">kala</a><br>(patiala)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Pearl Millet</li>
                          <li><b>Amount:</b> 200 Quintal</li>
                          <li><b>Cost:</b>Rs. 5000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
            </div>
          </div>
      </div>
      </div>
    </section>
    <!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->
    <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">

        <header class="section-header">
          <h3>Our Reach</h3>
          <p>Udhyoday redefines the aspect of digitalisation of agricultural sector . the recent growth statistics ofthis platform:</p>
        </header>

        <div class="row">
          <div class="col-lg-6">
            <div class="why-us-img">
              <img src="img/our_reach.jfif" alt="" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6">
            <div class="why-us-content">
              <div class="container">
                  <div class="row counters">

                    <div class="col-lg-4 col-6 text-center">
                      <span data-toggle="counter-up">768</span>
                      <p>Users</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                      <span data-toggle="counter-up">421</span>
                      <p>Sewa Kendera</p>
                    </div>

                    <div class="col-lg-4 col-6 text-center">
                      <span data-toggle="counter-up">253</span>
                      <p>Experts</p>
                    </div>

                    {{-- <div class="col-lg-3 col-6 text-center">
                      <span data-toggle="counter-up">18</span>
                      <p>Hard Workers</p>
                    </div> --}}

                  </div>

                </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Users</h4>
                <p>Users include farmers and buyers registered on the portal.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Seva Center</h4>
                <p>Govt. recruited Experts available on the portal for all related queries and suuggestions asked by the users.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>A number of help centers are distributed all over the country for the facilitation of the farmer community.</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Features Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/features-2.svg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
            <p>
             Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
            </p>
            <p>
              Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
            </p>
            <p>
              Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
            </p>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Different sections for performance</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <!-- <li data-filter="*" class="filter-active">Crops</li> -->
              <li data-filter=".filter-app">Section 1</li>
              <li data-filter=".filter-card">Section 2</li>
              <li data-filter=".filter-web">Section 3</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <!-- app -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- web -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- app -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- card -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- web -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- app -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #team -->
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->



  </main>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->
  <script>
    document.getElementsByClassName('tablinks')[0].click()
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
      <script>
        document.getElementsByClassName('tablinks')[0].click() 
        function openTabs(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        
         // Get the element with id="defaultOpen" and click on it
       document.getElementById("defaultOpen").click();
  </script>
</body>
</html>

@section('footer_content')

@endsection
