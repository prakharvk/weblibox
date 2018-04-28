var doc = $(window).height();
var slide = document.getElementById("carousel-example-2");
slide.style.height = (doc-62)+'px';
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var filters = document.getElementById("filters");
var footer = document.getElementById("myfooter");
var books= document.getElementById("books-section");
var h = document.getElementById("kode-filter-column").style.height;
var sticky = header.offsetTop;
var fsticky = footer.offsetTop;
sticky = sticky-63;
fsticky = fsticky - doc -60 ;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    header.classList.add("sticky");
    filters.style.height = "600px";
    filters.style.position = "fixed";
    filters.style.top = "63px";
    filters.style.height = "100%";

  } else {
    header.classList.remove("sticky");
    filters.style.position = "relative";
    filters.style.top = "0px";
    filters.style.height = "800px";
    books.style.margin = "15px";
  }
  if(window.pageYOffset >= fsticky)
  {
     filters.style.position = "relative";
     filters.style.overflow = "hidden";
    filters.style.top = "129px";
    filters.style.height = "1500px";
    document.getElementById("kode-filter-column").style.top = "1290px";
    document.getElementById("kode-filter-column").style.height = "1500px";
  }
  else
  {
     document.getElementById("kode-filter-column").style.height = h;
  }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "450px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0px";
}
function myfunc()
{
    console.log("execute");
    document.getElementById("header").style.display = "block";
    document.getElementById("main").style.display = "block";
    document.getElementById("footer").style.display = "block";
    document.getElementById("loader").style.display = "none";
    document.getElementById("body").style.backgroundColor = "white";
}

$( document ).ready(function() {
console.log( "document ready!" );

var $sticky = $('.sticky');
var $stickyrStopper = $('.sticky-stopper');
if (!!$sticky.offset()) { // make sure ".sticky" element exists

var generalSidebarHeight = $sticky.innerHeight();
var stickyTop = $sticky.offset().top;
var stickOffset = 0;
var stickyStopperPosition = $stickyrStopper.offset().top;
var stopPoint = stickyStopperPosition - generalSidebarHeight - stickOffset;
var diff = stopPoint + stickOffset;

$(window).scroll(function(){ // scroll event
  var windowTop = $(window).scrollTop(); // returns number

  if (stopPoint < windowTop) {
      $sticky.css({ position: 'absolute', top: diff });
  } else if (stickyTop < windowTop+stickOffset) {
      $sticky.css({ position: 'fixed', top: stickOffset });
  } else {
      $sticky.css({position: 'absolute', top: 'initial'});
  }
});

}
});
$('#my-range').on('change input', function() {
  var $this = $(this);
  $this.siblings('label').html('Price (' + $this.val() + ')');
});
$(".books").mouseover(function() {
$(this).addClass("card");

});
$(".books").mouseout(function() {
$(this).removeClass("card");
});
$(".sort-list").hide();
var i=1;
$(".sortlink").mouseup(function() {
if(i==1)
  {
    $(".sort-list").show();
    i=0;
  }
else
{
    $(".sort-list").hide();
    i=1;
}
});