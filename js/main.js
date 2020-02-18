
(function($) {
    $(function () {
        $('#nav-toggle').on('click', function() {
            $('body').toggleClass('open');
        });
    });
})(jQuery);

$(function(){
 $('.listImg ul li .listImgs img').click(function(){
  var $thisImg = $(this).attr('src');
  var $thisAlt = $(this).attr('alt');
  $('.flontImg #flontImg1 img').attr({src: $thisImg,alt:$thisAlt});
 });
});