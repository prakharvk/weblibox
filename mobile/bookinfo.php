<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weblibox</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
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
  <link rel="stylesheet" type="text/css" href="css/style2.css" />
    

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
        <nav class="navbar navbar-expand-lg #ffffff white fixed-top scrolling-navbar webli-navbar" id="webli-navbar">
            <div class="col-md-2 webli-logo" style="padding: 0px;">
                <img src="img/weblibox.png" style="width:70%;height: 100%;">
            </div>
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
    <main id="main" style="height: 1200px;">
     <div class="container-fluid" style="margin-top: 100px;">
        <div class="row" id="bookinforow">
        <div class="col-md-4" id="bookimage" style="padding: 0px;padding: 6%;padding-top: 10px;">
            
            <img src="img/img1.jpg" class="img-fluid" alt="Responsive image" style="height: 90%;width: 90%;">
                          
        </div>
        <div class="col-md-5" id="bookinfo">
                <a href="" class="para breadcumbs" style="font-size: 15px;">Engineering</a><i class="fas fa-angle-right" style="font-size: 15px;"></i>
                <a href="" class="para breadcumbs" style="font-size: 15px;">B.tech</a><i class="fas fa-angle-right" style="font-size: 15px;"></i>
                <a href="" class="para breadcumbs" style="font-size: 15px;">Mathematics</a>
                <br>
                <h5 style="margin-top: 3px;">Game of thrones</h5>
                <p style="margin: 0px;font-size: 15px;">513 Ratings and 100 Reviews</p>
                
                <table class="table table-hover" style="padding: 0px;">

                    <!--Table head-->
                    <thead>
                        <tr>
                            <th colspan="2">Data Sheet</th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody class="tablebody">
                        <tr>
                            <td style="padding: 2%">Author</td>
                            <td style="padding: 2%">R R Martin</td>
                        </tr>
                        <tr>
                            <td style="padding: 2%">Edition</td>
                            <td style="padding: 2%">2010</td>
                        </tr>
                        <tr>
                            <td style="padding: 2%">Publication</td>
                            <td style="padding: 2%">@twitter</td>
                        </tr>
                        <tr>
                            <td style="padding: 2%">Subject</td>
                            <td style="padding: 2%">@twitter</td>
                        </tr>
                        <tr>
                            <td>Language</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <td style="padding: 2%">MRP of new book</td>
                            <td style="padding: 2%">@twitter</td>
                        </tr>
                    </tbody>
                    <!--Table body-->

                </table>
                <!--Table-->
                
        </div>
        <section class="tabs col-md-7 offset-md-1" style="position: relative;bottom: 50px;">
                <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
                <label for="tab-1" class="tab-label-1">Description</label>
        
                <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
                <label for="tab-2" class="tab-label-2">Table of contents</label>
        
                <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
                <label for="tab-3" class="tab-label-3">Extra</label>
            
                <!-- <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
                <label for="tab-4" class="tab-label-4">Contact</label>  -->
            
                <div class="clear-shadow"></div>
            
                <div class="content">
                    <div class="content-1">
                        <h2>Description</h2>
                        <p>You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don't know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I'm breaking now. We said we'd say it was the snow that killed the other two, but it wasn't. Nature is lethal but it doesn't hold a candle to man.</p>
                        <h3>How we work</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>

                    </div>
                    <div class="content-2">
                        <h2>Table of contents</h2>
                        <p>Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that's what you see at a toy store. And you must think you're in a toy store, because you're here shopping for an infant named Jeb.</p>
                        <h3>Excellence</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                        <h3>How we work</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                        <h3>How we work</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                        <h3>How we work</h3>
                        <p>Like you, I used to think the world was this great place where everybody lived by the same standards I did, then some kid with a nail showed me I was living in his world, a world where chaos rules not order, a world where righteousness is not rewarded. That's Cesar's world, and if you're not willing to play by his rules, then you're gonna have to pay the price. </p>
                    </div>
                    <div class="content-3">
                        <h2>Portfolio</h2>
                        <p>The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother's keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>
                        <h3>Examples</h3>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic, you know how you can tell who the arch-villain's going to be? He's the exact opposite of the hero. And most times they're friends, like you and me! I should've known way back when... You know why, David? Because of the kids. They called me Mr Glass. </p>
                    </div>
                   <!-- <div class="content-4">
                        <h2>Contact</h2>
                        <p>You see? It's curious. Ted did figure it out - time travel. And when we get back, we gonna tell everyone. How it's possible, how it's done, what the dangers are. But then why fifty years in the future when the spacecraft encounters a black hole does the computer call it an 'unknown entry event'? Why don't they know? If they don't know, that means we never told anyone. And if we never told anyone it means we never made it back. Hence we die down here. Just as a matter of deductive logic.</p>
                        <h3>Get in touch</h3>
                        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
                    </div> -->
                </div>
            </section>
            <section class="col-md-4">
                
            </section>

       </div>
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
  <script src="scrollbar/dist/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="js/index.js">
    </script>
    

</body>

</html>
