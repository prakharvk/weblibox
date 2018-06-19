<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weblibox</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Julius+Sans+One" rel="stylesheet">

    <!-- Bootsxtrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/checkout.css" />
    

</head>

<body>


<!-- Search Modal -->
<div style="position: absolute;right: -3%;top: -5%;" class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div style="position: absolute;right: 10%;top: 10%;" class="modal-dialog modal-sm" role="document">                           
        <div class="modal-content">
            
            <div class="modal-body">
                <input type="text" name="searchtext" placeholder="type anything..">
            </div>
        </div>
    </div>
</div>
                                

<!-- Preview book Modal -->
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
                                                    
<!-- Cart Modal -->
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
<!-- Whistlist Modal -->
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

<!-- Buy / Rent Modal -->


<div class="modal fade" id="buyrent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">R.R. Martin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
<br>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
<br>
Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.
<br>
Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
<br>
Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
<br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" style="border-radius: 10px;padding:9px 30px;">Not Agree</button>
                <button type="button" class="btn btn-danger" style="border-radius: 10px;padding: 9px 30px;">Agree</button>
            </div>
        </div>
    </div>
</div>
                                


    <header>
        <nav class="navbar navbar-expand-lg #ffffff white fixed-top scrolling-navbar webli-navbar" id="webli-navbar">
            <div class="col-md-2 webli-logo" style="padding: 0px;">
                <img src="img/weblibox.png" style="width:70%;height: 100%;">
            </div>
            <div class="col-md-7">
                <ul class="webli-navlinks">
                    <li class="webli-navlinks-li webli-navlinks-li1"><a href="index.php">HOME</a>
                    </li>
                    <li class="webli-navlinks-li webli-navlinks-li2"><a href="take-guidance.php">TAKE GUIDANCE</a>
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
    <main>
    	<div style="height: 100px;">
    		
    	</div>
           <ul class="nav md-pills nav-justified pills-secondary checkoutlinks">
			    <li class="nav-item">
			        <a style="width:85%;padding-right: 0px;display: inline-block;font-size: 20px;" class="nav-link active" id="panel11link" data-toggle="tab" href="#panel11" role="tab">Shopping cart</a>
			        <i style="width: 7%;display: inline-block;font-size: 20px;" class="fa fa-angle-right" aria-hidden="true"></i>
			    </li>
			    <li class="nav-item">
			        <a style="width:85%;padding-right: 0px;display: inline-block;font-size: 20px;" class="nav-link" id="panel12link" data-toggle="tab" href="" role="tab">Order Information</a>
			        <i style="width: 7%;display: inline-block;font-size: 20px;" class="fa fa-angle-right" aria-hidden="true"></i>
			    </li>
			    <li class="nav-item">
			        <a style="width:85%;padding-right: 0px;display: inline-block;font-size: 20px;" class="nav-link" id="panel13link" data-toggle="tab" href="" role="tab">Complete payment</a>
			    </li>
			</ul>

			<!-- Tab panels -->
			<div class="tab-content" style="background-color: #f5f5dc;">

			    <!--Panel 1-->
			    <div class="tab-pane fade in show active" id="panel11" role="tabpanel" style="padding: 3%;">
			        
			        <div class="shoppingcart" style="background-color: white;">
		        		   <ul class="bookdetails para">
		        				<li style="margin-right : 18%;margin-left: 15%;">Book Name</li>
		        				<li>Price</li>
		        				<li>Quantity</li>
		        				<li>Total</li>
		        			</ul>
		        			<hr style="margin-top: 0px; ">
			        		<ul class="book1 para">
		        				<li style="margin-left: 1%;width: 22%;"><img style="height: 100%;width: 30%;margin-right: 30%;" src="img/img1.jpg">  R.R Martin</li>
		        				<li>&#8377; 120</li>
		        				<li style="margin-right: 4%;"><input type="number" id="qty" class="form-control" style="width: 25%;position: relative;top: 30px;" value="1"></li>
		        				<li style="color: #FF6000;margin-right: 7%;">&#8377; 120</li>
		        				<li style="margin-right: 5%;"><a><i class="fas fa-times"></i></a></li>
		        			</ul>
		        			<hr style="margin-top: 0px; ">
		        			<div class="offset-md-6 col-md-6">
		        				<div>
		        					<p style="display: inline-block;margin-right: 25%;"><span class="sub-heading" style="font-size: 21px;">Delievered to </span><br><span style="color: gray;font-size: 19px;" class="para"> Dhanbad </span></p>
		        					<a style="display: inline-block;"><span class="sub-heading" style="font-size: 18px;">Change</span> <i class="fa fa-question-circle-o" aria-hidden="true" style="color: gray;font-size: 18px;"></i></a>
		        				</div>
		        			</div>
		        			<hr style="margin-bottom: 5%;">
		        			<div class="offset-md-6 col-md-6">
		        				<div>
		        					<p style="display: inline-block;margin-right: 25%;"><span class="para" style="font-size: 15px;text-transform: uppercase;color: gray;">Continue Shopping </span></p>
		        					<p style="display: inline-block;"><span class="sub-heading" style="font-size: 22px;">&#8377; 120</span><br>
                                       <button type="button" class="btn btn-warning" id="checkoutButton" style="padding : 9px 30px;width: 100%;border-radius: 5px;" onclick="openPanel12()">Checkout</button>
		        					</p>
		        				</div>
		        			</div>
		        		
			        </div>
			    </div>
			    <!--/.Panel 1-->

			    <!--Panel 2-->
			    <div class="tab-pane fade" id="panel12" role="tabpanel" style="padding: 3%">
			        <div class="orderinfo" style="background-color: white;">
			        	<br>
			        	<div class="container para">
		        		<div class="col-md-3" style="display: inline-block;font-size: 18px;">
		        			Recipient Information
		        		</div>
		        		<div class="col-md-8" style="display: inline-block;">
						    <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="color: gray;" onclick="editdetails()";>
						       <i class="far fa-edit"></i>Edit details
						    </a>
						</div>
						<hr>
						<div class="container para" id="recipient">
		        		<div class="col-md-4 recipientinfo">
		        			<p style="color: gray;position: absolute;right: 3%;top: 3%;">Default</p>
		        			<p id="Name" style="font-size: 17px;font-weight: bold;"></p>
		        			<p id="Number" style="color: gray;"></p>
		        			<p id="Pincode" style="color: gray;"></p>
		        			<p id="Address" style="color: gray;"></p>
		        		</div>
		        		
		        		
					</div>
					<div class="collapse" id="collapseExample">
						    <div class="mt-3">
						     <!--   <form>
                                    <div class="RecipientForm">
                                    <label for="ReciepientName" style="display: inline-block;">Name :</label>
                                    <input type="text" name="Name" id="ReciepientName" style="width:50%;margin: 5px"></div>
                                    <div class="RecipientForm">
                                    <label for="ReciepientNumber">Phone Number :</label>
                                    <input type="text" name="Name" id="ReciepientNumber" style="width:50%;margin: 5px"></div>
                                    <div class="RecipientForm">
                                    <label for="RecipientAddress">Address:</label>
                                    <input type="text" name="Address" id="Address" style="width:50%;margin: 5px"></div>                                   

                                    
    

                                </form> -->
                                <form id="updateDetailsForm" action="">
                                <div class="md-form">
                                    <input type="text" id="ReciepientName" name="Name" class="form-control" style="width: 50%;">
                                    <label for="ReciepientName" class="heading" >Name</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="ReciepientNumber" name="Number" class="form-control" style="width: 50%;">
                                    <label for="ReciepientNumber" class="heading" >Phone Number</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="RecipientPincode" name="Pincode" class="form-control" style="width: 50%;">
                                    <label for="RecipientPincode" class="heading" >Enter Pincode</label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="RecipientAddress" name="Address" class="form-control" style="width: 50%;">
                                    <label for="RecipientAddress" class="heading" >Enter Address</label>
                                </div>
                                 <div>
                                  <input type="submit" id="updateButton" value="Update" style="background-color: #F80;color:white;width:80px;height: 40px;border-radius: 5px" >

                                </div>
                                <form>

                

						    </div>
						</div>

					<br><br>
					<div class="container para" style="font-size: 18px;">
		        		<div class="col-md-3" style="display: inline-block;">
		        			Order Information
		        			<p><br></p>
		        		</div>
		        		<div class="col-md-3" style="display: inline-block;">
		        			<p style="font-size: 16px;">Fableheaven</p>
		        			<p style="color: gray;font-size: 15px;" class="heading">R.R Martin</p>
		        		</div>
		        		<div class="col-md-2" style="display: inline-block;font-size: 16px;">
		        				 NEW
		        			<p><br></p>
		        		</div>
		        		<div class="col-md-2" style="display: inline-block;font-size: 16px;">
		        			&#8377; 120 X 1
		        			<p><br></p>
		        		</div>
		        		<div class="col-md-1" style="display: inline-block;font-size: 16px;">
		        			&#8377; 120
		        			<p><br></p>
		        		</div>
		        		
					</div>
					<hr>
					<br>
					<div class="container para" style="font-size: 18px;">
		        		<div class="col-md-4" style="display: inline-block;">
		        			Home Delievery
		        		</div>
		        		<div class="col-md-4" style="display: inline-block;">
		        			Delivery Charges
		        		</div>
		        		<div class="col-md-2" style="display: inline-block;">
		        			&#8377; 40
		        		</div>
		        		
		        		
					</div>
					<br>
					<hr>
					<br>
					<div class="container para" style="font-size: 16px;">
		        		<div class="col-md-2 offset-md-10" style="display: inline-block;color: gray;">
		        			Subtotal : &#8377; 120
		        			<br>
		        			Shipping : &#8377; 20
		        			<br>
		        			Total : &#8377; 140
		        		</div>
		        		<br><br>
		        		<div class="col-md-3 offset-md-10" style="display: inline-block;color: gray;">
		        			<button type="button" class="btn btn-warning" style="padding : 9px;width: 70%;border-radius: 5px;" onclick="openPanel13()">Place Order</button>
		        		</div>
		        		
					</div>
					<br>
					<hr>


						
                
		        		</div>
	      </div>

			    </div>
			    <!--/.Panel 2-->

			    <!--Panel 3-->
			    <div class="tab-pane fade" id="panel13" role="tabpanel" style="padding: 3%;">
			        <div class="shoppingcart" style="background-color: white;padding: 2%;">
			        <div class="row">
                       <div class="col-md-9">
                       	 <p style="font-size: 25px;color: gray;" class="heading"><i class="fa fa-check-circle" aria-hidden="true" style="color: #FF6000;font-size: 40px;margin:2%;"></i>Your Order has been Successfully Submitted</p>
                       	 <p style="color: blue;margin-bottom: 7px;margin-left: 15%;font-size: 20px;font-weight: 5px" class="para">Please click on preferred payment mode to confirm order </p>
                       	 <form id="paymentForm" style="margin-left: 15%;margin-bottom: 15px;margin-top:15px;font-size: 18px" action="#">
                       	 <input class="paymentButton" type="submit" name="COD" value="Cash on Delivery(COD)" style="margin-left: 15%;background-color:#F80;color:white;height: 60px;border-radius: 5px ">
                       	 <input class="paymentButton" type="submit" name="POD" value="Paytm on Delivery(POD)" style="margin-left: 15%;margin-left: 25px;background-color: #F80;color:white;height: 60px;border-radius: 5px">
                       	 </form>

                       	 <br>
                       	 <p style="margin-top:20px;color: gray;margin-bottom: 5px;margin-left: 15%;font-size: 18px;display: inline-block;" class="para">Name : <span>Rishikesh Sahu</span></p>
                       	 <p style="color: gray;margin-bottom: 5px;margin-left: 15%;font-size: 18px;display: inline-block;margin-left: 5%" class="para">Address :  IIT(ISM) Dhanbad</p>
                       </div>
                       
                       <div class="col-md-3">
                       	<br>
                       	 <p class="para" style="font-size: 18px;color: gray;">Amount : &#8377; <span style="font-size: 30px;color: #FF6000;">140</span></p>
                       	 <a style="color: gray;" class="para" data-toggle="collapse" href="#orderdetails" aria-expanded="false" aria-controls="collapseExample">Click to view Order details     <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                       </div>

                   </div>
				
					<div class="collapse row" id="orderdetails">
					    <div class="col-md-4 offset-md-1" style="padding-left: 4%;">
					        <p style="color: gray;" class="para">Order number : <span>8489489834</span></p>
					        <p style="color :gray;" class="para">Phone : <span>8349098374</span></p>
					        <p style="color: gray;" class="para">Postal code : <span>826001</span></p>
					        <p></p>
					    </div>
				</div>	

			   </div>
			   <br>
			   <br>
			   <div class="paymentoption" style="background-color: white;padding: 2%;">
								   	  <!-- Nav tabs -->
					<div class="row">
					    <div class="col-md-3">
					        <ul class="nav  md-pills pills-primary flex-column" role="tablist">
					            <li class="nav-item">
					                <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab">Downloads
					                <i class="fa fa-download ml-2"></i>
					                </a>
					            </li>
					            <li class="nav-item">
					                <a class="nav-link" data-toggle="tab" href="#panel22" role="tab">Orders & invoices
					                <i class="fa fa-file-text ml-2"></i>
					                </a>
					            </li>
					            <li class="nav-item">
					                <a class="nav-link" data-toggle="tab" href="#panel23" role="tab">Billing details
					                <i class="fa fa-address-card ml-2"></i>
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
		   </div>
			    <!--/.Panel 3-->


			</div>
			
    </main>
