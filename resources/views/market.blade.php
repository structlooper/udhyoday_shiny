@extends('layouts.footer')
@extends('layouts.header')
@section('header')
    
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Market - Udhyoday</title>
<style>

    .farmer-logo-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: relative;
        top: -6px;
    }

    #Crops{
        display: block;
    }

    .agriTable{
        padding: 100px 50px;
    }
    
    .agriTable input{
        padding: 10px;
        font-size: 20px;
    }

    
</style>
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
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<script>
            window.onload = function () {
                    var ctx = document.getElementById("canvas").getContext("2d");
                    window.myBar = new Chart(ctx, {
                        type: 'bar',
                        data: barChartData,
                        options: {
                            responsive: true,
                            legend: {
                                position: 'top',
                            },
                            title: {
                                display: true,
                                text: ''
                            }
                        }
                    });

                };
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
</head>
<body>
    <div id="box1">
        <div id="container" style="width: 100%; height:190px;">
            <canvas id="canvas" style="display: block;width: 456px; max-height: 196px;"></canvas>
        </div>
        <button id="randomizeData">Randomize Data</button>
        <button id="addDataset">Add Dataset</button>
        <button id="removeDataset">Remove Dataset</button>
        <button id="addData">Add Data</button>
        <button id="removeData">Remove Data</button>
    </div>
    <div id="box2">
        <section id="services" class="section-bg">
        
            <!-- Main tab of servces -->
            <div class="container">
                <header class="section-header">
                    <h3>Argriculture Zone</h3>
                    <p>Agri-market provides users with an interface to communicate with each other so as to promote the
                        agro-business. Explore the opportunities within.</p>
        
                    <!-- Tabs bars tiles -->
                    <div class="box2">

                    </div>
                </header>
        
                <!-- tabs card content for display on click -->
                <!-- <div class="box2"></div>      -->
                <div id="Crops" class="tabcontent">
                    <div class="row">
                        <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                            <div class="box">
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
                    <div class="row">
                        <div class="col-md-6 col-lg-4  " data-wow-duration="0.4s">
                            <div class="box">
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
                                <div class="icon" style="background: #fceef3;"><img class="farmer-logo-img"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbvTgsU-PyFXEoHpkk9YOUfRi2D-nIIBKnNgpA4eruckVrz9FF4Q&s"
                                        alt="" style="color: #ff689b;"></div>
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
            </section>
    </div>            
    <div id="box3">
        <Section class="container">
            <div class="row">
                <div
                    class="col-lg-12 col-md-12 col-sm-12 col-sd-12 col-xs-12 nomp-sides nomp-sides-mob vert-offset-bottom-2 vert-pad-mob">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-sd-12 col-xs-12 nomp-sides nomp-sides-mob">
                        <div class="table-responsive agriTable">
                            <h2 class="text-center">Market price Chart of items </h2>
                            <p class="text-center" style="font-size: 16px;">This chart can sorted by search filter for better info.</p>
                            <input type="text" id="myNameInput" onkeyup="myNameFunction()" placeholder="Mandi Name"
                                title="Type in a name">&nbsp;&nbsp;
                            <input type="text" id="myCountaryInput" onkeyup="myCountaryFunction()"
                                placeholder="Comodity Name" title="Type in a name">
                                <br><br>
                            <table class="table table-hover table-striped" id="myTable">
                                <tr class="header">
                                    <th>Mandi <br></th>
                                    <th>Commodity</th>
                                    <th>State</th>
                                    <th>Arrival</th>
                                    <th>Variety</th>
                                    <th>Min Price<br></th>
                                    <th>Max Price<br></th>
                                    <th>Modal Price</th>
                                </tr>
                                <tbody id="marketresults">
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Bottle gourd</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>1000&nbsp;Rs/Quintal</td>
                                        <td>1600&nbsp;Rs/Quintal</td>
                                        <td>1300&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Cauliflower</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>1000&nbsp;Rs/Quintal</td>
                                        <td>1400&nbsp;Rs/Quintal</td>
                                        <td>1200&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Cucumbar(Kheera)</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>1200&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                        <td>1850&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Ginger(Green)</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>4000&nbsp;Rs/Quintal</td>
                                        <td>6000&nbsp;Rs/Quintal</td>
                                        <td>5000&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Green Chilli</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>1800&nbsp;Rs/Quintal</td>
                                        <td>2000&nbsp;Rs/Quintal</td>
                                        <td>1900&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Lemon</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2000&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                        <td>2250&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Peas Wet</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2000&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                        <td>2250&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Pomegranate</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>3000&nbsp;Rs/Quintal</td>
                                        <td>7000&nbsp;Rs/Quintal</td>
                                        <td>5000&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Chandigarh(Grain/Fruit)</td>
                                        <td>Tomato</td>
                                        <td>Chandigarh</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>1000&nbsp;Rs/Quintal</td>
                                        <td>2400&nbsp;Rs/Quintal</td>
                                        <td>1700&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Surajpur</td>
                                        <td>Paddy(Dhan)(Common)</td>
                                        <td>Chattisgarh</td>
                                        <td>&nbsp;</td>
                                        <td>I.R. 36</td>
                                        <td>1840&nbsp;Rs/Quintal</td>
                                        <td>1840&nbsp;Rs/Quintal</td>
                                        <td>1840&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Amaranthus</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>4300&nbsp;Rs/Quintal</td>
                                        <td>4500&nbsp;Rs/Quintal</td>
                                        <td>4400&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Ashgourd</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2400&nbsp;Rs/Quintal</td>
                                        <td>2600&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Banana</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Nendra Bale</td>
                                        <td>6500&nbsp;Rs/Quintal</td>
                                        <td>6700&nbsp;Rs/Quintal</td>
                                        <td>6600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Banana</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Palayamthodan</td>
                                        <td>3800&nbsp;Rs/Quintal</td>
                                        <td>4000&nbsp;Rs/Quintal</td>
                                        <td>3900&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Banana</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Poovan</td>
                                        <td>7000&nbsp;Rs/Quintal</td>
                                        <td>7200&nbsp;Rs/Quintal</td>
                                        <td>7100&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Banana</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Red Banana</td>
                                        <td>4800&nbsp;Rs/Quintal</td>
                                        <td>5000&nbsp;Rs/Quintal</td>
                                        <td>4900&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Banana</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Robusta</td>
                                        <td>2800&nbsp;Rs/Quintal</td>
                                        <td>3000&nbsp;Rs/Quintal</td>
                                        <td>2900&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Beetroot</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>5500&nbsp;Rs/Quintal</td>
                                        <td>5700&nbsp;Rs/Quintal</td>
                                        <td>5600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Bhindi(Ladies Finger)</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>4100&nbsp;Rs/Quintal</td>
                                        <td>4300&nbsp;Rs/Quintal</td>
                                        <td>4200&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Bitter gourd</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>5500&nbsp;Rs/Quintal</td>
                                        <td>5700&nbsp;Rs/Quintal</td>
                                        <td>5600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Bottle gourd</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2300&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                        <td>2400&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Brinjal</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Brinjal</td>
                                        <td>4700&nbsp;Rs/Quintal</td>
                                        <td>4900&nbsp;Rs/Quintal</td>
                                        <td>4800&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Cabbage</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2400&nbsp;Rs/Quintal</td>
                                        <td>2600&nbsp;Rs/Quintal</td>
                                        <td>2500&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Capsicum</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Capsicum</td>
                                        <td>5500&nbsp;Rs/Quintal</td>
                                        <td>5700&nbsp;Rs/Quintal</td>
                                        <td>5600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Carrot</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Carrot</td>
                                        <td>6500&nbsp;Rs/Quintal</td>
                                        <td>6700&nbsp;Rs/Quintal</td>
                                        <td>6600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Cauliflower</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Cauliflower</td>
                                        <td>3400&nbsp;Rs/Quintal</td>
                                        <td>3600&nbsp;Rs/Quintal</td>
                                        <td>3500&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Colacasia</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>7000&nbsp;Rs/Quintal</td>
                                        <td>7200&nbsp;Rs/Quintal</td>
                                        <td>7100&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Cucumbar(Kheera)</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>2800&nbsp;Rs/Quintal</td>
                                        <td>3000&nbsp;Rs/Quintal</td>
                                        <td>2900&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Drumstick</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>7500&nbsp;Rs/Quintal</td>
                                        <td>7700&nbsp;Rs/Quintal</td>
                                        <td>7600&nbsp;Rs/Quintal</td>
                                    </tr>
                                    <tr>
                                        <td>Anchal</td>
                                        <td>Onion</td>
                                        <td>Kerala</td>
                                        <td>&nbsp;</td>
                                        <td>Other</td>
                                        <td>8500&nbsp;Rs/Quintal</td>
                                        <td>8700&nbsp;Rs/Quintal</td>
                                        <td>8600&nbsp;Rs/Quintal</td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    <div id="box4"></div>
    <script>
        function myNameFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myNameInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        // for countary filering
        function myCountaryFunction() {
            var input, filter, table, trc, tdc, i, txtValue;
            input = document.getElementById("myCountaryInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            trc = table.getElementsByTagName("tr");
            for (i = 0; i < trc.length; i++) {
                tdc = trc[i].getElementsByTagName("td")[1];
                if (tdc) {
                    txtValue = tdc.textContent || tdc.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        trc[i].style.display = "";
                    } else {
                        trc[i].style.display = "none";
                    }
                }
            }
        }
    </script>
   
<script src="https://cdnjs.com/libraries/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
@section('footer_content')
    
@endsection