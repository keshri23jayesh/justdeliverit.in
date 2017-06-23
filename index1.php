<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>justdeliverit.in</title>
    <meta name="Jayesh" content="justdeliverit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Josefin+Sans|Lobster|Montserrat:700|Nunito+Sans:400,700|Quicksand|Raleway:300" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if   
        });
    });
    </script>
       <script>
         $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height() );
  });
});
       </script>

     
    <style>
 .navbar-fixed-top.scrolled {
  background-color: #fff !important;
  border-bottom: 4px solid #1aa3ff;
  transition: background-color 300ms linear;
}

  .toplist li a
    {
     background-color: transparent;
     color:black;
     margin: 0px 10px 0px 10px; 
     }
  .toplist li a:hover
    {
     background-color: transparent;
     border : 3px solid #1aa3ff;
     transition:300ms;
     }
    

 .huj {
    position: fixed;
    top: 100px;
    right: 0;
    width: 300px;
    background-color:#f6f6f6;
    border: 3px solid #73AD21;
    z-index: 100;
}

    .chota li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        text-align: center;
        width: 25px;
        height: 25px;
        font-size: 13px;
    }
    
    .chota li i {
        margin: 0;
        line-height: 25px;
        text-align: center;
    }
    
    .chota li a:hover i,
    .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }
    
    .chota i {
        color: #696969;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }
    
    .abtbox {
        margin: 0;
        border-bottom: 6px solid #1aa3ff;
        border-right: 0.5px solid #737373;
        border-left: 0.5px solid #737373;
        border-top: 0.5px solid #737373;
        padding: 30px;
    }
     .frmbox {
        margin: 0;
        border-radius: 25px;
        border: 4px solid #1aa3ff;
        padding: 20px;
        background-color: 
    }
    
    .space {
        margin-bottom;
        20px;
        
    }
    
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
    
    .contactus {
        background-image: url("http://hdwpro.com/wp-content/uploads/2017/01/HD-City-Building.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: inset 0 0 0 450px rgba(20, 20, 31, 0.9);
        background-position: center;
        min-height: 400px;
    }
    .theteam {
        background-image: url("http://7-themes.com/data_images/collection/7/4487853-city-wallpapers.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: inset 0 0 0 450px rgba(0, 0, 0, 0.9);
        background-position: center;
        min-height: 400px;
    }
    
    p {
        color: #fff;
    }
    /*=========================
  Icons
 ================= */
    /* footer social icons */
    
    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0;
    }
    
    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }
    /* footer social icons */
    
    .social-network a.icoYouTube:hover {
        background-color: #BB0000;
    }
    
    .social-network a.icoFacebook:hover {
        background-color: #3B5998;
    }
    
    .social-network a.icoTwitter:hover {
        background-color: #33ccff;
    }
    
    .social-network a.icoGoogle:hover {
        background-color: #BD3518;
    }
    
    .social-network a.icoVimeo:hover {
        background-color: #0590B8;
    }
    
    .social-network a.icoLinkedin:hover {
        background-color: #007bb7;
    }
    
    .social-network a.icoInstagram:hover {
        background-color: #125688;
    }
    
    .social-network a.icoSkype:hover {
        background-color: #12A5F4;
    }
    
    .social-network a.icoEnvelope:hover {
        background-color: #22263D;
    }
    
    .social-network a.icoYouTube:hover i,
    .social-network a.icoFacebook:hover i,
    .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i,
    .social-network a.icoVimeo:hover i,
    .social-network a.icoLinkedin:hover i,
    .social-network a.icoInstagram:hover i,
    .social-network a.icoSkype:hover i,
    .social-network a.icoEnvelope:hover i {
        color: #fff;
    }
    
    a.socialIcon:hover,
    .socialHoverClass {
        color: #44BCDD;
    }
    
    .social-circle li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        text-align: center;
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
    
    .social-circle li i {
        margin: 0;
        line-height: 50px;
        text-align: center;
    }
    
    .social-circle li a:hover i,
    .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }
    
    .social-circle i {
        color: #696969;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }
    
    .beti {
        background-color: #979797;
    }
     





.button5 {
    background-color: #00bfff;
    border-radius: 25px;
    padding:5px 0px 5px 0px;
}

.button5:hover {
    background-color: #262626;
    border-radius: 25px;
   -webkit-transition-duration: 0.8s; /* Safari */
    transition-duration: 0.8s;
}

.button6 {
    background-color: #ffffff;
    color: black;
    border-radius: 25px;
    padding:5px 0px;
}

.button6:hover {
    background-color: #262626;
    color: white;
    border-radius: 25px;
   -webkit-transition-duration: 0.8s; /* Safari */
    transition-duration: 0.8s;
}
   

    
    
    .jayesh {
        background-color: #1a8cff;
    }
    
    .responsive-image {
        background-image: url("qweertyu.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        min-height: 700px;
       
        z-index: -100;
        
    }
    /*
* Style tweaks
* --------------------------------------------------
*/
    
    html,
    body {
        overflow-x: hidden;
        /* Prevent scroll on narrow devices */
    }
    
    footer {
        padding: 30px 0;
    }
    
    .jay {
        background: linear-gradient(to bottom, #75a3a3, #d1e0e0);
        opacity: 0.5;
    }
    
    .fitor {
        background: url("images/icon.png");
        border: 1px solid black;
        padding: 10px 10px 10px 10px;
        cursor: pointer;
        
    }
.btn-custom {
    color: #fff;
	background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}
    
     </style>
</head>

<body>
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container-fluid" id="demo" style="padding-top:10px;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle fitor" data-toggle="collapse" data-target="#myNavbar">
                </button>
               
              <img src="ico.png" >
              
                 </div>
            <div class="collapse navbar-collapse toplist" id="myNavbar" >
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#abt_us">About Us</a></li>
                    <li><a href="#whywe">Why Us</a></li>
                    <li><a href="#chrg">Charges</a></li>
                    <li><a href="#contact">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid responsive-image" style="padding-top: 200px;">
        <center>
            <p class="font1"> Why Waste Your Time on traveling </p>
            <p class="font2"> we are here to bring </p>
            <br>
         <div class="row">
              <div class="col-md-4 col-sm-4"></div>
                <div class="col-md-2 col-sm-2">
                  
                  <center>
                     <div class="button5"><a href="#more"><p class="font3" >KNOW MORE</p></a></div>
                  </center>
                  
                 </div>
                   
               <div class="col-md-2 col-sm-2">
                  
                   <center>
                     <div class="button6"><a href="#main"><p class="font3" style="color:#00ccff;">YOUR ORDER</p></a></div>
                   </center>
                  
               </div>
              <div class="col-md-4 col-sm-4"></div>
         </div>
        </center>
    </div>
    <div class="container-fluid jayesh" style="color:white;">
        <center>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <br>
                    <br>
                    <h2>Stop wasting your time</h2>
                    <h2>let us bring for you</h2>
                    <br>
                    <br>
                </div>
            </div>
            <div class="row jayesh">
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img src="urneed.png" height="120px" width="120px">
                            <p class="font4">fill ur need</p>
                        </div>
                        <div class="col-md-4 col-sm-4" id="more">
                            <img src="bigcall.png" height="120px" width="120px">
                            <p class="font4">confirm on call</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="pickorder.png" height="120px" width="120px">
                            <p class="font4">pick ur order</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1">
                </div>
            </div>
        </center>
        <div style="height:50px;">
        </div>
    </div>
    <div class="container-fluid" style="background-color:#f0f3f2;" id="whywe">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <center>
                        <p><span class="font8">WHY</span>  <span class="font9" style="font-size:50px;"> CHOOSING US<span></p>
                    </center>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>ORDER IN A CLICK</h3>
                            <p style="color:navy;">You Can Order Your Desired Product
                                <br>Just In a Click</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>SAVE YOUR MONEY</h3>
                            <p style="color:navy;">Why To Waste Your Money In Travelling</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>SAVE YOUR EFFORT</h3>
                            <p style="color:navy;">Why To Make Effort For Searching
                                <br>Product Here And There</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>SAVE YOUR TIME</h3>
                            <p style="color:navy;">Why To Invest Your Valuable Time,
                                <br>justdeliverit Is Here</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>CARE FOR YOUR HEALTH</h3>
                            <p style="color:navy;">Stay Healthy In Summer</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2 col-sm-2">
                            <img src="orderclick.png">
                        </div>
                        <div class="col-md-10 col-sm-10">
                            <h3>SMART AND ECO-FRIENDLY METHOD</h3>
                            <p style="color:navy;">We Are Promoting Digital India
                                <br>And Reducing Pollution</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
           
            <div class="container-fluid">
                 <div style="min-height: 50px;">
               <center>
             <h2>Our happy Customers </h2>
                 </center>
                      </div>      
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner auto" role="listbox" >
                    <div class="item active">
                      <img src="1.png">
                     
                    </div>
                    <div class="item">
                      <img src="2.png">
                    </div>
                    <div class="item">
                      <img src="3.png">
                    </div>    
                  </div>
                 
                </div>
            </div>


    <div class="container-fluid" id="main">
     <div style="min-height: 50px;"></div>    
        <form method="POST" action="connec.php">                
                <div class="row"> 
                    <div class="col-md-6" id="chrg">
                           <div class="container-fluid" style="background-color:#66cc99;">
                                
                                <br><h2 class="font4" style="color:white;font-size:20px;font-weight:bold;">For Same Day Delivery Order Before 2 pm</h2>
                                <center><h3>Delivery charges</h3></center>
                                <br>
                                <h4>For Product weight less than 1kg</h4>
                                <ol>
                                    <li>₹ 30 will be charged for cost up to ₹ 499</li>
                                    <li>₹ 50 will be charged for cost more then ₹ 499</li>
                                </ol>
                                <br>
                                <h4>For product weight more than 1kg </h4>
                                <ol>
                                    <li>₹ 50 will be charged</li>
                                </ol>
                                
                                <center><h3>Delivery charges for Pick and Drop Service</h3></center>
                                 <br>
                                 <h4>For Product weight less than 1kg</h4>
                                
                                <ol>
                                    <li>₹ 30 will be charged </li>
                                </ol>
                                 <h4>For Product weight more than 1kg</h4>
                                <ol>
                                    <li>₹ 50 will be charged </li>
                                </ol>
                               
                        </div>
                    </div>
                    <div class="col-md-6">
                          <div class="row">
                         <div class="col-sm-2 col-md-2"></div>
						 <div class="col-sm-8 col-md-8">
                            <center><p style="color:#1fa67b;font-size:20px;">Please fill the details</p></center>
		      <div class="col-sm-12 col-md-12 space">
                           <div class="form-group">            
                                <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Name" required>
                            </div>
                        </div>
                    <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
                                <input type="text" class="form-control" id="Name" name="mob" placeholder="Mobile No" required>
                            </div>
                        </div>
                      <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
                                <input type="text" class="form-control" id="Email" name="email" placeholder="Email id" required>
                            
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
                                <textarea class="form-control" rows="2" id="Email" name="address" placeholder="Hostel,apartment name,street name,flat no...FULL ADDRESS" required></textarea>
                            
                        </div>
                     </div>
                    <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
                                <textarea class="form-control" rows="2" id="Email" name="landmark" placeholder="Land Mark...famous place near your address" required></textarea>     
                        </div>
                    </div>
                    

                      <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
                                <select name="protype" class="form-control" placeholder="Category" required>
                                    <option value="-1">Product Category</option>
                                    <option value="medicine">medicine</option>
                                    <option value="food">Food</option>
                                    <option value="Book">Book</option>
                                    <option value="Stationary">Stationary</option>
                                    <option value="Birthday Product">Birthday Product</option>
                                    <option value="Cosmetic Product">Cosmetic Product</option>
                                    <option value="Sports Product">Sports Product</option>
                                    <option value="Electronic Product">Electronic Product</option>
                                    <option value="Repairing Product">Repairing Product</option>
                                    <option value="Art AND Crafts">Art AND Crafts</option>
                                    <option value="Cloths">Cloths</option>
                                    <option value="Gift item">Gift item</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                      </div>
                      
                     
                    
                    <div class="col-sm-12 col-md-12 space">
                        <div class="form-group">
            <textarea class="form-control" rows="3" name="prodis" placeholder="Product Description,Preferred Shop,Shop Location" required></textarea>
                            </div>
                        </div>
                    
                    <div class="col-sm-12 col-md-12 space">
                        <div style="text-align: center;">
                            <button type="submit" class="btn btn-custom btn-lg btn-block" value="sign in">Our Service is Temporary Unavailable.</button>
                        </div>
                    </div>
					</div>
					<div class="col-sm-2 col-md-2"></div>
                </div>
            </div>
			</div>
	     </form>
     <div style="min-height: 50px;"></div> 
    </div>    
		
    <div class="container-fluid contactus" id="contact">
        <br>
        <center>
            <h2 style="color:white;">CONTACTS US</h2>
        </center>
        <br>
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <center>
                            <img src="address.png" height="50px" width="50px" style="border-radius: 5px;">
                            <p></p>
                            <p>ADDRESS</p>
                            <p>B.I.T mesra</p>
                            <p>Hostel no -12 Room no-147</p>
                        </center>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <center>
                            <img src="call.png" height="50px" width="50px" style="border-radius: 5px;">
                            <p>PHONES</p>
                            <p>CHANDAN: +91 8409914238</p>
                            <p>SHASHI: +91 9060450743</p>
                            <p>JAYESH: +91 7319730319</p>
                        </center>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <center>
                            <img src="mail.png" height="50px" width="50px" style="border-radius: 5px;">
                            <p></p>
                            <p>CONTACTS</p>
                            <p>justdeliverit.in@gmail.com</p>
                        </center>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <center>
                            <img src="work_hrs.png" height="50px" width="50px" style="border-radius: 5px;">
                            <p></p>
                            <p>WORKING_HRS</p>
                            <p>Monday-Friday: 9:00 - 18:00</p>
                            <p>Saturday: 11:00 - 17:00</p>
                            <p>Sunday: Open</p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    
        <div class="container-fluid theteam"  id="abt_us">
            <div class="row">
                <div class="col-md-1 col-sm-1">
                </div>
                <div class="col-md-10 col-sm-10">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="abtbox">
                                <br>
                                <img src="chandan.png" height="130px" width="130px">
                                <br>
                                <br>
                                <p class="font5">Chandan Kumar</p>
                                <p class="font6">Founder</p>
                                <p class="font7">+91 8409914238</p>
                                <ul class="social-network chota">
                                   <!-- <li><a href="#" class="icoYouTube beti" title="YouTube"><i class="fa fa-youtube-play"></i></a></li>-->
                                    <li><a href="https://plus.google.com/u/0/102611702840389818219" class="icoGoogle beti" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100006627647300&fref=ts" class="icoFacebook beti" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/search?q=learnmyphysics&src=typd" class="icoTwitter beti" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/chandankumar123456789/" class="icoInstagram beti" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                        <div class="col-md-4 col-sm-12">
                          <div class="abtbox">
                                <br>
                                <img src="jayesh.png" height="130px" width="130px">
                                <br>
                                <br>
                                <p class="font5">Jayesh Keshri</p>
                                
                                <p class="font6">CTO</p>
                                <p class="font7">+91 7319730319</p>
                                <ul class="social-network chota">
                                   
                                   <!-- <li><a href="#" class="icoYouTube beti" title="YouTube"><i class="fa fa-youtube-play"></i></a></li>-->
                                    <li><a href="https://plus.google.com/112982604105721344703" class="icoGoogle beti" target="_blank" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.facebook.com/profile.php?id=100009290369362&fref=ts" target="_blank" class="icoFacebook beti" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="icoTwitter beti" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/jayesh_keshri_photography/" target="_blank" class="icoInstagram beti" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div> 
                        </div>
                        <div class="col-md-4 col-sm-12">
                            
                                <div class="abtbox">
                                    <br>
                                    <img src="shashi.png" height="130px" width="130px">
                                    <br>
                                    <br>
                                    <p class="font5">Shashi Gupta</p>
                                    
                                    <p class="font6">Co-Founder</p>
                                    <p class="font7">+91 9060450743</p>
                                    <ul class="social-network chota">
                                     <!-- <li><a href="#" class="icoYouTube beti" title="YouTube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>-->
                                        <li><a href="https://plus.google.com/u/1/109627520032603433410" target="_blank" class="icoGoogle beti" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.facebook.com/creativeshashigupta1?fref=ts" target="_blank" class="icoFacebook beti" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li>
                                            <a href="https://twitter.com/creativeshashi" target="_blank" class="icoTwitter beti" title="Twitter" target="_blank" ><i class=" fa fa-twitter " ></i></a></li>
                        <li><a href="https://www.instagram.com/yellow_crafts/ " target="_blank " class="icoInstagram beti " title="Instagram "><i class="fa fa-instagram "></i></a></li>
                    </ul> 
  		  </div>
		  </div>
		 
		 </div>
	  </div>
	  <div class="col-md-1 col-sm-1 ">
	  </div>
	</div>
</div>
<div class="container-fluid " style="background-color:#002233; ">
<br>
<br>
  <div class="row ">    
  <div class="col-md-6 " style="padding:20px 10px 10px 30px ">
    <a><p>&#169; 2017 Justdeliverit</p></a>
  </div>
	<div class="col-md-6 ">
                    <ul class="social-network social-circle " style="float:right; ">
                       
<ul class="social-network social-circle ">
                        <li><a href="# " class="icoYouTube beti " title="YouTube "><i class="fa fa-youtube-play " target="_blank"></i></a></li>
                        <li><a href="https://plus.google.com/u/2/112275229746620963394
 " class="icoGoogle beti " title="Google + " target="_blank" ><i class="fa fa-google-plus " target="_blank"></i></a></li>
                        <li><a href="https://www.facebook.com/justdeliverit.in/?fref=ts&ref=br_tf " class="icoFacebook beti " target="_blank" title="Facebook "><i class="fa fa-facebook "></i></a></li>
                        <li><a href="https://twitter.com/JustdeliverI" class="icoTwitter beti " title="Twitter " target="_blank"><i class="fa fa-twitter "></i></a></li>
                        <li><a href="https://www.instagram.com/justdeliver_it/" class="icoInstagram beti " title="Instagram " target="_blank"><i class="fa fa-instagram " target="_blank"></i></a></li>
                      <!--  <li><a href="# " class="icoSkype beti " title="Skype "><i class="fa fa-skype "target="_blank"></i></a></li> -->
                        <li><a href="mailto:justdeliverit.in@gmail.com" class="icoEnvelope beti " title="Justdeliver.in" target="_blank"><i class="fa fa-envelope "></i></a></li>
                    </ul>
                
                    </ul>				
	</div>
  </div> 
</div>	
</body>