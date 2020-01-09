

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
                    <h4 class="title"><a href="">Naveen</a><br>(Sonepat)</h4>
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
                    <h4 class="title"><a href="">Ajit</a><br>(Panipat)</h4>
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
                    <h4 class="title"><a href="">Pardeep</a><br>(Gurugram)</h4>
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
      Call To Action Section
    ============================-->
    {{-- <section id="call-to-action" class="wow fadeInUp">
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
    </section><!-- #call-to-action --> --}}

    <!--==========================
      Features Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>About</h3>
          {{-- <p>Udhyoday is an initiative toward the growth of agriculture sector in India.  We are here to help you in all the activities related to your farming.</p> --}}
        </header>
        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/about.jfif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Udhyoday</h4>
            <p>
              Udhyoday is an initiative toward the growth of agriculture sector in India.  We are here to help you in all the activities related to your farming
              This portal provides guidelines to support farmers better in many areas like crop rotation and protection, irrigation techniques, better storage, and identifying suitable crops for increasing income.
            </p>
            <p>
              We are a platform that exhibits and makes accessible various types of data about all schemes, marketplace, crop management and help center details.
This is to facilitate the associated farmers community with the progressive details of new crop management techniques and  contemporary market demands of the yield thus to impart farmers with technical knowledge on basic agriculture.
            </p>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/about-1.jfif" class="img-fluid" alt="" style="height: 400px;">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>Vision</h4>
            <p>
              Udhyoday has a vision of improved livelihoods of rural communities through sustainable agricultural practices and entrepreneurship.
            </p>
            
            <h4>Mission</h4>
            <p>
              To increase production and productivity of agri-horticultural crops using environment friendly science and technology while ensuring increased net farm income to the farmers through various schemes, programmes and welfare measures.
            </p>
            <h4>Objectives</h4>
            <p>
              <ul>
                <li>To enhance the per capita income to minimize the difference between rural and urban.</li>
                <li>To create marketing facilities to reduce post-harvest loss and distress sale of agriculture produce.</li>
                <li>To enhance the economic development of all stake-holders.</li>
              </ul>
            </p>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

        <!--==========================
      Frequently Asked Questions Section
    ============================-->
    <section id="faq">
      <div class="container">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> --}}
        </header>

        <ul id="faq-list" class="wow fadeInUp">
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">What is sustainable agriculture? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Sustainable agriculture can provide high food, feed, or energy crop yields without destroying the environment or undermining current productivity. Farmers who take a sustainable approach substitute knowledge for pesticides and fertilizers. They use crop rotations and other adjustments of the agricultural system to solve problems. For example, soil enrichment produces healthy plants that resist disease, cover crops retard erosion and control weeds, and natural predators help control pests. The result is that farmers are able to minimize their use of pesticides and fertilizers, thereby saving money and protecting the environment.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">How does "organic agriculture" differ from "sustainable agriculture" ?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Organic agriculture has strict restrictions as to which, if any, synthetically compounded chemical pesticides can be used on crops; does not allow the use of inorganic fertilizers or additives to be used in the soil nor antibiotics to be used in animal production. Crop fields must be certified chemical-free for three years before a farmer can market crops as organic. None of these restrictions apply to sustainable agriculture systems.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">What precautions measures should be followed while using biofertilizers ?<i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Seeds should be kept moist. Avoid using fungicides or other chemicals. Inoculants should be kept in the shade away from direct sunlight. Treated seeds should be sown in moist soil.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Can the harvested seed from hybrid rice crop be used again for planting next crop ?<i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                No. Every season, farmers have to purchase the fresh F1 hybrid seed for growing the crop of hybrid rice. The high yielding potential of hybrids is expressed in first generation only. If the seed from hybrid crop is used again for replanting, there will be lot of variation in the crop due to segregation and yield is reduced drastically.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Is it possible to produce own hybrid rice seed ? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                In order to maintain high seed quality and purity and for realizing targetted yields, hybrid seed should be strictly produced under the supervision of a seed production agency either in public or private sector. This being a highly technical and skill oriented enterprise, it may not be proper to leave it entirely to the farmers themselves, since quality control and marketing are also involved.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">How can I manage aged seedlings ?<i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Follow the spacing recommended to medium and low fertility soil
Plant one or two seedlings per hill
Avoid cluster planting of aged seedlings, which are hindering the formation of new tillers.
New tillers alone are capable of producing normal harvestable panicle. Weak panicle may appear in the mother culm within three weeks after transplanting and vanishes well before harvest.
To encourage the tiller production, enhance the basal N application by 50% from the recommended and thereafter follow the normal schedule recommended for other stages.

              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- #faq -->



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
