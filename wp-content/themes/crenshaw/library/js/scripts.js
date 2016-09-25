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

		// Form Trigger
		$('.formTrigger').on('click', function(e) {
			e.preventDefault();
			$('#form').toggleClass('active');
		});

}); /* end of as page load scripts */
