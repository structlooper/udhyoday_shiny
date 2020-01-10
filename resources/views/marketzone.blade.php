@extends('index')
{{-- @section('market_zone') --}}
<!DOCTYPE html>
<html>
<head>
  {{-- <meta charset="utf-8">
  <title>Udhyoday</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/mag_logo_sp.png" rel="icon">
  <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}

  <!-- Main Stylesheet File -->
  {{-- <link href="css/style.css" rel="stylesheet"> --}}
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
<style>
  .farmer-logo-img{
  width: 50px;
  height: 50px;
  border-radius: 50%;
  position: relative;
  top:-6px;
}
</style>
</head>

<body>

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

        <!-- <div class="row">
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              <a href="#" class="btn btn-primary btn-custom-style">Go somewhere</a>
            </div>
          </div>

        </div> -->

      </div>
    </section>

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

</body>
</html>
@endsection