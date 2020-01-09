@extends('layouts.footer')
@extends('layouts.header')
@section('header')
    
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="style.css">
<title>Helping - Udhyoday</title>
<style> 
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
    .mapouter {
            position: relative;
            text-align: right;
            height: 266px;
            width: 580px;
    }
                    
    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 266px;
        width: 585px;
    }
    .contact-form{
        background: #fff;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 70%;
    }
    .contact-form .form-control{
        border-radius:1rem;
    }
    .contact-image{
        text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
#helpIntro{
    padding: 100px;
    background: #1e3c72;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2a5298, #1e3c72);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2a5298, #1e3c72); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color: #fff;
    
}

#helpNearby{
    padding: 100px;
    background: #fff  /* fallback for old browsers */
}

#helpNearby form{
    padding: 20px;
    font-size: 20px;
}

#helpNearby form input[type="text"]{
    width: 300px;
    height: 40px;
}

#helpAsk{
    display: block;
    height: 90vh;
    margin-top: -50px;
}
#helpAsk .container{
    background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
}

#helpAsk h3{
    color: #fff;
    font-size: 35px;
}

#helpHeadLocation{
    padding: 100px;
    background: #0F2027;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
#helpHeadLocation .mapBox{
    padding: 20px ;
    background: #fff;
}
#helpHeadLocation .headOffice{
    padding:30px 50px 10px;
    background: #fff;
    color: #222;
}

</style>

<body>
    <div class="content" style="margin:120px 0">
    <div id="helpIntro" >
        <div class="container">
            <h1>Why choose Udhyoday helping Portal ?</h1>
            <p class="lead">We will help you locating your nearby <span style="font-weight: bold;">"SEWA KENDRA"</span> using your PIN code.<br> For any of query we have well trained teams to support you anywhere.<br>You can ask for anything regarding agriculture and the<br> support team will you as soon as possible.</p>
            <button onclick="nearFunc()" class="btn btn-primary">Learn More!</button>
            
        </div>
    </div>
    <div id="helpNearby">
        <div class="container">
            <div class="content text-center ">
                <h1 class="display-1">Search your nearby Sewa Kendra</h1>
                <p class="lead">Search your nearby center by your pincode or your location.</p>
                <form class="form-inline md-form form-sm">
                    <input id="myInput" class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                    <i class="fas fa-search" aria-hidden="true"></i>
                </form>
                <div class="container text-left">
                    <table align="center">
                        <thead>
                            <tr>
                                <th>Center Name</th>
                                <th>Location</th>
                                <th>PinCode</th>
                                <th>Get Direction</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <tr>
                                <td>Sewa Kendra No. 1</td>
                                <td>Jhajjar</td>
                                <td>124102</td>
                                <td><a href="https://g.page/@hashtagkaran">Get Direction</a></td>
                            </tr>
                            <tr>
                                <td>Sewa Kendra No. 2</td>
                                <td>Patna</td>
                                <td>800001</td>
                                <td><a href="https://g.page/@hashtagkaran">Get Direction</a></td>
                            </tr>
                            <tr>
                                <td>Sewa Kendra No. 3</td>
                                <td>Chandigarh</td>
                                <td>160003</td>
                                <td><a href="https://g.page/@hashtagkaran">Get Direction</a></td>
                            </tr>
                            <tr>
                                <td>Sewa Kendra No. 4</td>
                                <td>Dharbanga</td>
                                <td>846001</td>
                                <td><a href="https://g.page/@hashtagkaran">Get Direction</a></td>
                            </tr>
                            <tr>
                                <td>Sewa Kendra No. 5</td>
                                <td>Najafgarh</td>
                                <td>110045</td>
                                <td><a href="https://g.page/@hashtagkaran">Get Direction</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="helpAsk">
        <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
            </div>
            <form method="post">
                <h3>Ask Anything </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                                value=""  required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                                style="width: 100%; height: 150px;"></textarea required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div id="helpHeadLocation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mapBox">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="585" height="266" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=hashtagkaran&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.instazilla.net"></a></div>
                    </div>
                </div>
                <div class="col-lg-6 headOffice">
                    <h3>Udhyoday Head Office</h3>
                    <p>Ministry of Electronics & Information Technology,<br>Electronics Niketan</p>
                    <p>New Delhi 110045</p>
                    <p>helpdesk@Udhyoday.in</p>
                    <p>+91 8506-822-137</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
@section('footer_content')
    
@endsection