$(window).load(function(){
 $('#homeModal').modal('show');
});

// ===== Scroll to Top ====
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


$(document).ready(function() {
 $('.carousel').carousel({
     interval: 3000
 });

 new WOW().init();

 $("#emailIcon").on("click", function() {
   $("#emailIcon").hide();
   $("#ourEmail").fadeIn().show();
 });

 $("#phoneIcon").on("click", function() {
   $("#phoneIcon").hide();
   $("#ourPhone").fadeIn().show();
 });

 $("#chatIcon").on("click", function() {
   $("#chatIcon").hide();
   $("#ourChat").fadeIn().show();
 });

 $("#ourEmail").on("click", function() {
   $("#ourEmail").hide();
   $("#emailIcon").show();
 });

 $("#ourPhone").on("click", function() {
   $("#ourPhone").hide();
   $("#phoneIcon").show();
 });

 $("#ourChat").on("click", function() {
   $("#ourChat").hide();
   $("#chatIcon").show();
 });

 $("#support").on("click", function() {
   $("#ourEmail").toggle();
   $("#ourPhone").toggle();
   $("#ourChat").toggle();
   $("#phoneIcon").toggle();
   $("#emailIcon").toggle();
   $("#chatIcon").toggle();
 });

 $("#ezyfxInfo").on("click", function() {
   $("#moreInfo").toggle();
 });

 $("#ezyfxInfo2").on("click", function() {
   $("#moreInfo2").toggle();
 });

});
