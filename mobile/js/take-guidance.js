
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