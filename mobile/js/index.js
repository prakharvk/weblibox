var body = document.getElementById("body");
function openNav() {
    document.getElementById("mySidenav").style.width = "70%";
    document.getElementById("opaque").style.opacity = "0.4";
   
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("opaque").style.opacity = "1";
}
function openNav2() {
    document.getElementById("mySidenav2").style.width = "70%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.1)";
   
}

function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
    document.body.style.backgroundColor = "white";
}
function openNav3() {
    document.getElementById("mySidenav3").style.width = "70%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.1)";
   
}

function closeNav3() {
    document.getElementById("mySidenav3").style.width = "0";
    document.body.style.backgroundColor = "white";
}
function search()
{
  document.getElementsByClassName('searchinput')[0].style.display = "block";
  document.getElementsByClassName('navbar-brand')[0].style.display = "none";
  document.getElementsByClassName("navbar")[0].style.height = "66px";
  document.getElementsByClassName("cross")[0].style.display = "block";
  document.getElementsByClassName("search")[0].style.display = "none";
}
function cross()
{
  document.getElementsByClassName('searchinput')[0].style.display = "none";
  document.getElementsByClassName('navbar-brand')[0].style.display = "block";
  document.getElementsByClassName("navbar")[0].style.height = "66px";
  document.getElementsByClassName("search")[0].style.display = "block";
  document.getElementsByClassName("cross")[0].style.display = "none";
}




/*
var doc = $(window).height();
var slide = document.getElementById("carousel-example-2");
slide.style.height = (doc-62)+'px';
function myfunc()
{
    console.log("execute");
    document.getElementById("header").style.display = "block";
    document.getElementById("main").style.display = "block";
    document.getElementById("footer").style.display = "block";
    document.getElementById("loader").style.display = "none";
    document.getElementById("body").style.backgroundColor = "white";
}*/
  $(document).on('ready', function() {
       $('.slider-for').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: false,
   fade: true,
   asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
   slidesToShow: 4,
   slidesToScroll: 3,
   asNavFor: '.slider-for',
   arrows: false
   // prevArrow:"<img class='a-left control-c prev slick-prev' src='./img/left.png'>",
    //  nextArrow:"<img class='a-right control-c next slick-next' src='./img/right.png'>"
      //centerMode: true,
  //focusOnSelect: true
 });



});
