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
});
