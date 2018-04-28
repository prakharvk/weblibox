<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weblibox</title>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Julius+Sans+One" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    

</head>

<body onload="myfunc()" id="body">


        <!-- Button trigger modal -->



<!-- Central Modal Small -->
<div style="position: absolute;right: -3%;top: -5%;" class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div style="position: absolute;right: 10%;top: 10%;" class="modal-dialog modal-sm" role="document">                           
        <div class="modal-content">
            
            <div class="modal-body">
                <input type="text" name="searchtext" placeholder="type anything..">
            </div>
        </div>
    </div>
</div>
                                

<!-- Modal -->
<div class="modal fade" id="previewbook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BOOK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-md-4 float-div">
                        <img src="img/img2.jpg" style="width: 100%;height: 100%;">
                    </div>
                    <div class="col-md-8 float-div para">
                        <p><b>Availability : </b> in Stock </p>
                        <hr>
                        <h2>Game of thrones</h2><br>
                        <h4>$100</h4><br>
                        <p style="display: inline-block;"><b>Author : </b> R R Martin</p>
                        <p style="display: inline-block;">&nbsp;&nbsp;&nbsp;</p>
                        <p style="display: inline-block;"><b>Bar code : </b> 1234567</p>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>
                        <li style="display: inline-block;" class="list-inline-item">
                            <a href="#!" class="btn btn-danger" style="border-radius: 30px;padding: 10px 30px;">Add to cart</a>
                        </li>
                        <a style="display: inline-block;padding: 3px 8px;" class="cart-icon" data-toggle="modal" data-target="#cart"><i class="fa fa-heart" aria-hidden="true" style="color: #FF6000;"></i></a><br><br>
                        <a href="#" style="color: gray;text-decoration: none;">Go to book info page</a>

                    </div>
               </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
                                                    
<!-- Full Height Modal Right -->
<div class="modal fade right" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document" style="height: 1000px;">

                                          
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title sub-heading" id="exampleModalLabel">Cart</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body para">
                <br>
                <center><a href="#" class="a-link">Proceed to Checkout</a><center><br>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">990</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">800</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">700</span>
                    </li>
                </ul>
                <br>
                <center><a href="#" style="font-size: 17px;padding-bottom:4px;text-decoration: none;color:#FF6000;border-bottom : 1px dotted black;">View Offer Coupons</a></center>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Total Price</p>
                        <span class="">1000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Amount Payable</p>
                        <span class="">1000</span>
                    </li>
                </ul>
                <p>Gift Vouchers can be applied at checkout before payment </p><br>
                <center><a href="#" class="a-link">Proceed to Checkout</a><center><br><br>
                <center><a href="#" class="b-link">Continue Shopping</a><center>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>
<!-- Full Height Modal Right -->
<div class="modal fade right" id="whistlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document" style="height: 1000px;">

                                          
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title sub-heading" id="exampleModalLabel">Wishlist</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body para">
              <br>
                <center><a href="#" class="a-link">Proceed to Checkout</a><center><br>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">990</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">800</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="img/books4.jpg" style="height: 100px;width: 20%;">
                        <p>
                            Game of thrones<br>
                            <span style="font-size: 15px;">R R Martin<span>
                        </p>
                        <span class="">700</span>
                    </li>
                </ul>
                <br>
                <center><a href="#" style="font-size: 17px;padding-bottom:4px;text-decoration: none;color:#FF6000;border-bottom : 1px dotted black;">View Offer Coupons</a></center>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Total Price</p>
                        <span class="">1000</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <p>Amount Payable</p>
                        <span class="">1000</span>
                    </li>
                </ul>
                <p>Gift Vouchers can be applied at checkout before payment </p><br>
                <center><a href="#" class="a-link">Proceed to Checkout</a><center><br><br>
                <center><a href="#" class="b-link">Continue Shopping</a><center>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>

<div class="loader" id="loader">
  <div id="largeBox"></div>
  <div id="smallBox"></div>
