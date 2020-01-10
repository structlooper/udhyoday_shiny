
@extends('layouts.basicFile')

@section('content')
    
@endsection
<html lang="hi" class="gr__127_0_0_1 translated-ltr">
  <head>
     <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
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
  </head>
  <link type="text/css" id="dark-mode" rel="stylesheet" href="http://127.0.0.1:8000/home"><style type="text/css" id="dark-mode-custom-style"></style><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style id="stndz-style">div[class*="item-container-obpd"], a[data-redirect*="paid.outbrain.com"], a[onmousedown*="paid.outbrain.com"] { display: none !important; } a div[class*="item-container-ad"] { height: 0px !important; overflow: hidden !important; position: absolute !important; } div[data-item-syndicated="true"] { display: none !important; } .grv_is_sponsored { display: none !important; } .zergnet-widget-related { display: none !important; } </style><link type="text/css" rel="stylesheet" charset="UTF-8" href="./home_files/translateelement.css"></head><body data-gr-c-s-loaded="true">
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2><font style="vertical-align: inherit;"><span><font style="vertical-align: inherit;">किसानों के</font></span></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> लिए </font><font style="vertical-align: inherit;">सभी कृषि समाधान </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">!</font></font></span></h2>
          <div class="btn-to-contact">
            <a href="http://127.0.0.1:8000/home#about" class="btn-get-started scrollto"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">शुरू हो जाओ</font></font></a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="./home_files/intro-img1v3.png" alt="" class="img-fluid">
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
          <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">कृषि क्षेत्र</font></font></h3>
          <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">कृषि-बाजार उपयोगकर्ताओं को एक-दूसरे के साथ संवाद करने के लिए इंटरफ़ेस प्रदान करता है ताकि कृषि-व्यवसाय को बढ़ावा दिया जा सके। </font><font style="vertical-align: inherit;">भीतर अवसरों का अन्वेषण करें।</font></font></p>

          <!-- Tabs bars tiles -->
          <div class="box2">
              <div class="tab container">
                  <button class="tablinks active" onclick="openTabs(event, &#39;Crops&#39;)" id="defaultOpen"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">बिहार</font></font></button>
                  <button class="tablinks" onclick="openTabs(event, &#39;Market&#39;)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">हरियाणा</font></font></button>
                  <button class="tablinks" onclick="openTabs(event, &#39;Trend&#39;)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">पंजाब</font></font></button>
                </div>
          </div>
        </header>

        <!-- tabs card content for display on click -->
      <!-- <div class="box2"></div>      -->
          <div id="Crops" class="tabcontent" style="display: block;">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मुकेश</font></font></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (मुजफ्फर नगर)</font></font></h4>
                    <div class="description">
                      <ul>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">फसलें:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> मक्का</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">राशि:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 200 क्विंटल</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">लागत:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> रु। </font><font style="vertical-align: inherit;">5000 / क्विंटल</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">संपर्क:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 9808930480</font></font></li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">और देखो</font></font></a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">राम लाल</font></font></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (धारबंगा)</font></font></h4>
                    <div class="description">
                      <ul>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">फसलें:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> गेहूं</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">राशि:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 100 क्विंटल</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">लागत:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> रु। </font><font style="vertical-align: inherit;">2000 / क्विंटल</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">संपर्क:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 7808932480</font></font></li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">और देखो</font></font></a>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मुंशी लाल</font></font></a><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (पटना)</font></font></h4>
                    <div class="description">
                      <ul>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">फसलें:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> सुगंधित गन्ना</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">राशि:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 150 क्विंटल</font></font></li>
                          <li><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">लागत:</font></font></b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> रु। </font><font style="vertical-align: inherit;">4500 / क्विंटल</font></font></li>
                          <li><b>Contact:</b> 9867933580</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                </div>
              </div>
          </div>
          
          <div id="Market" class="tabcontent" style="display: none;">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">Naveen</a><br>(Sonepat)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Mustard</li>
                          <li><b>Amount:</b> 50 Quintal</li>
                          <li><b>Cost:</b>Rs. 6000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">Ajit</a><br>(Panipat)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Rice</li>
                          <li><b>Amount:</b> 175 Quintal</li>
                          <li><b>Cost:</b>Rs. 1500/ Quintal</li>
                          <li><b>Contact:</b> 9812340480</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">Pardeep</a><br>(Gurugram)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Barley</li>
                          <li><b>Amount:</b> 120 Quintal</li>
                          <li><b>Cost:</b>Rs. 4300/ Quintal</li>
                          <li><b>Contact:</b> 9809830480</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
            </div> 
          </div>
          
          <div id="Trend" class="tabcontent" style="display: none;">
            <div class="row">
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">Navdeep</a><br>(Chandigarh)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Cotton</li>
                          <li><b>Amount:</b> 185 Quintal</li>
                          <li><b>Cost:</b>Rs. 1200/ Quintal</li>
                          <li><b>Contact:</b> 9808931234</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">Manjeet</a><br>(Ludhiana)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Wheat</li>
                          <li><b>Amount:</b> 120 Quintal</li>
                          <li><b>Cost:</b>Rs. 4000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
                  </div>
                  </div>
                <div class="col-md-6 col-lg-4  " data-wow-delay="0.2s" data-wow-duration="0.4s">
                  <div class="box">
                    <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img" src="./home_files/images" alt="" style="color: #ff689b;"></div>
                    <h4 class="title"><a href="http://127.0.0.1:8000/home">kala</a><br>(patiala)</h4>
                    <div class="description">
                      <ul>
                          <li><b>Crops:</b> Pearl Millet</li>
                          <li><b>Amount:</b> 200 Quintal</li>
                          <li><b>Cost:</b>Rs. 5000/ Quintal</li>
                          <li><b>Contact:</b> 9808930480</li>
                      </ul>
                    </div>
                    <a href="http://127.0.0.1:8000/home#" class="btn btn-primary btn-custom-style">View More</a>
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
    

    <!--==========================
      Features Section
    ============================-->
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>About</h3>
          
        </header>
        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp" style="visibility: hidden; animation-name: none;">
            <img src="./home_files/about.jfif" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" style="visibility: hidden; animation-name: none;">
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
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" style="visibility: hidden; animation-name: none;">
            <img src="./home_files/about-1.jfif" class="img-fluid" alt="" style="height: 400px;">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" style="visibility: hidden; animation-name: none;">
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
              </p><ul>
                <li>To enhance the per capita income to minimize the difference between rural and urban.</li>
                <li>To create marketing facilities to reduce post-harvest loss and distress sale of agriculture produce.</li>
                <li>To enhance the economic development of all stake-holders.</li>
              </ul>
            <p></p>
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
          
        </header>

        <ul id="faq-list" class="wow fadeInUp" style="visibility: hidden; animation-name: none;">
          <li>
            <a data-toggle="collapse" class="collapsed" href="http://127.0.0.1:8000/home#faq1">What is sustainable agriculture? <i class="ion-android-remove"></i></a>
            <div id="faq1" class="collapse" data-parent="#faq-list">
              <p>
                Sustainable agriculture can provide high food, feed, or energy crop yields without destroying the environment or undermining current productivity. Farmers who take a sustainable approach substitute knowledge for pesticides and fertilizers. They use crop rotations and other adjustments of the agricultural system to solve problems. For example, soil enrichment produces healthy plants that resist disease, cover crops retard erosion and control weeds, and natural predators help control pests. The result is that farmers are able to minimize their use of pesticides and fertilizers, thereby saving money and protecting the environment.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="http://127.0.0.1:8000/home#faq2" class="collapsed">How does "organic agriculture" differ from "sustainable agriculture" ?<i class="ion-android-remove"></i></a>
            <div id="faq2" class="collapse" data-parent="#faq-list">
              <p>
                Organic agriculture has strict restrictions as to which, if any, synthetically compounded chemical pesticides can be used on crops; does not allow the use of inorganic fertilizers or additives to be used in the soil nor antibiotics to be used in animal production. Crop fields must be certified chemical-free for three years before a farmer can market crops as organic. None of these restrictions apply to sustainable agriculture systems.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="http://127.0.0.1:8000/home#faq3" class="collapsed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">जैव उर्वरक का उपयोग करते समय किन सावधानियों का पालन किया जाना चाहिए?</font></font><i class="ion-android-remove"></i></a>
            <div id="faq3" class="collapse" data-parent="#faq-list">
              <p>
                Seeds should be kept moist. Avoid using fungicides or other chemicals. Inoculants should be kept in the shade away from direct sunlight. Treated seeds should be sown in moist soil.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="http://127.0.0.1:8000/home#faq4" class="collapsed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">क्या संकर धान की फसल से काटा हुआ बीज अगली फसल लगाने के लिए फिर से इस्तेमाल किया जा सकता है?</font></font><i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                No. Every season, farmers have to purchase the fresh F1 hybrid seed for growing the crop of hybrid rice. The high yielding potential of hybrids is expressed in first generation only. If the seed from hybrid crop is used again for replanting, there will be lot of variation in the crop due to segregation and yield is reduced drastically.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="http://127.0.0.1:8000/home#faq5" class="collapsed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">क्या स्वयं के संकर चावल बीज का उत्पादन संभव है? </font></font><i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                In order to maintain high seed quality and purity and for realizing targetted yields, hybrid seed should be strictly produced under the supervision of a seed production agency either in public or private sector. This being a highly technical and skill oriented enterprise, it may not be proper to leave it entirely to the farmers themselves, since quality control and marketing are also involved.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="http://127.0.0.1:8000/home#faq6" class="collapsed"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मैं वृद्ध रोपाई का प्रबंधन कैसे कर सकता हूं?</font></font><i class="ion-android-remove"></i></a>
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

  <a href="http://127.0.0.1:8000/home#" class="back-to-top" style="display: none;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
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




