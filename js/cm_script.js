// Add any JavaScript if needed for interactivity or additional functionality

//Custom Machines
$(document).ready(function() {
  $('.cm_slide_up').addClass('animate__animated animate__slideInUp');

  $('.cm_tab_nav li a').on('click', function(event) {
    event.preventDefault();
    const tabId = $(this).data('tab');

    // Remove active class from all tabs and contents
    $('.cm_tab_nav li').removeClass('active');
    $('.cm_tab_content').removeClass('active');

    // Add active class to the selected tab and corresponding content
    $(this).parent().addClass('active');
    $(`.cm_tab_content[data-tab-content="${tabId}"]`).addClass('active');
  });
});


