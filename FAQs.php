<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Weblibox | Home Page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <?php include("files/cssfiles.php");?>

    
</head>

<body style="font-size: 1.4em">


<!-- Search Modal -->

<div style="position: fixed;right: -3%;top: -5%;" class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div style="position: absolute;right: 10%;top: 10%;" class="modal-dialog modal-sm" role="document">                           
        <div class="modal-content">
            
            <div class="modal-body">
                <input type="text" name="searchtext" placeholder="type anything..">
            </div>
        </div>
    </div>
</div>
                                

<!-- Book Preview Modal -->

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
                        <h2>$100</h2><br>
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
                        <a href="bookinfo.php" style="color: gray;text-decoration: none;">Go to book info page</a>

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
                <h2 class="modal-title sub-heading" id="exampleModalLabel">Cart</h2>
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

<div class="modal fade right" style="position: fixed;right: 0px;" id="whistlist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-full-height modal-right" role="document" style="height: 1000px;">

                                          
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title sub-heading" id="exampleModalLabel">Wishlist</h2>
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

<!-- Loader 

<div class="loader" id="loader">
  <div id="largeBox"></div>
  <div id="smallBox"></div>
</div>
-->

    <?php include("files/header.php"); ?>

    <main style="background-color: #f5f5dc;">
    <div style="height: 120px;">
        
    </div>
 <div class="container">

	<div class="page-header">
    <h1>Weblibox FAQs <small>(Frequently Asked Questions)</small></h1>
</div>
<div class="container" >
    <br />
    <br />
    <br />

    <div class="alert alert-warning alert-dismissible" role="alert" style="height: 20px;">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        This section contains some frequently asked questions related to <strong>Weblibox</strong> and its servies. If you cannot find an answer to your question, 
        make sure to contact us. 
    </div>

    <br />

    <div class="panel-group" id="accordion">
        <div class="faqHeader">General questions</div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q1: What is weblibox.com?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    A1: It is a platform which helps readers to find right books according to their need or interest moreover it sells used books and new books as well.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Q2: Where does weblibox.com provide its services? </a>
                </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse">
                <div class="panel-body">
                   A2: As of now, weblibox.com sell books only in Dhanbad city, but our assistant feature is available for all. 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Q3: Is it necessary to have weblibox account for using its services?</a>
                </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse">
                <div class="panel-body">
                    All prices for themes, templates and other items, including each seller's or buyer's account balance are in <strong>USD</strong>
                </div>
            </div>
        </div>

      <!--  <div class="faqHeader">Sellers</div> -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Q4: What do you mean by Assistant?</a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                   A4:  It is personal guidance platform of the readers through which they can find book(s) according to their needs.</strong>.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Q5: Is there any charges for using assistant?</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    A5: No, you can use assistant free of cost.
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Q6: How can I use assistant?</a>
                </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse">
                <div class="panel-body">
                    A6: See HOW IT WORKS on the homepage. 
                    <br />
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Q7: What do you mean by expert review?</a>
                </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse">
                <div class="panel-body">
                    A7:  These are the reviews given by the experts in their field who have a handy experience in teaching and guiding. For fields like B.Tech and M.Tech, reviews are provided by professors of IITs and NITs. For competitions/entrance exams, reviews are provided by the teachers who have huge experience in their field.
                    
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Q8: What do you mean by publisher’s review?</a>
                </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse">
                <div class="panel-body">
                    A8: This is what the publisher or the author has to say about the book.  Most of the times you find this written on the back cover of the book.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Q9: What do you mean by the reader’s reviews?</a>
                </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse">
                <div class="panel-body">
                    A9: These are the reviews given by the readers of the book. Any reader can give their reviews about a book which might be useful for others.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Q10: What do you mean by the weblibucks?</a>
                </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse">
                <div class="panel-body">
                    A10: Weblibucks is like virtual wallet money which can be used to buy books through weblibox.com. 5 buck = 1Rs 
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Q11: How can I earn weblibucks?</a>
                </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse">
                <div class="panel-body">
                   A11: You can earn weblibucks by giving review of books. For more information go to _____.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseA">Q12: How many weblibucks can i earn?</a>
                </h4>
            </div>
            <div id="collapseA" class="panel-collapse collapse">
                <div class="panel-body">
                   A12: A user can earn as many as they can. For more information visit __________  .
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseB">Q13: How can I redeem weblibucks?</a>
                </h4>
            </div>
            <div id="collapseB" class="panel-collapse collapse">
                <div class="panel-body">
                   A13: You can redeem your weblibucks by purchasing any book from weblibox.com.  While purchasing your weblibucks will be automatically redeemed from the cost value of your purchase.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseC">Q14: If a book delivered to me is wrong/damaged/missing pages, then how can I return it?</a>
                </h4>
            </div>
            <div id="collapseC" class="panel-collapse collapse">
                <div class="panel-body">
                  A14: Sorry, as of now we don’t accept returns (it is under process). So until we come up with the return policy kindly check the condition of the book at the time of delivery.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseD">Q15: What are the payment methods available?</a>
                </h4>
            </div>
            <div id="collapseD" class="panel-collapse collapse">
                <div class="panel-body">
                   A15: Right now we are accepting COD (cash on delivery) and PAYTM ON DELIVERY.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseE">Q16: Can I buy a book which is not listed in weblibox.com?</a>
                </h4>
            </div>
            <div id="collapseE" class="panel-collapse collapse">
                <div class="panel-body">
                   A16: YES. You can request a book and fill all the required fields. We will contact you soon with the status of your request. To request a book visit _______________ .
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseF">Q17: What is my wish list?</a>
                </h4>
            </div>
            <div id="collapseF" class="panel-collapse collapse">
                <div class="panel-body">
                   A17: All the books requested by you are added to your wishlist along with their status.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseG">Q18: Why are there different prices of a book with the same title?</a>
                </h4>
            </div>
            <div id="collapseG" class="panel-collapse collapse">
                <div class="panel-body">
                   A18: This might be because of the different editions of the same book. Each edition is of different price.
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseH">Q19: Why the bucks were not credited to my account despite of giving review?</a>
                </h4>
            </div>
            <div id="collapseH" class="panel-collapse collapse">
                <div class="panel-body">
                   A19: For getting weblibucks your review should be genuine and not the copy of others.
                </div>
            </div>
        </div>	
    </div>
</div>
    </main>
    <style>
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }

    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #F58723;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
</style>
   

    <?php include("files/footer.php");?>         
    <?php include("files/jsfiles.php"); ?>
    <script type="text/javascript" src="js/index.js">
    </script>
    <script type="text/javascript">
        $(".blogcontainer").mouseover(function(){
            $(this).addClass("card")
        });
        $(".blogcontainer").mouseout(function(){
            $(this).removeClass("card")
        });
    </script>

</body>

</html>
