var changeableWords;
var i = 0;
changeableWords = ["Digital","Electronics","Embedded","Software"];
$(document).ready(function(){
  $(".view-more").hide();
  //$(".mobile-menu").hide();
  window.onscroll = function() {scrollFunction()};
  changeWords();
  $(".ac").addClass('openning-options-click');
  $(".select-focus").addClass('openning-options-click');
  $(".development-images-group").hover(function(){
    $(this).find(".view-more").show(500);
  },
  function () {
    $(this).find(".view-more").hide();
 });
 $(".navbar-toggler").click(function(){
   toggleMobileMenu();
 });
 $("#close").click(function(){
  toggleWebMenu();
});
$("#send").click(function(){
  subcriptionEntry();
});
$("#csubmit").click(function(){
  contactFormEntry();
});
$(".quit").click(function(){
  closeErrorPopup();
});
$(".openning-options").click(function(){
  var classname = $(this).attr('class');
  if(classname.includes('openning-options-click')){
    $(this).removeClass('openning-options-click');
   }
   else {
    $('.openning-options-click').removeClass('openning-options-click');
     $(this).addClass('openning-options-click');
   }
});
$(".tittle-right").click(function(){
  closeFormPopup();
});
$(".careers-view-apply").click(function(){
  openFormPopup();
});
count();
});
function scrollFunction() {
  if ( document.documentElement.scrollTop > 590) {
    $("#myHeader").addClass("header-scroll");
    $(".hero").addClass("hero-scroll");
  } else {
    $("#myHeader").removeClass("header-scroll");
    $(".hero").removeClass("hero-scroll");
  }
  if ( document.documentElement.scrollTop > 4500) {
    $(".right").removeClass("slide-out");
    $(".right").addClass("slide-in");
  } else {
    $(".right").removeClass("slide-in");
    $(".right").addClass("slide-out");
  }
}
function changeWords(){
  if(i==4){i = 0;}
  $("#changable").text(changeableWords[i]);
  i++;
  setTimeout(changeWords, 3000);
};
function toggleMobileMenu() {
  $(".mobile-menu").show();
  $(".header").hide();
}
function toggleWebMenu() {
  $(".mobile-menu").hide();
  $(".header").show();
}
function subcriptionEntry() {
  $(".sucess-msg").show();
  setTimeout(function() {
    $('.sucess-msg').fadeOut('slow');
}, 2000);
}
function contactFormEntry() {
  $(".sucess-msg3").show();
  setTimeout(function() {
    $('.sucess-msg3').fadeOut('slow');
}, 2000);
}
function count(){
  $('.counting').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    
    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },
  
    {
  
      duration: 10000,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum+'+');
        //alert('finished');
      }
  
    });  
    
  
  });
}
function closeErrorPopup(){
  $('.error').css('display','none');
}
function closeFormPopup() {
  $('.view-apply').css('display','none');
}
function openFormPopup() {
  $('.view-apply').css('display','block');
}