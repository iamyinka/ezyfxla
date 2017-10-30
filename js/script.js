$(window).load(function(){
 $('#homeModal').modal('show');
});

$(window).load(function(){
    $(".goog-logo-link").empty();
    $('.goog-te-gadget').html($('.goog-te-gadget').children());
})

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
 
$("#submitForm").on('click', function() {
    $("#contact_form").submit();
});

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

 $(".hideAfter").on("click", function() {
   $(".moreInfo").show();
   $(".hideAfter").css("display", "none");
 });

 $(".ezyfxInfo").on("click", function() {
   $(".moreInfo").toggle();
 });

 $("#ezyfxInfo").on("click", function() {
   $("#moreInfo").toggle();
 });

 $("#ezyfxInfo2").on("click", function() {
   $("#moreInfo2").toggle();
 });

 $("#learnMore1").on("click", function() {
   $("#learnMore1").css("display", "none");
   $("#learnMore2").show();
   $("#openInfo1").toggle();
 });

 $("#learnMore2").on("click", function() {
   $("#learnMore2").css("display", "none");
   $("#learnMore1").show();
   $("#openInfo1").toggle();
 });

 $("#learnMore3").on("click", function() {
   $("#learnMore3").css("display", "none");
   $("#learnMore4").show();
   $("#openInfo2").toggle();
 });

 $("#learnMore4").on("click", function() {
   $("#learnMore4").css("display", "none");
   $("#learnMore3").show();
   $("#openInfo2").toggle();
 });

 $("#learnMore5").on("click", function() {
   $("#learnMore5").css("display", "none");
   $("#learnMore6").show();
   $("#openInfo3").toggle();
 });

 $("#learnMore6").on("click", function() {
   $("#learnMore6").css("display", "none");
   $("#learnMore5").show();
   $("#openInfo3").toggle();
 });

 $("#option1").on("click", function() {
   $("#option1Sign1").toggle();
   $("#option1Sign2").toggle();
   $("#paymentOption1").toggle();
 });

 $("#option2").on("click", function() {
   $("#option2Sign1").toggle();
   $("#option2Sign2").toggle();
   $("#paymentOption2").toggle();
 });

 $("#option3").on("click", function() {
   $("#option3Sign1").toggle();
   $("#option3Sign2").toggle();
   $("#paymentOption3").toggle();
 });

 $("#option4").on("click", function() {
   $("#option4Sign1").toggle();
   $("#option4Sign2").toggle();
   $("#paymentOption4").toggle();
 });

 $("#option5").on("click", function() {
   $("#option5Sign1").toggle();
   $("#option5Sign2").toggle();
   $("#paymentOption5").toggle();
 });

 $(function() {
  $("#phplive_btn_1508839562").draggable();
});

 $("#subscribeForm").on("submit", function(e) {
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax({
        url: formURL,
        type: "POST",
        data: postData,
        success: function(data, textStatus, jqXHR) {
            $('#homeModal .modal-header .modal-title').html("EZYFX WELCOMES YOU!!!");
            $('#homeModal .modal-body').html(data);
            $("#subscribeBtn").remove();
        },
        error: function(jqXHR, status, error) {
            console.log(status + ": " + error);
        }
    });
    e.preventDefault();

    $("#subscribeBtn").on('click', function() {
        $("#subscribeForm").submit();
    });
});

});