<!-- all the CSS files and js files and lib goes here!! -->

    
        <style>
            .farmer-logo-img{
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: relative;
            top:-6px;
          }
          </style>
        
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="./home_files/mag_logo_sp.png" rel="icon">
        <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

        <!-- Google Fonts -->
        <link href="./home_files/css" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="./home_files/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="./home_files/font-awesome.min.css" rel="stylesheet">
        <link href="./home_files/animate.min.css" rel="stylesheet">
        <link href="./home_files/ionicons.min.css" rel="stylesheet">
        <link href="./home_files/owl.carousel.min.css" rel="stylesheet">
        <link href="./home_files/lightbox.min.css" rel="stylesheet">

        <!-- fontaesome file -->
  <script src="./home_files/4cd0f195bd.js.download" crossorigin="anonymous"></script><link rel="stylesheet" href="./home_files/free.min.css" media="all">

        <!-- Main Stylesheet File -->
        <link href="./home_files/style.css" rel="stylesheet">
        <link href="./home_files/myStyle.css" rel="stylesheet">


<script>
    function weather() {
    
      var location = document.getElementById("location");
      var apiKey = 'a75a39c3d635c5c43f461a23b0d0037b'; // PLEASE SIGN UP FOR YOUR OWN API KEY
      var url = 'https://api.forecast.io/forecast/';
    
      navigator.geolocation.getCurrentPosition(success, error);
    
      function success(position) {
        latitude = position.coords.latitude;
        longitude = position.coords.longitude;
    
         $.getJSON(url + apiKey + "/" + latitude + "," + longitude + "?callback=?", function(data) {
             temp_f = data.currently.temperature;
             temp_c = (temp_f - 32)*(5/9);
             temp_c_roundOff = Math.round(temp_c * 100) / 100;
          $('#temp').html(temp_c_roundOff + '° c');
          $('#minutely').html(data.minutely.summary);
        });
      }
    
      function error() {
        location.innerHTML = "Unable to retrieve your location";
      }
    
    }
    weather();
