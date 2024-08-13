function showTab(tabId) {
    // Hide all tab contents
    var tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(function(tab) {
        tab.classList.remove('active');
    });

    // Remove active class from all tab headers
    var tabHeaders = document.querySelectorAll('.tabs li');
    tabHeaders.forEach(function(header) {
        header.classList.remove('active');
    });

    // Show the selected tab content and set it as active
    document.getElementById(tabId).classList.add('active');
    
    // Ensure event.target exists before adding active class
    if (event && event.target) {
        event.target.classList.add('active');
    } else {
        // Fallback to manually adding the active class to the correct tab header
        var headerToActivate = document.querySelector(`.tabs li[onclick="showTab('${tabId}')"]`);
        if (headerToActivate) {
            headerToActivate.classList.add('active');
        }
    }
}

// Ensure the correct tab is shown on page load based on the URL hash
document.addEventListener('DOMContentLoaded', function() {
    var initialTab = window.location.hash.substring(1) || 'benefits_future_ready';
    showTab(initialTab);
});
