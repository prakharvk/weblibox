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
    
    <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link href="css/style.css" rel="stylesheet">
    

</head>

<body onload="myfunc()" id="body">
    <!--Navbar-->
<nav class="navbar navbar-expand-lg" style="background-color:  #fff ;">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="img/weblibox.png" style="height: 40px;width: 110px;display: inline-block;"></a>
<input type="text" name="search" placeholder="Search a book" style="width: 50%;position: relative;" class="searchinput" />

    <!-- Collapse button -->
    <button style="position: absolute;left:60%;padding: 0px;margin:0px;" class="navbar-toggler search" type="button" data-toggle="collapse"  onclick="search()" style="cursor: pointer;" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fa fa-search" aria-hidden="true"></i></span>
    </button>
    <button style="position: absolute;left:60%;padding: 0px;margin:0px;" class="navbar-toggler cross" type="button" data-toggle="collapse"  onclick="cross()" style="cursor: pointer;" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span ><i class="fa fa-remove" aria-hidden="true"></i></span>
    </button>
    <button style="float: right;padding:0px;margin: 0px;" class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span>Guidance</span>
    </button>
    

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

        </ul>
        <!-- Links -->

        <form class="form-inline">
            <div class="md-form mt-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<div id="mySidenav" class="sidenav">
  <div class="topbar">
  <p style="margin-left: 20px;font-size: 20px;">Select Stream</p>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
  </div>
  <ul class="sidebarlist">
    <a href="#" onclick="openNav2()" style="padding:0px;" class="sidebarlink"><li>B.Tech<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>M.Tech<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Management<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>CBSE Board<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>ICSE Board<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Medical<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Cometition<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
</ul>
</div>
<div id="mySidenav2" class="sidenav">
  <div class="topbar">
  <p style="margin-left: 20px;font-size: 20px;">Select Branch</p>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
  </div>
  <ul class="sidebarlist">
    <a href="#" onclick="openNav3()" style="padding:0px;" class="sidebarlink"><li>Computer Science<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Electrical<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Mechanical<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Mining<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Chemical<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Civil<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Electonics and communication<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
</ul>
</div>
<div id="mySidenav3" class="sidenav">
  <div class="topbar">
  <p style="margin-left: 20px;font-size: 20px;">Select Subject</p>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()"><i class="fas fa-angle-left" aria-hidden="true"></i></a>
  </div>
  <ul class="sidebarlist">
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Data Structure<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Algorithm and Design<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>OOPS<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Artificial Intelligence<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>DBMS<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Computer Organization<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
    <a href="#" style="padding:0px;" class="sidebarlink"><li>Theory of Computation<i style="position: absolute;right:10px;" class="fas fa-angle-right" aria-hidden="true"></i></li></a>
</ul>
</div>
<!--/.Navbar-->
    <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified indigo webli-list" role="tablist">
    <li class="nav-item" onclick="hidebooks()">
        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-home" aria-hidden="true"></i><p style="font-size: 12px;">Home</p></a>
    </li>
    <li class="nav-item" onclick="hidebooks()">
        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i><p style="font-size: 12px;">Cart</p> </a>
    </li>
    <li class="nav-item" onclick="hidebooks()">
        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-bell" aria-hidden="true"></i><p style="font-size: 12px;">Buy rent books</p></a>
    </li>
    <li class="nav-item" onclick="hidebooks()">
        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user"></i><p style="font-size: 12px;">Profile</p> </a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content">
    <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel5" role="tabpanel">
        
<div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
 
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel6" role="tabpanel">
        
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        <div class="card-body" style="padding: 10px;">
            <div class="bookimage col-sm-4">
                <img src="img/img1.jpg" style="height: 130px;">
            </div>
            <div class="booktext">
                <p class="sub-heading" style="color: black;">Fablehaven</p>
                <p class="heading" style="font-size: 12px;">Brandon mull</p>
                <p class="para" style="font-size: 14px;">$30</p>
                <!-- <a href="#" style="position: relative;bottom: 60px;left: 200px;"><i class="fa fa-heart" aria-hidden="true"></i></a>
                <a href="#" style="position: relative;top: 40px;left: 180px;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>  -->
            </div>
        </div>
        
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel7" role="tabpanel">
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
    </div>
    <!--/.Panel 3-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel8" role="tabpanel">
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione porro voluptate odit minima.</p>
    </div>
    <!--/.Panel 3-->
</div>

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
<div style="height: 53px;">
      
  </div>

</body>


                      
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
    
  <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="js/index.js">
    </script>
    <script type="text/javascript">
        function hidebooks()
        {
            document.getElementById('hidebooks').style.display = "none";
        }
    </script>

</body>

</html>