</div>
    <header id="header">
        <nav class="navbar navbar-expand-lg #ffffff white fixed-top scrolling-navbar webli-navbar">
            <div class="col-md-2 webli-logo" style="padding: 0px;">
                <img src="img/weblibox.png" style="width:70%;height: 100%;">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>
            <div class="col-md-7">
                <ul class="webli-navlinks">
                    <li class="webli-navlinks-li webli-navlinks-li1"><a href="index.php">HOME</a>
                    </li>
                    <li class="webli-navlinks-li webli-navlinks-li2"><a href="guidance.php">TAKE GUIDANCE</a>
                    </li>
                    <li class="webli-navlinks-li webli-navlinks-li3"><a href="buy-rent-books.php">BUY/RENT BOOKS</a>
                    </li>
                    <li class="webli-navlinks-li webli-navlinks-li4"><a href="#guidance">HOW IT WORKS</a></li>
                    <li class="webli-navlinks-li webli-navlinks-li5"><a href="">CONTACT US</a></li>
                </ul>
            </div>
            <div class="col-md-3 webli-navicons col-sm-12">
                <a style="color: #FF6000;" data-toggle="modal" data-target="#centralModalSm"><i class="fa fa-search" aria-hidden="true"></i></a>
                <a style="color: #FF6000;" href="profile.php"><i class="fa fa-user" aria-hidden="true"></i></a>
                <a style="color: #FF6000;" data-toggle="modal" data-target="#whistlist"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a style="color: #FF6000;" data-toggle="modal" data-target="#cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
            </div>
        </nav>
    </header>
    <main id="main" class="mainprofile">
    <div class="profile" style="margin-top: 130px;height: 100%;">
    	<center style="height: 100%;">
    		<h3>Rishikesh Sahu</h3>
    		<h5>rishikeshsahu14101998@gmail.com</h5><br>
    		<img src="img/image1.jpg" style="height: 100px;width: 100px;border-radius: 50% 50%;"><br><br>
    		    <ul class="nav nav-justified pills-secondary tab-menu col-md-3" >
				    <li class="nav-item">
				        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Profile</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">My Orders</a>
				    </li>
				    <li class="nav-item">
				        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Wallet</a>
				    </li>
				</ul>
                <hr style="margin: 0px;">
				<!-- Tab panels -->
				<div class="tab-content" style="height: 100%;">

				    <!--Panel 1-->
				    <div class="tab-pane fade in show active container" id="panel1" role="tabpanel">
				        <br>

				        <!-- Nav tabs -->
							<div class="row" style="width: 80%;">
							    <div class="col-md-3">
							        <ul class="nav  md-pills pills-primary flex-column tab-list" role="tablist">
							            <li class="nav-item">
							                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab">Edit profile
							                
							                </a>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">Personal details
							                
							                </a>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" data-toggle="tab" href="#panel13" role="tab">Change password
							                
							                </a>
							            </li>
							        </ul>
							    </div>
							    <div class="col-md-9" style="background-color: white;">
							        <!-- Tab panels -->
							        <div class="tab-content vertical">
							        <!--Panel 1-->
							        <div class="tab-pane fade in show active" id="panel11" role="tabpanel">

							            <h5 class="sub-heading" style="color: black;" class="my-2 h5">EDIT PROFILE</h5>
							            <br>
										<div class="md-form">
										    <input type="text" id="form1" class="form-control" style="width: 50%;">
										    <label for="form1" class="heading" >Email</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form2" class="form-control" style="width: 50%;">
										    <label for="form2" class="heading" >Mobile number</label>
										</div>

							        </div>
							        <!--/.Panel 1-->

							        <!--Panel 2-->
							        <div class="tab-pane fade" id="panel12" role="tabpanel">

							            <h5 class="sub-heading" style="color: black;" class="my-2 h5">PERSONAL DETAILS</h5>
							            <br>
										<div class="md-form">
										    <input type="text" id="form3" class="form-control" style="width: 50%;">
										    <label for="form3" class="heading" >Date of birth</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form4" class="form-control" style="width: 50%;">
										    <label for="form4" class="heading" >First name</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form5" class="form-control" style="width: 50%;">
										    <label for="form5" class="heading" >Last name</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form6" class="form-control" style="width: 50%;">
										    <label for="form6" class="heading" >Gender</label>
										</div>

							        </div>
							        <!--/.Panel 2-->
							        <!--Panel 3-->
							        <div class="tab-pane fade" id="panel13" role="tabpanel">

							            <h5 class="sub-heading" style="color: black;" class="my-2 h5">CHANGE PASSWORD</h5>
							            <br>
										<div class="md-form">
										    <input type="text" id="form7" class="form-control" style="width: 50%;">
										    <label for="form7" class="heading" >Current password</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form8" class="form-control" style="width: 50%;">
										    <label for="form8" class="heading" >New password</label>
										</div>
										<div class="md-form">
										    <input type="text" id="form9" class="form-control" style="width: 50%;">
										    <label for="form9" class="heading" >Confirm password</label>
										</div>
										

							        </div>
							        <!--/.Panel 3-->
							        </div>
							    </div>
							</div>
							<!-- Nav tabs -->

				    </div>
				    <!--/.Panel 1-->

				    <!--Panel 2-->
				    <div class="tab-pane fade in show container" id="panel2" role="tabpanel">
				        <br>

				        <!-- Nav tabs -->
							<div class="row">
							    <div class="col-md-3">
							        <ul class="nav  md-pills pills-primary flex-column tab-list" role="tablist">
							            <li class="nav-item">
							                <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab">All orders
							                
							                </a>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">Return requests
							                
							                </a>
							            </li>
							            <li class="nav-item">
							                <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">Cancel requests
							                
							                </a>
							            </li>
							        </ul>
							    </div>
							    <div class="col-md-9">
							        <!-- Tab panels -->
							        <div class="tab-content vertical">
							        <!--Panel 1-->
							        <div class="tab-pane fade in show active" id="panel21" role="tabpanel">

							            <h5 class="my-2 h5">Panel 1</h5>

							        </div>
							        <!--/.Panel 1-->

							        <!--Panel 2-->
							        <div class="tab-pane fade" id="panel22" role="tabpanel">

							            <h5 class="my-2 h5">Panel 2</h5>

							        </div>
							        <!--/.Panel 2-->
							        <!--Panel 3-->
							        <div class="tab-pane fade" id="panel23" role="tabpanel">

							            <h5 class="my-2 h5">Panel 3</h5>

							        </div>
							        <!--/.Panel 3-->
							        </div>
							    </div>
							</div>
							<!-- Nav tabs -->
				    </div>
				    <!--/.Panel 2-->

				    <!--Panel 3-->
				    <div class="tab-pane fade" id="panel3" role="tabpanel">
				        <br>

				        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
				            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
				            porro voluptate odit minima.</p>

				    </div>
				    <!--/.Panel 3-->

				    

				</div>
    	</center>
    </div>

    </main>
    <br><br>
