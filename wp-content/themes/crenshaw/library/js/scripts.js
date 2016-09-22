/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

    // Pullquote functionality so the content is not repeated
   $(function() {
      $('span.pullquote').each(function() {
        var $parentParagraph = $(this).parent('p');
        $parentParagraph.css('position', 'relative');
        $(this).clone()
          .addClass('pulledquote')
          .prependTo($parentParagraph);
      });
    });

    // Mobile Nav Trigger
    $('.menu-trigger').on('click', function() {
        $('.header nav').toggleClass('visible');
    });


}); /* end of as page load scripts */