<!--Footer-->
<footer id="footer" class="page-footer font-small stylish-color-dark pt-4 mt-4 footer" style="margin-top: 0px;">

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
    <script type="text/javascript">
    	var i = 0;
    	function editdetails()
    	{
             if(i==0)
         	{
         		document.getElementById('recipient').style.display='none';
         		i=1;
         	}
         	else
         	{
         		document.getElementById('recipient').style.display='block';
         		i=0;
         	}

    	}
    </script>
    <script type="text/javascript">
        function openPanel12()
        {

            document.getElementsByClassName("nav-link")[1].setAttribute("href","#panel12");
            document.getElementById('panel12link').click();
        }
        function openPanel13()
        {

            document.getElementsByClassName("nav-link")[2].setAttribute("href","#panel13");
            document.getElementById('panel13link').click();
        }
        function loadPanel12()
        {

            document.getElementById('checkoutButton').click();
        }
    </script>
     <script type="text/javascript">
    	
    	 $(document).ready(function(){
    	  $("#paymentForm").on("submit",function(e){
    	  	e.preventDefault();
    	 });
    	  $(".paymentButton").on("click",function(e){
    	  e.preventDefault();
    	  var paymentValue;
          paymentValue = $(this).attr('value') ;
          $.ajax({ url:"payment.php",type:'POST',data: { buttonValue:paymentValue },success:function(data){
          	document.getElementById('panel13').innerHTML=data;
          	}	
          });

          return false;
        

    			
    		});

    	});
    	/*$(document).ready(function(){
    	    
            $('#updateDetailsForm').on("submit",function(e){
            e.preventDefault();	
    		var formData = $('#updateDetailsForm').serialize();
    		$.ajax({
    			type:"post",
    			url:"updatedetails.php",
    			data:formData,
    			dataType:"json",
    			success:function(response)
    			{

    				var details=JSON.parse(JSON.stringify(response);
    				console.log(details);
    				document.getElementById('Name').innerHTML=details.Name;
    				document.getElementById('Number').innerHTML=details.Number;
    				document.getElementById('Pincode').innerHTML=details.Pincode;
    				document.getElementById('Address').innerHTML=details.Address;
    				document.getElementById('recipient').style.display='block';
    				document.getElementById('collapseExample').style.display='none'; 		
    				

    			}
    		});
    		return false;
    		           }); 
    	});
       */


    	


    </script>
		
</body>

</html>