</script>
    
    
        <!-- JavaScript Libraries -->
        <script src="./home_files/jquery.min.js.download"></script>
        <script src="./home_files/jquery-migrate.min.js.download"></script>
        <script src="./home_files/bootstrap.bundle.min.js.download"></script>
        <script src="./home_files/easing.min.js.download"></script>
        <script src="./home_files/mobile-nav.js.download"></script>
        <script src="./home_files/wow.min.js.download"></script>
        <script src="./home_files/waypoints.min.js.download"></script>
        <script src="./home_files/counterup.min.js.download"></script>
        <script src="./home_files/owl.carousel.min.js.download"></script>
        <script src="./home_files/isotope.pkgd.min.js.download"></script>
        <script src="./home_files/lightbox.min.js.download"></script>
        <!-- Contact Form JavaScript File -->
        <script src="./home_files/contactform.js.download"></script>

        <!-- Template Main Javascript File -->
        <script src="./home_files/main.js.download"></script>
    



    
  <!--==========================
  Header
  ============================-->
  <header id="header" class="">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="http://127.0.0.1:8000/home#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/home#" class="facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/home#" class="linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/home#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/forcast" class="weather"><div id="temp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9.79 ° सें</font></font></div><div id="minutely"></div><i class="fas fa-cloud" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/home#" class="toggle">
            <div class="button r" id="button-1">
            <input type="checkbox" class="checkbox">
            <div class="knobs"></div>
            <div class="layer"></div>
          </div>
        </a>
          <a href="http://127.0.0.1:8000/login" class="login"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">लॉग इन करें </font></font><i class="fas fa-user-circle" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/register" class="register"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">रजिस्टर करें </font></font><i class="fas fa-user-circle" aria-hidden="true"></i></a>
          <a href="http://127.0.0.1:8000/donateUs" class="donate"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">दान करना </font></font><i class="fas fa-donate" aria-hidden="true"></i></a>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="text-light"><a href="http://127.0.0.1:8000/home" class="scrollto"><img src="./home_files/mag_logo_sp.png"><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;Udhyoday</font></font></span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="http://127.0.0.1:8000/home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">घर</font></font></a></li>
          <li class="drop-down"><a href="http://127.0.0.1:8000/home"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">फार्म</font></font></a>
            <ul>

              
              <li class="drop-down"><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">रबी फसलें</font></font></a>
                <ul>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">आलू</font></font></a></li>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">गेहूँ</font></font></a></li>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मटर</font></font></a></li>
                </ul>
              </li>

              
              <li class="drop-down"><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ज़ैद फसलें</font></font></a>
                <ul>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">चावल</font></font></a></li>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मक्का</font></font></a></li>
                </ul>
              </li>

              
              <li class="drop-down"><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">खरीफ की फसलें</font></font></a>
                <ul>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">सोयाबीन</font></font></a></li>
                  <li><a href="http://127.0.0.1:8000/farms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">कपास</font></font></a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="http://127.0.0.1:8000/home#about"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">के बारे में</font></font></a></li>
          <li><a href="http://127.0.0.1:8000/home#team"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मंडी</font></font></a></li>
          <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">सहयोग</font></font></a></li>
          <li><a href="http://127.0.0.1:8000/home#faq"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">सामान्य प्रश्न</font></font></a></li>
          
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->


    