<!--Footer-->
<footer id="footer" class="page-footer font-small stylish-color-dark pt-4 mt-4 footer">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4 mt-3 font-weight-bold heading" style="color: black;">Weblibox</h4>
                <p class="para">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold heading" style="color: black;">Know us</h5>
                <ul class="list-unstyled para">
                    <li>
                        <a href="#!">About us</a>
                    </li>
                    <li>
                        <a href="#!">Career</a>
                    </li>
                    <li>
                        <a href="#!">News</a>
                    </li>
                    <li>
                        <a href="#!">Weblibox cares</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold heading" style="color: black;">Languages</h5>
                <ul class="list-unstyled para">
                    <li>
                        <a href="#!">English</a>
                    </li>
                    <li>
                        <a href="#!">Spanish</a>
                    </li>
                    <li>
                        <a href="#!">Japanese</a>
                    </li>
                    <li>
                        <a href="#!">Chinese</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold heading" style="color: black;">Help you</h5>
                <ul class="list-unstyled para">
                    <li>
                        <a href="#!">Your Account</a>
                    </li>
                    <li>
                        <a href="#!">Orders</a>
                    </li>
                    <li>
                        <a href="#!">Return center</a>
                    </li>
                    <li>
                        <a href="#!">Help</a>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
            <li class="list-inline-item">
                <h5 class="mb-1 sub-heading" style="color: white;">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="#!" class="btn btn-danger" style="border-radius: 30px;padding: 10px 30px;">Sign up!</a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="text-center sub-heading">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> Weblibox</a>
    </div>
    <!--/.Copyright-->

</footer>
                      
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Insert to your webpage before the </head> -->
    <!-- Insert to your webpage before the </head> -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script src="scrollbar/dist/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="js/index.js">
    </script>

</body>

</html>
