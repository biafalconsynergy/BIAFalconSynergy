$(document).ready(function() {
    function isElementInViewport(el) {
      const rect = el[0].getBoundingClientRect();
      return (
        rect.top <= $(window).height() &&
        rect.bottom >= 0
      );
    }
  
    function checkVisibility() {
      $('.slide-up').each(function() {
        if (isElementInViewport($(this))) {
          $(this).addClass('animate__animated animate__slideInUp active');
        }
      });
    }
  
    // Check visibility on page load
    checkVisibility();
  
    // Check visibility on scroll
    $(window).on('scroll', checkVisibility);
  });