<!-- Footer Content Links, intro -->


    
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6">
                <div class="footer-info">
                  <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Udhyoday</font></font></h3>
                  <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">उधयोड भारत में कृषि क्षेत्र के विकास की दिशा में एक पहल है। </font><font style="vertical-align: inherit;">हम आपकी खेती से संबंधित सभी गतिविधियों में आपकी मदद करने के लिए यहां हैं। </font><font style="vertical-align: inherit;">यह पोर्टल कई क्षेत्रों में किसानों को फसल रोटेशन और संरक्षण, सिंचाई तकनीकों, बेहतर भंडारण, और बढ़ती आय के लिए उपयुक्त फसलों की पहचान करने के लिए बेहतर समर्थन देने के लिए दिशा निर्देश प्रदान करता है।</font></font></p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="footer-links">
                  <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">उपयोगी कड़ियाँ</font></font></h4>
                  <ul>
                    <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">घर</font></font></a></li>
                    <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">फार्म</font></font></a></li>
                    <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">हमारे बारे में</font></font></a></li>
                    <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">मंडी</font></font></a></li>
                    <li><a href="http://127.0.0.1:8000/home#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">सहयोग</font></font></a></li>
                    <li><a href="http://127.0.0.1:8000/faq.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">सामान्य प्रश्न </font></font></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="footer-links">
                  <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">संपर्क करें</font></font></h4>
                  <p>
                    53 Dakers' lane<br>
                    India <br><br>
                    <strong>Phone:</strong> <a href="tel:9582384151">9582384151</a><br>
                    <strong>Email:</strong> udhyoday@gmail.com<br>
                  </p>
                </div>
                <div class="social-links">
                  <a href="http://127.0.0.1:8000/home#" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a href="http://127.0.0.1:8000/home#" class="facebook"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                  <a href="http://127.0.0.1:8000/home#" class="instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                  <a href="http://127.0.0.1:8000/home#" class="linkedin"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
    </div>
  <div class="container">
    <div class="copyright">
      © Copyright <strong>Udhyoday</strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- #footer -->

    

<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="><div class="lb-nav"><a class="lb-prev" href="http://127.0.0.1:8000/home"></a><a class="lb-next" href="http://127.0.0.1:8000/home"></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./home_files/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><script type="text/javascript" async="" src="./home_files/21dca2f7d5837c09f5.js.download"></script><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body><span class="gr__tooltip"><span class="gr__tooltip-content"></span><i class="gr__tooltip-logo"></i><span class="gr__triangle"></span></span></html>